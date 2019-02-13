<?php


class categoria{
    
    public $id;
    public $nombre;
    public $db;
    
    public function __construct() {
        
        $this->db = dataBase::connect();
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getAll(){
        $sql = "SELECT * FROM categorias";
        $todasletras = $this->db->query($sql);
        
        return $todasletras;
    }


    
}