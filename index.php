<?php
require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a new logger channel
$log = new Logger('my_logger');

// Add a handler to log into app.log
$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::INFO));

// Log an info message
$log->info('Application started successfully');
