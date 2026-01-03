<?php

// tankap url dan routing
$url = $_GET["url"] ?? "home";
$url = trim($url,"/");
$ls_url = explode("/",$url);
$ControllerName = ucfirst($ls_url[0])."Controller";
$method = $ls_url[1] ?? "index";
$parameters = array_slice($ls_url,2);
$controllerFile = "../app/controllers/$ControllerName.php";

// load file controller
require_once "../app/core/BaseController.php";
require_once $controllerFile;

if(!file_exists($controllerFile)){
    die("file is not exists");
}

$controller = new $ControllerName;

if(!method_exists($controller,$method)){
    die("method is not exists");
}

call_user_func_array(
    [$controller,$method],
    $parameters
);

