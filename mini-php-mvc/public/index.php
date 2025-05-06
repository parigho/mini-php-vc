<?php

require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';

$router = new Router();
$router->dispatch();
