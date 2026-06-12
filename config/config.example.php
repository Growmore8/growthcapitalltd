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
        'email'    => 'support@growthcapitalltd.com',
        'phone'    => '+44 7451 209400',
        'whatsapp' => '+44 7451 209400',
        'telegram' => '+44 7451 209400',
        'address'  => 'No. 145, WeWork Building, City Road, London EC1V 1AZ, United Kingdom',
        'map_query' => '145 City Road, London EC1V 1AZ, United Kingdom',
    ],

    // External auth/platform links (trading platform client area).
    'links' => [
        'login'         => 'https://trade.growthcapitalltd.com/login',
        'register'      => 'https://trade.growthcapitalltd.com/register?type=LIVE',
        'platform'      => 'https://trade.growthcapitalltd.com/login',
        'webtrader_url' => 'https://trade.growthcapitalltd.com/login',
    ],
];
