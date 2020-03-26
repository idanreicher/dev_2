#/usr/bin/env php
<?php
require __DIR__ . '/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application('Foggyline', '1.0 (stable)');
 $app->run();