
<html>
    <head>
        <title>Lista sistemas</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" media="screen"/>
    </head>
    <body>
        <div  >
            <h1>Sistemas registrados:</h1>
            <table class="center" >
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Objetivo</th>
                      <th scope="col">Entrada</th>
                      <th scope="col">Salida</th>
                      <th scope="col">Subsistemas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < $cantidadSistemas; $i++){ ?>
                            <tr>
                                <th scope="row"><?php echo($i+1); ?></th>
                                <td> <?php echo($nombres[$i]); ?> </td>
                                <td> <?php echo($objetivos[$i]); ?> </td>
                                <td> <?php echo($entradas[$i]); ?> </td>
                                <td> <?php echo($salidas[$i]); ?> </td>
                                <td> <?php echo($subsistemas[$i]); ?> </td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
            <a href="../index.php" type="button" style="font: 125% sans-serif; align-self: center">Regresar</a>
        </div>
    </body>
</html>
