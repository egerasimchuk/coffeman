<?php

declare(strict_types=1);

return [
    /**
     * Bot configuration
     */
    'bot'      => [
        'name'    => env('PHP_TELEGRAM_BOT_NAME', ''),
        'api_key' => env('PHP_TELEGRAM_BOT_API_KEY', ''),
    ],

    /**
     * Database integration
     */
    'database' => [
        'enabled'    => true,
        'connection' => env('DB_CONNECTION', 'mysql'),
    ],

    'commands' => [
        'before'  => true,
        'paths'   => [
            base_path('app/Services/Telegram/Commands'),
        ],
        'configs' => [
            // Custom commands configs
        ],
    ],

    'admins'  => [
        // Admin ids
    ],

    /**
     * Request limiter
     */
    'limiter' => [
        'enabled'  => false,
        'interval' => 1,
    ],

    'upload_path'   => storage_path('app'),
    'download_path' => storage_path('app'),
];
