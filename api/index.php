<?php

// Prepare writable storage directories in /tmp for Vercel's serverless environment
$storagePath = '/tmp/storage';

$requiredDirs = [
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
    '/tmp/bootstrap/cache',
];

foreach ($requiredDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Ensure SQLite database file exists if needed
if (!file_exists('/tmp/database.sqlite')) {
    @touch('/tmp/database.sqlite');
}

// Fallback APP_KEY if not set
if (empty(getenv('APP_KEY'))) {
    putenv('APP_KEY=base64:EYHUtc6bUY7IpMNribglu6xmH83DgtRvj8HnfJjBgDw=');
}

// Set environment overrides for serverless read-only filesystem
$envOverrides = [
    'APP_STORAGE'            => $storagePath,
    'VIEW_COMPILED_PATH'     => $storagePath . '/framework/views',
    'SESSION_DRIVER'         => 'cookie',
    'CACHE_STORE'            => 'array',
    'CACHE_DRIVER'           => 'array',
    'LOG_CHANNEL'            => 'stderr',
    'APP_PACKAGES_CACHE'     => '/tmp/packages.php',
    'APP_SERVICES_CACHE'     => '/tmp/services.php',
    'APP_CONFIG_CACHE'       => '/tmp/config.php',
    'APP_ROUTES_CACHE'       => '/tmp/routes.php',
    'APP_EVENTS_CACHE'       => '/tmp/events.php',
    'DB_DATABASE'            => '/tmp/database.sqlite',
    'APP_MAINTENANCE_DRIVER' => 'file',
    'QUEUE_CONNECTION'       => 'sync',
];

foreach ($envOverrides as $key => $val) {
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
