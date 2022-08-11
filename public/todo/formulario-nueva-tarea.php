<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Tarea</title>
</head>
<body>
    <h1>Nueva Tarea</h1>
    <form action="./procesar-nueva-tarea.php" method="post">
        <label for="nombre">Nombre de la Tarea</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="fecha-limite">Fecha Limite</label>
        <input type="date" name="fecha-limite" id="fecha-limite">
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>