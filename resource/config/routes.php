<?php
//TODO: router configurator
if (isset($router)) {
    $router->get('/hello', '\\App\\Http\\Controllers\\HelloController@hello');
    $router->get('/jump', '\\App\\Http\\Controllers\\HelloController@jump');
    $router->get('/user', '\\App\\Http\\Controllers\\HelloController@user');
}
