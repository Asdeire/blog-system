<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

return [
'app_name' => 'Blog Application',
'timezone' => 'UTC',
'env' => getenv('APP_ENV') ?: 'production', // Development or production environment

// Log configuration
'log' => [
'name' => 'app',
'path' => __DIR__ . '/../storage/logs/app.log',
'level' => Logger::DEBUG, // Log level: DEBUG, INFO, ERROR, etc.
],

// Error log configuration
'error_log' => [
'path' => __DIR__ . '/../storage/logs/error.log',
'level' => Logger::ERROR, // Log errors separately
],
];
