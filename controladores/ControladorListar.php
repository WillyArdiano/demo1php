<?php

    require_once '../modelos/DataDB.php';
    require_once '../modelos/Lista.php';
    require_once '../modelos/Sistema.php';
    
    $datadb = new DataDB();
    $nombres = array();
    $objetivos = array();
    $entradas = array();
    $salidas = array();
    $subsistemas = array();
    $cantidadSistemas = 0;
    
    $conexion = new mysqli($datadb->getHost(), $datadb->getUsuario(), $datadb->getPassword(),$datadb->getNombreDb());
    
    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }
    
    $query1 = "SELECT * FROM Sistema";
    $result = $conexion->query($query1);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($nombres,$row["nombre"]);
            array_push($objetivos,$row["objetivo"]);
            array_push($entradas,$row["entrada"]);
            array_push($salidas,$row["salida"]);
            array_push($subsistemas,$row["subsistemas"]);          
            $cantidadSistemas++;
        }
    }
    
    $conexion->close();
    
    require_once '../vistas/VistaListar.php';
    
?>