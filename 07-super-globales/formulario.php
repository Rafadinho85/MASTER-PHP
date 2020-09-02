<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="GET" action="recibir.php">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>    
            </p>
            <p>
            <label for="apellidos">Apellido</label>
            <input type="text" name="apellido"/>    
            </p>
            <input type="submit"/> 
        </form>
    </body>
</html>