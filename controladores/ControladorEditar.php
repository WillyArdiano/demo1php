<?php

    require_once '../modelos/DataDB.php';
    
    $datadb = new DataDB();
    
    $conexion = new mysqli($datadb->getHost(), $datadb->getUsuario(), $datadb->getPassword(),$datadb->getNombreDb());
    
    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    } 
    
    $queryInsercion = "UPDATE Sistema SET objetivo='".$_POST['txtobjetivo']."', entrada = '".$_POST['txtentrada']."', salida='".$_POST['txtsalida']."', subsistemas='".$_POST['txtsubsistemas']."' WHERE nombre='".$_POST['txtnombre']."';";
    
    if ($conexion->query($queryInsercion) === TRUE) {
        echo '<script>alert("Se ha actualizado exitosamente al sistema '.$_POST['txtnombre'].'");</script>';
        
        //require_once './ControladorPreEditar.php?sisn='.$_POST['txtnombre'];
        require_once '../controladores/ControladorListar.php';
    } else {
        echo "Error: " . $queryInsercion . "<br>" . $conexion->error;
    }
    $conexion->close();
    
?>

