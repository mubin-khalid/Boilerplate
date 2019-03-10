<?php

// Init config data
use App\Helpers\Config;
use Slim\Slim;
use Slim\Log;
use Slim\Extras\Log\DateTimeFileWriter;

// Basic config for Slim Application
$config= [
    'name' => Config::get('app.name'),
    'log.enabled' => true,
    'log.level' => Log::INFO,
    'log.writer' => new DateTimeFileWriter([
        'path' => dirname(__FILE__) . '/../storage/logs',
    ]),
    'mode' => Config::get('app.debug') ? 'development' : 'production',
];

// Create application instance with config
$app = new Slim($config);

// Get logger
$log = $app->getLog();

// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config([
        'log.enable' => true,
        'log.level' => Log::WARN,
        'debug' => false,
    ]);
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config([
        'log.enable' => true,
        'log.level' => Log::DEBUG,
        'debug' => true,
    ]);
});