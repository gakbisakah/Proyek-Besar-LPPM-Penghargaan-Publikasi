<?php

return [
    'api' => [
        'users_url' => env('API_USERS_URL', 'https://service-users.del.ac.id/api/v1'),
        'users_username' => env('API_USERS_USERNAME', ''),
        'users_password' => env('API_USERS_PASSWORD', ''),
    ],

    'app' => [
        'name' => env('APP_NAME', 'HRD'),
        'environment' => env('APP_ENV', 'production'),
    ],

    'database' => [
        'default' => env('DB_CONNECTION', 'pgsql'),
    ],
];
