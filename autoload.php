<?php 

function cargararchivos($filename){
    return include_once 'controllers/'.$filename.'.php';
}
spl_autoload_register("cargararchivos");

