<?php
require APP_ROOT_PATH . '/vendor/autoload.php';
require APP_ROOT_PATH . '/app/app.php';

$app = new BootApp(APP_ROOT_PATH . '/app/config/settings.php');
require __DIR__ . '/routes.php';
$app->run();
