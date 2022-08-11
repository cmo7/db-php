<?php
// Conectar con la base de datos
$frase_conexion = "host=db "
    . "port=5432 "
    . "dbname=postgres "
    . "user=postgres "
    . "password=postgres ";
$conexion = pg_connect($frase_conexion);

$consulta = "SELECT nombre, fecha_limite, descripcion FROM tareas WHERE "
    . "id = " . $_GET["id"] . ";";
$resultado = pg_query($conexion, $consulta);
$fila = pg_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>

<body>
    <h1>Editar Tarea</h1>
    <form action="./procesar-editar-tarea.php" method="post">
        <label for="nombre">Nombre de la Tarea</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $fila["nombre"]?>">
        <br>
        <label for="fecha-limite">Fecha Limite</label>
        <input type="date" name="fecha-limite" id="fecha-limite" value="<?php echo $fila["fecha_limite"]?>">
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $fila["descripcion"]?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
        <input type="submit" value="Editar">
    </form>
</body>

</html>

<?php
// Cerrar y limpiar
pg_free_result($resultado);
pg_close($conexion);
?>