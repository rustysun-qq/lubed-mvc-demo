<?php
//TODO:
error_reporting(E_ALL);
ini_set('display_errors', true);
date_default_timezone_set('UTC');
ini_set('set_time_limit', 0);

$starter = require __DIR__.'/../bootstrap/app.php';
$starter->start();
 