<?php

// Display errors in case of unexpected startup crash
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
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

    // 2. Ensure an empty sqlite file exists if needed
    if (!file_exists('/tmp/database.sqlite')) {
        @touch('/tmp/database.sqlite');
    }

    // 3. Fallback APP_KEY if not configured in Vercel environment variables
    if (empty(getenv('APP_KEY')) && empty($_ENV['APP_KEY']) && empty($_SERVER['APP_KEY'])) {
        $fallbackKey = 'base64:EYHUtc6bUY7IpMNribglu6xmH83DgtRvj8HnfJjBgDw=';
        putenv("APP_KEY={$fallbackKey}");
        $_ENV['APP_KEY'] = $fallbackKey;
        $_SERVER['APP_KEY'] = $fallbackKey;
    }

    // 4. Set environment overrides for serverless read-only filesystem
    $envOverrides = [
        'APP_ENV' => 'production',
        'APP_DEBUG' => 'true',
        'APP_STORAGE' => '/tmp/storage',
        'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
        'SESSION_DRIVER' => 'cookie',
        'CACHE_STORE' => 'array',
        'CACHE_DRIVER' => 'array',
        'LOG_CHANNEL' => 'stderr',
        'APP_PACKAGES_CACHE' => '/tmp/packages.php',
        'APP_SERVICES_CACHE' => '/tmp/services.php',
        'APP_CONFIG_CACHE' => '/tmp/config.php',
        'APP_ROUTES_CACHE' => '/tmp/routes.php',
        'APP_EVENTS_CACHE' => '/tmp/events.php',
        'DB_DATABASE' => '/tmp/database.sqlite',
        'APP_MAINTENANCE_DRIVER' => 'file',
        'QUEUE_CONNECTION' => 'sync',
    ];

    foreach ($envOverrides as $key => $val) {
        if (!getenv($key) || getenv($key) === '') {
            putenv("{$key}={$val}");
        }
        if (!isset($_ENV[$key]) || $_ENV[$key] === '') {
            $_ENV[$key] = $val;
        }
        if (!isset($_SERVER[$key]) || $_SERVER[$key] === '') {
            $_SERVER[$key] = $val;
        }
    }

    // 5. Bootstrap Laravel and handle the request directly
    if (!defined('LARAVEL_START')) {
        define('LARAVEL_START', microtime(true));
    }

    if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
        require $maintenance;
    }

    require __DIR__ . '/../vendor/autoload.php';

    /** @var \Illuminate\Foundation\Application $app */
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $app->handleRequest(\Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    http_response_code(500);
    echo '<div style="font-family: monospace; padding: 2rem; background: #fff1f2; color: #9f1239; border: 1px solid #fecdd3; border-radius: 8px; margin: 2rem;">';
    echo '<h2 style="margin-top: 0;">Vercel Serverless Function Error</h2>';
    echo '<p><strong>Message:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>File:</strong> ' . htmlspecialchars($e->getFile()) . ':' . $e->getLine() . '</p>';
    echo '<pre style="background: #ffffff; padding: 1rem; border-radius: 4px; overflow-x: auto; font-size: 13px;">' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
}
