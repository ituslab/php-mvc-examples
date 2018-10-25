<?php

use Controllers\UserController;

require_once './vendor/autoload.php';
require_once 'consts.php';


$h = new UserController();
$h->listUser();

