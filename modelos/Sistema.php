<?php

class Sistema{
    
    private $nombre;
    private $objetivo;
    private $entrada;
    private $salida;
    private $subsistemas;
    
    function __construct($nombre,$objetivo,$entrada,$salida,$subsistemas) {
        $this->nombre = $nombre;
        $this->objetivo = $objetivo;
        $this->entrada = $entrada;
        $this->salida = $salida;
        $this->subsistemas = $subsistemas;
    }
    
    function getNombre(){
        return $this->nombre;
    }
    
    function getObjetivo(){
        return $this->objetivo;
    }
    
    function getEntrada(){
        return $this->entrada;
    }
    
    function getSalida(){
        return $this->salida;
    }
    
    function getSubSistemas(){
        return $this->subsistemas;
    }
    
}