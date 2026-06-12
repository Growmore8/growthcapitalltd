# Deployment Guide — GrowthCapital (VPS)

## Quick path: Hostinger VPS + CloudPanel (Nginx) — growthcapitalltd.com

CloudPanel runs **Nginx + PHP-FPM**, so the `.htaccess` is not used; the PHP-site
vhost already routes everything to `index.php`. We only need to point the web root
at `/public`.

> The app has **no Composer dependencies** (autoload-only), so it runs even
> without `composer install` thanks to the fallback autoloader in `bootstrap.php`.

**1. DNS** (registrar / Hostinger DNS) — point the domain at the VPS:
```
A   @     187.127.106.13
A   www   187.127.106.13
```

**2. Create the site (CloudPanel → + Add Site → Create a PHP Site):**
- Application: `Generic`  ·  Domain: `growthcapitalltd.com`  ·  PHP: `8.3`
- Site User: `growthcapital` (save the generated password)
- After creating, add `www.growthcapitalltd.com` under **Site → Domains**.

**3. Create the database (CloudPanel → site → Databases → Add):**
- Name: `growthcapital`  ·  User: `growthcapital_user`  ·  save the password.

**4. Deploy the code** (Hostinger **Terminal**, or `ssh growthcapital@187.127.106.13`):
```bash
cd /home/growthcapital/htdocs/growthcapitalltd.com
rm -rf ./* ./.[!.]* 2>/dev/null            # clear the default placeholder
git clone https://github.com/Growmore8/growthcapitalltd.git .
composer install --no-dev --optimize-autoloader   # optional (no deps); skip if composer absent
cp config/config.example.php config/config.php
nano config/config.php                      # see values below
mysql -u growthcapital_user -p growthcapital < database/schema.sql
```
`config/config.php` production values:
```php
'app' => ['name'=>'GrowthCapital','license'=>'11064258',
          'base_url'=>'https://growthcapitalltd.com','env'=>'production','debug'=>false],
'db'  => ['host'=>'127.0.0.1','port'=>'3306','name'=>'growthcapital',
          'user'=>'growthcapital_user','pass'=>'YOUR_DB_PASSWORD','charset'=>'utf8mb4'],
```

**5. Point the web root at `/public`** (CloudPanel → site → **Vhost**):
change the `root` line to:
```nginx
root /home/growthcapital/htdocs/growthcapitalltd.com/public;
```
Save (CloudPanel reloads Nginx). The existing `try_files $uri $uri/ /index.php?$query_string;`
handles clean URLs.

**6. SSL** (CloudPanel → site → **SSL/TLS → Actions → New Let's Encrypt Certificate**),
include `www`. CloudPanel adds the HTTPS redirect automatically.

**7. Updating later:**
```bash
cd /home/growthcapital/htdocs/growthcapitalltd.com && git pull origin main
```

---

## Generic guide (other servers / Apache)

This guide covers deploying the site to a Linux VPS with a domain. Fill in the
real VPS details when provided.

> **Important:** The web server's document root MUST point at the `public/`
> directory. Everything outside `public/` (config, src, views) must stay above
> the web root so it cannot be served directly.

---

## 1. Prerequisites on the VPS

```bash
sudo apt update
sudo apt install -y php php-cli php-mysql php-mbstring php-xml unzip git
sudo apt install -y mysql-server
# Web server — Apache OR Nginx (choose one):
sudo apt install -y apache2          # Apache
# sudo apt install -y nginx php-fpm  # Nginx alternative

# Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

## 2. Get the code

```bash
cd /var/www
sudo git clone https://github.com/Growmore8/growthcapitalltd.git growthcapital
cd growthcapital
sudo composer install --no-dev --optimize-autoloader
sudo chown -R www-data:www-data /var/www/growthcapital
```

## 3. Configuration

```bash
cp config/config.example.php config/config.php
nano config/config.php
```

Set, at minimum:
- `app.base_url` → `https://yourdomain.com`
- `app.env` → `production`, `app.debug` → `false`
- `db.*` → production database credentials

## 4. Database

```bash
sudo mysql < database/schema.sql
# Then create a dedicated DB user and grant privileges:
sudo mysql -e "CREATE USER 'gc_user'@'localhost' IDENTIFIED BY 'STRONG_PASSWORD';"
sudo mysql -e "GRANT ALL PRIVILEGES ON growthcapital.* TO 'gc_user'@'localhost'; FLUSH PRIVILEGES;"
```
Update `config/config.php` `db.user` / `db.pass` accordingly.

## 5a. Apache virtual host

`/etc/apache2/sites-available/growthcapital.conf`:

```apache
<VirtualHost *:80>
    ServerName yourdomain.com
    ServerAlias www.yourdomain.com
    DocumentRoot /var/www/growthcapital/public

    <Directory /var/www/growthcapital/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog  ${APACHE_LOG_DIR}/growthcapital_error.log
    CustomLog ${APACHE_LOG_DIR}/growthcapital_access.log combined
</VirtualHost>
```

```bash
sudo a2enmod rewrite headers
sudo a2ensite growthcapital
sudo systemctl reload apache2
```

## 5b. Nginx server block (alternative)

`/etc/nginx/sites-available/growthcapital`:

```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/growthcapital/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php-fpm.sock;  # match your PHP version
    }

    location ~ /\. { deny all; }
}
```

```bash
sudo ln -s /etc/nginx/sites-available/growthcapital /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx
```

## 6. HTTPS (Let's Encrypt)

```bash
sudo apt install -y certbot
# Apache:
sudo apt install -y python3-certbot-apache && sudo certbot --apache
# Nginx:
sudo apt install -y python3-certbot-nginx  && sudo certbot --nginx
```

## 7. Updating the site later

```bash
cd /var/www/growthcapital
sudo git pull origin main
sudo composer install --no-dev --optimize-autoloader
sudo systemctl reload apache2   # or nginx
```

---

### Deployment checklist
- [ ] Document root points to `public/`
- [ ] `config/config.php` created with production values (`debug=false`)
- [ ] Database imported and dedicated DB user created
- [ ] `mod_rewrite` (Apache) / `try_files` (Nginx) working — clean URLs load
- [ ] HTTPS certificate installed and redirecting
- [ ] Login / Register / Platform links updated when provided
