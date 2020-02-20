<?php

use Klein\Klein;
/**
 * @var Klein $router
 */

$router->get('/', function(){
    return cnt('SiteController@index');
});