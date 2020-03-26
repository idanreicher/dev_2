<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\BrowserConsoleHandler;

$logger = new Logger ('foggyline');

$logger->pushHandler(new RotatingFileHandler(__DIR__ . '/foggyline.log') , 7);
$logger->pushHandler(new BrowserConsoleHandler());

$contex = [
    'user' =>'idan',
    'constant' => 505.5
];

$logger->addRecord(100 , 'Debug bug' , $contex);
$logger->addRecord(200 , 'Info bug' , $contex);