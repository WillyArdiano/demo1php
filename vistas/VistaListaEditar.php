<?php
    
    require_once '../modelos/DataDB.php';
    $datadb = new DataDB();

    $conexion = new mysqli($datadb->getHost(), $datadb->getUsuario(), $datadb->getPassword(),$datadb->getNombreDb());
    
    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }
    
    $query1 = "SELECT nombre FROM Sistema";
    $result = $conexion->query($query1);
?>


<html>
    <head>
        <title>Lista sistemas</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" media="screen"/>
    </head>
    <body>
        <div id="divCentro">
            <h1>Sistemas registrados:</h1>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {?>
                            <a style="font: 150% sans-serif;" href="../controladores/ControladorPreEditar.php?sisn=<?php echo($row['nombre']); ?>" > <?php echo($row['nombre']); ?> </a>
                            <br>
                        <?php
                        }
                    }
                ?>
                            <br>
            <a href="../index.php" type="button" style="font: 125% sans-serif; align-self: center">Regresar</a>
        </div>
    </body>
</html>

<?php
    $conexion->close();
?>
