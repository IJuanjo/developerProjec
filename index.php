<?php
require_once 'autoload.php';
require_once 'config/database.php';
require_once 'helpers/helpers.php';
require_once 'config/parameters.php';
require_once 'views/layouts/header.php';
function error(){
    $error=new ErrorController();
    $error::Error();
}

if(isset($_GET)){

if(isset($_GET['controller'])){
    $controller=$_GET['controller'].'Controller';
}else{
    $controller=controllers_default;
}

}else{
    error();
    exit();
}

if(class_exists($controller)){
    $classname=new $controller;
    if(isset($_GET['action']) && method_exists($classname,$_GET['action'])){
            $action=$_GET['action'];
            $classname->$action();
    }else{
        $action=action_default;
        $classname->$action();
    }
}else{
    error();
}
require_once 'views/layouts/footer.php';
