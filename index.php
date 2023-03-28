<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
require_once "Controller/Router.php";
$router = new Router();
$router->routerRequest();