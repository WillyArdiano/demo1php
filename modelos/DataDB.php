<?php

class DataDB {
    
    private $hostname = "localhost";
    private $usuario = "willy";
    private $password = "Willy@db99";
    private $nombredb = "Sistemas";
    
    function getHost(){
        return $this->hostname;
    }
    
    function getUsuario(){
        return $this->usuario;
    }
    
    function getPassword(){
        return $this->password;
    }
    
    function getNombreDb(){
        return $this->nombredb;
    }
    
}

?>