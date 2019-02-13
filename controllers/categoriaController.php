<?php

require_once 'models/categoria.php';

class categoriaController{
    
    
    public function index(){
        $categoria = new categoria();
        $categoria->setNombre($_GET['letra']);
        $todas = $categoria->getAll();
        
        require_once 'views/categoria/ver.php';
    }
    
    
    
}
