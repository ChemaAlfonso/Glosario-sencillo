<?php

class dataBase{
    
    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'glosario_chema');
        $db->query("SET NAMES 'utf8'");
        
        return $db;
    }
    
    
}
