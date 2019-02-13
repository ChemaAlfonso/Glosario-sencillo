<?php
//carga de clases
require_once 'autoload.php';

//carga de la base de datos
require_once 'database/db.php';


require_once 'views/layout/header.php';




/* Controlador frontal */

if (isset($_GET['controller'])){
    $nombreControlador = filter_var($_GET['controller'], FILTER_SANITIZE_STRING).'Controller';

 }elseif (!isset ($_GET['action'])){
    $nombreControlador = 'categoriaController';
    
}else {
    echo "<h5 class='error'>Ups.. esta pagina no existe, selecciona una letra</h5>";
}

if (class_exists($nombreControlador) && !empty($_GET['action'])){
    
    if (method_exists($nombreControlador, $_GET['action'])) {
        $action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);
        $controller = new $nombreControlador();
        $controller->$action();
        
    } else {
        echo "<h5 class='error'>Ups.. esta pagina no existe, selecciona una letra</h5>";
    }
}else {
    echo "<h5>Selecciona una letra</h5>";
}










require_once 'views/layout/footer.php';





