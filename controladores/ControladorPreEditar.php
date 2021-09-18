<?php

    require_once '../modelos/DataDB.php';

    $datadb = new DataDB();
    $nombre;
    $objetivo;
    $entrada;
    $entrada;
    $salida;
    $subsistemas;
    
    
    $conexion = new mysqli($datadb->getHost(), $datadb->getUsuario(), $datadb->getPassword(),$datadb->getNombreDb());
    
    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }
    
    $query1 = "SELECT * FROM Sistema where nombre='".$_GET['sisn']."';";
    $result = $conexion->query($query1);
    
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $objetivo = $row["objetivo"];
        $entrada = $row["entrada"];
        $salida = $row["salida"];
        $subsistemas = $row["subsistemas"]; 
        
        require_once '../vistas/VistaEditar.php';
    }else{
        echo 'Filed to load data!';
    }
    
    $conexion->close();
    
    
    

