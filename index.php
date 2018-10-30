<?php

require_once './vendor/autoload.php';
require_once 'consts.php';

use Bramus\Router\Router;



$router = new Router();

$router->get("/",function (){
    include './views/home.php';           
});



$router->run();










