<?php
require_once 'autoload.php';
require_once 'config/parameters.php';

if(isset($_GET['controllers'])){
    $controller=$_GET['controllers'].'Controller';
}else{
    $controller=controllers_default;
}
if(class_exists($controller)){
    $classname=$controller;
    if(isset($_GET['action']) && method_exists($classname,$_GET['action'])){
            $action=$_GET['action'];
            $classname->$action();
    }else{
        $action=action_default;
        $classname->$action();
    }
}