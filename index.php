<?php

require_once "autoloader.php";

$router = new Router();
$router->set("/noticias/crear", NewMaker::class);
$router->set("/noticias/todas", News::class);
// $router->set("/", News::class);
$app = new App($router);