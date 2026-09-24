<?php

// 1. Prepare temporary writable directories for Vercel Serverless environment
$tmpDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// 2. Pre-seed cache files from build if they exist
foreach (['packages.php', 'services.php'] as $file) {
    $src = __DIR__ . '/../bootstrap/cache/' . $file;
    $dst = '/tmp/bootstrap/cache/' . $file;
    if (file_exists($src) && !file_exists($dst)) {
        @copy($src, $dst);
    }
}

// 3. Ensure a temporary sqlite file exists as fallback
if (!file_exists('/tmp/database.sqlite')) {
    @touch('/tmp/database.sqlite');
}

// 4. Set environment overrides for serverless read-only filesystem
$envOverrides = [
    'APP_STORAGE' => '/tmp/storage',
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'SESSION_DRIVER' => 'cookie',
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'APP_PACKAGES_CACHE' => '/tmp/bootstrap/cache/packages.php',
    'APP_SERVICES_CACHE' => '/tmp/bootstrap/cache/services.php',
    'APP_CONFIG_CACHE' => '/tmp/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE' => '/tmp/bootstrap/cache/routes-v7.php',
    'APP_EVENTS_CACHE' => '/tmp/bootstrap/cache/events.php',
    'DB_DATABASE' => '/tmp/database.sqlite',
];

foreach ($envOverrides as $key => $val) {
    if (!getenv($key)) {
        putenv("{$key}={$val}");
    }
    if (!isset($_ENV[$key])) {
        $_ENV[$key] = $val;
    }
    if (!isset($_SERVER[$key])) {
        $_SERVER[$key] = $val;
    }
}

// 5. Delegate execution to public/index.php
require __DIR__ . '/../public/index.php';

