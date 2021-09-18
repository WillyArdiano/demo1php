<hmtl>
    <head>
        <title>CRUD SIS</title>
    </head>
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" media="screen"/>
    <body>
        <div id="tituloVista" >
            <h1>
                Editar Sistema
            </h1>
        </div>
        <form id="formulario" method="POST" action="../controladores/ControladorEditar.php" >
            <div>
                <label>Nombre</label>
                <input type="text" id="txtnombre" name="txtnombre" readonly value="<?php echo($nombre); ?>">
            </div>
            <div>
                <label>Objetivo</label>
                <textarea id="txtobjetivo" name="txtobjetivo" maxlength="200"><?php echo($objetivo); ?></textarea>
            </div>
            <div>
                <label>Entrada</label>
                <input type="text" id="txtentrada" name="txtentrada" value="<?php echo($entrada); ?>">
            </div>
            <div>
                <label>Salida</label>
                <input type="text" id="txtsalida" name="txtsalida" value="<?php echo($salida); ?>">
            </div>
            <div>
                <label>Subsistemas</label>
                <input type="number" id="txtsubsistemas" name="txtsubsistemas" min="0" max="999" value="<?php echo($subsistemas); ?>">
            </div>
            <button type="submit">Actualizar</button>
            
            <a href="../index.php" type="button" style="margin-left: 50px">Regresar</a>
        </form>
    </body>
</hmtl>