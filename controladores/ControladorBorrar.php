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
    
    $query1 = "DELETE FROM Sistema where nombre='".$_GET['sisn']."';";
    
    if ($conexion->query($query1) === TRUE) {
        echo '<script>alert("Se ha eliminado exitosamente al sistema '.$_GET['sisn'].'");</script>';
        
        require_once '../vistas/VistaBorrar.php';
    }else{
        echo 'Filed to load data!';
    }
    
    $conexion->close();
    
    
    


