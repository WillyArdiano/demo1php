<html>
    <head>
        <title>Partes Sistema</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" media="screen"/>
    </head>
    <body>
        <div id="divPartes2" >
            <h1>Has seleccionado <?php echo($cantidadRespuestas); ?> respuestas</h1>
            <h1>Las respuestas que has seleccionado son las siguientes:</h1>
            <table class="table">
                <tr>
                    <td><strong></strong></td>
                </tr>
            <?php
                for($i = 0; $i < $cantidadRespuestas; $i++){ ?>
                    <tr class="textT">
                        <td><?php echo($respuestas[$i]); ?></td>
                    </tr>
                <?php
                }
            ?>
            </table>
            <a href="../index.php" type="button">Regresar</a>
        </div>
    </body>
</html>