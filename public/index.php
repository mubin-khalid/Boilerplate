<?php

// Load global autoloader
require_once dirname(__FILE__) . '/../vendor/autoload.php';

// Include application bootstrap
require_once dirname(__FILE__) . '/../bootstrap/app.php';

// Defining routes, from specific...
$app->get('/hello(/:name)', function ($name = 'anonymous') use ($app, $log) {
    $greeter = new App\Helpers\Hello($name);
    echo $greeter->greet();
    $log->info("Just logging $name visit...");
});

$app->get('/about', function () use ($app, $log) {
    echo "<h1>About ", $app->config('name'), "</h1>";
    echo "<p><small>Current mode is: ", $app->config('mode'), '</small></p>';
});

// To generic
$app->get('/', function () use ($app, $log) {
    echo '<h1>Welcome to ', $app->config('name'), '</h1>';
});

// Important: run the app ;)
$app->run();


