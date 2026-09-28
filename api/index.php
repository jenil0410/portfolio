<?php

// Prepare writable storage directories in /tmp for Vercel's serverless environment
$storagePath = '/tmp/storage';

$requiredDirs = [
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
    $storagePath . '/app/public',
    '/tmp/bootstrap/cache',
];

foreach ($requiredDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// Ensure SQLite database file exists if needed
if (!file_exists('/tmp/database.sqlite')) {
    @touch('/tmp/database.sqlite');
}

// Set environment defaults for serverless execution
$envDefaults = [
    'APP_KEY'                => 'base64:EYHUtc6bUY7IpMNribglu6xmH83DgtRvj8HnfJjBgDw=',
    'APP_ENV'                => 'production',
    'APP_STORAGE'            => $storagePath,
    'VIEW_COMPILED_PATH'     => $storagePath . '/framework/views',
    'APP_CONFIG_CACHE'       => '/tmp/config.php',
    'APP_EVENTS_CACHE'       => '/tmp/events.php',
    'APP_PACKAGES_CACHE'     => '/tmp/packages.php',
    'APP_ROUTES_CACHE'       => '/tmp/routes.php',
    'APP_SERVICES_CACHE'     => '/tmp/services.php',
    'SESSION_DRIVER'         => 'cookie',
    'CACHE_STORE'            => 'array',
    'CACHE_DRIVER'           => 'array',
    'LOG_CHANNEL'            => 'stderr',
    'DB_CONNECTION'          => 'sqlite',
    'DB_DATABASE'            => '/tmp/database.sqlite',
    'APP_MAINTENANCE_DRIVER' => 'file',
    'QUEUE_CONNECTION'       => 'sync',
];

foreach ($envDefaults as $key => $val) {
    if (empty(getenv($key))) {
        putenv("{$key}={$val}");
    }
    if (empty($_ENV[$key])) {
        $_ENV[$key] = $val;
    }
    if (empty($_SERVER[$key])) {
        $_SERVER[$key] = $val;
    }
}

// Forward request to Laravel's public entry point
require __DIR__ . '/../public/index.php';

