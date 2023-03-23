<?php
require_once "Controller/Router.php";

echo 'index ok <br>';
$router = new Router();
$router->routerRequest();