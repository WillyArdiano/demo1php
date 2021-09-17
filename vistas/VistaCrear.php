<hmtl>
    <head>
        <title>CRUD SIS</title>
    </head>
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" media="screen"/>
    <body>
        <div id="tituloVista" >
            <h1>
                Crear Sistema
            </h1>
        </div>
        <form id="formulario" method="POST" action="../controladores/ControladorCrear.php" >
            <div>
                <label>Nombre</label>
                <input type="text" id="txtnombre" name="txtnombre">
            </div>
            <div>
                <label>Objetivo</label>
                <textarea id="txtobjetivo" name="txtobjetivo"></textarea>
            </div>
            <div>
                <label>Entrada</label>
                <input type="text" id="txtentrada" name="txtentrada">
            </div>
            <div>
                <label>Salida</label>
                <input type="text" id="txtsalida" name="txtsalida">
            </div>
            <div>
                <label>Subsistemas</label>
                <input type="number" id="txtsubsistemas" name="txtsubsistemas" min="0" max="999">
            </div>
            <button type="submit">Registrar</button>
        </form>
    </body>
</hmtl>