<?php

class entrada{
    
    public $id;
    public $usuario_id;
    public $categoria_id;
    public $palabra;
    public $inicial;
    public $descripcion;
    public $enlace;
    public $fecha;
    public $db;
    
    public function __construct() {
        $this->db = dataBase::connect();
        $this->usuario_id = 1;
        $this->fecha = date("d-m-y");
        $this->inicial = isset($_GET['letra']) ? $_GET['letra'] : null;
    }
    public function getId() {
        return $this->id;
    }

    public function getUsuario_id() {
        return $this->usuario_id;
    }

    public function getCategoria_id() {
        return $this->categoria_id;
    }

    public function getPalabra() {
        return $this->palabra;
    }
    public function getInicial() {
        return $this->inicial;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getEnlace() {
        return $this->enlace;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function setPalabra($palabra) {
        $this->palabra = $palabra;
    }
    
    public function setInicial($inicial) {
        $this->inicial = $inicial;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setEnlace($enlace) {
        $this->enlace = $enlace;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    
    public function ver(){
        $sql ="SELECT e.* FROM entradas e INNER JOIN categorias c WHERE e.categoria_id = c.id AND c.nombre = '$this->inicial'; ";
        $verEntradas = $this->db->query($sql);
        
        return $verEntradas;
    }
    
    public function crear(){
        $sql ="INSERT INTO entradas VALUES (null$this->id,$this->usuario_id,$this->categoria_id,'$this->palabra','$this->descripcion','$this->enlace','$this->fecha'); ";
        $crearEntrada = $this->db->query($sql);
        
        return $crearEntrada;
    }
    
    public function delete(){
        $sql ="DELETE FROM entradas WHERE id = $this->id ";
        $deleteEntrada = $this->db->query($sql);
        
        
        return $deleteEntrada;
        
    }
    
    
    


}
