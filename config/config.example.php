<?php

declare(strict_types=1);

/**
 * Application configuration template.
 *
 * Copy this file to config/config.php and fill in real values for your
 * environment. config/config.php is git-ignored so secrets never reach GitHub.
 *
 *   Windows:  copy config\config.example.php config\config.php
 *   Linux:    cp config/config.example.php config/config.php
 */
return [
    'app' => [
        'name'     => 'GrowthCapital',
        'license'  => '11064258',
        // No trailing slash. Local dev default below; set to your domain on the VPS.
        'base_url' => 'http://localhost:8000',
        'env'      => 'local', // local | production
        'debug'    => true,
    ],

    'db' => [
        'host'    => '127.0.0.1',
        'port'    => '3306',
        'name'    => 'growthcapital',
        'user'    => 'root',
        'pass'    => '',
        'charset' => 'utf8mb4',
    ],

    'contact' => [
        'email'   => 'support@growthcapital.example',
        'phone'   => '+44 20 0000 0000',
        'address' => 'London, United Kingdom',
    ],

    // External auth/platform links — to be provided later by the business.
    'links' => [
        'login'         => '/login',
        'register'      => '/register',
        'platform'      => '/platform',
        'webtrader_url' => '#',
    ],
];
