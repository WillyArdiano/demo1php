<?php


    require_once '../modelos/modelo.php';
    
    $verificador = new PartesSistema();

    if((isset($_POST['entradas'])) && ($_POST['entradas'] != '') ){
        $verificador->agregarRespuesta(($_POST['entradas']));
    }
    if((isset($_POST['salidas'])) && ($_POST['salidas'] != '') ){
        $verificador->agregarRespuesta(($_POST['salidas']));
    }
    if((isset($_POST['entorno'])) && ($_POST['entorno'] != '') ){
        $verificador->agregarRespuesta(($_POST['entorno']));
    }
    if((isset($_POST['relaciones'])) && ($_POST['relaciones'] != '') ){
        $verificador->agregarRespuesta(($_POST['relaciones']));
    }
    if((isset($_POST['objetivos'])) && ($_POST['objetivos'] != '') ){
        $verificador->agregarRespuesta(($_POST['objetivos']));
    }
    
    
    $cantidadRespuestas = $verificador->sizeRespuestas();
    $respuestas = $verificador->getRespuestas();
    
    //echo("<script>alert('PHP: Analizando desde modelo');</script>");
    
    require_once '../vistas/partes.php';
    
?>
