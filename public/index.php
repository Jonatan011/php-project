<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

error_reporting(E_ALL);
ini_set('display_errors', 1);


$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
