# GrowthCapital Website

Corporate trading website for **GrowthCapital** (License Number: **11064258**).
Built with **PHP** (front-controller architecture) and **MySQL**, with custom CSS/JS.

Design reference: [IC Markets](https://www.icmarkets.com/global/en/) ·
Content reference: [Infinity Trade Solutions](https://infinitytradesssolution.com/)

---

## Tech stack

- PHP 8.1+ (front controller + small router/view layer, PSR-4 autoloading)
- MySQL 8.0+ (login/register + contact storage — schema included)
- Custom CSS (no framework) + vanilla JavaScript
- Composer for autoloading

## Project structure

```
growthcapital/
├── bootstrap.php            # Autoloader + config + helpers
├── composer.json
├── config/
│   ├── config.example.php   # Config template (committed)
│   └── config.php           # Local secrets (git-ignored)
├── database/
│   └── schema.sql           # MySQL schema
├── docs/
│   └── DEPLOYMENT.md        # VPS deployment guide
├── public/                  # Web root (point the server here)
│   ├── index.php            # Front controller
│   ├── router.php           # Dev-server router
│   ├── .htaccess            # Apache rewrites (production)
│   └── assets/
│       ├── css/style.css
│       ├── js/main.js
│       └── images/
├── routes/
│   └── web.php              # Route definitions
├── src/
│   ├── Core/Router.php
│   ├── Core/View.php
│   ├── Database/Database.php
│   └── helpers.php
└── views/                   # Templates (partials + pages)
```

## Local setup

> Prerequisites: PHP, MySQL and Composer on your PATH (XAMPP provides PHP/MySQL).

```powershell
# 1. Install dependencies (generates the optimized autoloader)
composer install

# 2. Create your local config
copy config\config.example.php config\config.php
#    then edit config\config.php with your DB credentials

# 3. (Optional) create the database
mysql -u root -p < database\schema.sql

# 4. Start the dev server from the project root
php -S localhost:8000 -t public public/router.php
```

Open <http://localhost:8000>.

## Routes

| Path         | Description                                  |
|--------------|----------------------------------------------|
| `/`          | Home                                         |
| `/markets`   | Markets (Forex, Metals, Indices, Crypto)     |
| `/platforms` | Trading platforms                            |
| `/accounts`  | Account types / pricing                      |
| `/about`     | About us                                     |
| `/contact`   | Contact                                      |
| `/login`     | Client login (UI ready; logic pending)       |
| `/register`  | Open an account (UI ready; logic pending)    |
| `/platform`  | Standalone trading-platform login            |

## Status

- ✅ Professional structure, routing, layout, responsive design
- ✅ Footer shows company name + License Number 11064258
- ✅ Login / Register buttons + routing prepared
- ⏳ Login/Register **functionality** to be implemented later
- ⏳ Real auth/platform links to be supplied later
- ⏳ Deployment to VPS — see [docs/DEPLOYMENT.md](docs/DEPLOYMENT.md)

## Deployment

See [docs/DEPLOYMENT.md](docs/DEPLOYMENT.md) for VPS setup (Apache/Nginx, document
root, database, and config).
