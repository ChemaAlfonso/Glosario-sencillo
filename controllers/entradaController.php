<?php

require_once 'models/entrada.php';
require_once 'models/categoria.php';

class entradaController{
    
    
    public function ver(){
        $entradas = new entrada();
        $todas = $entradas->ver();
        
        require_once 'views/entrada/ver.php';
    }
    
    public function crear() {
        $entradas = new entrada();
        
        /* Recuperando categoria */
            $categoria = new categoria();
            $categorias = $categoria->getAll();

        if (!empty($_POST['categoria_id']) && !empty($_POST['palabra']) && !empty($_POST['descripcion'])) {
            
            /* Filtrar datos de formulario */
            $categoria_id = filter_var($_POST['categoria_id'], FILTER_SANITIZE_NUMBER_INT);
            $palabra = filter_var($_POST['palabra'], FILTER_SANITIZE_STRING);
            $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
            $enlace = filter_var($_POST['enlace'], FILTER_SANITIZE_STRING);

            /* Recuperando entrada */
            $entradas->setCategoria_id((int)$categoria_id);
            $entradas->setPalabra($palabra);
            $entradas->setDescripcion($descripcion);
            $entradas->setEnlace($enlace);
            
            
            /* Crear la entrada */
            $nuevaEntrada = $entradas->crear();

            echo "<h5 class='acierto'>Entrada creada correctamente!</h5>";
            
        }

        require_once 'views/entrada/crear.php';
    }

    
    public function delete(){
        
        $id = $_GET['id'];
        
        $entradas = new entrada();
        $entradas->setId($id);
        $borrar = $entradas->delete();
        
        echo "<h5 class='acierto'>Es historia!</h5>";
        
        return $borrar;
        
        }
        
  
        
        
        
}
