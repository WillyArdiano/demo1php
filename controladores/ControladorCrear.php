<?php

    require_once '../modelos/DataDB.php';
    
    $datadb = new DataDB();
    
    $conexion = new mysqli($datadb->getHost(), $datadb->getUsuario(), $datadb->getPassword(),$datadb->getNombreDb());
    
    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    } 
    
    $queryInsercion = "INSERT INTO Sistema (nombre,objetivo,entrada,salida,subsistemas) VALUES ('".$_POST['txtnombre']."','".$_POST['txtobjetivo']."','".$_POST['txtentrada']."','".$_POST['txtsalida']."',".$_POST['txtsubsistemas'].")";
    
    if ($conexion->query($queryInsercion) === TRUE) {
        echo '<script>alert("Se ha registrado exitosamente al sistema '.$_POST['txtnombre'].'");</script>';
        require_once '../vistas/VistaCrear.php';
    } else {
        echo "Error: " . $queryInsercion . "<br>" . $conexion->error;
    }
    
    
?>