<?php

require_once 'lista.php';

class PartesSistema {
    
    private $respuestas;
    private $respuestasObtenidas;
    
    public function __construct() {
        $this->respuestas = ["entradas","salidas","entorno","relaciones","objetivos"];
        $this->respuestasObtenidas = new ArrayList();
    }
    
    public function getRespuestas(){
        return $this->respuestasObtenidas->getList();
    }
    
    public function agregarRespuesta($respuesta){
        return $this->respuestasObtenidas->Add($respuesta);
    }
    
    public function sizeRespuestas(){
        return $this->respuestasObtenidas->Size();
    }
}

?>