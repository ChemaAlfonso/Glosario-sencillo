<?php


function autoloader($controlador){
    include 'controllers/'.$controlador.'.php';
}

spl_autoload_register('autoloader');
