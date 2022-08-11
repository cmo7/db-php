<?php
// Conectar con la base de datos
$frase_conexion = "host=db "
    . "port=5432 "
    . "dbname=postgres "
    . "user=postgres "
    . "password=postgres ";
$conexion = pg_connect($frase_conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>

<body>
    <h1>Lista de Tareas</h1>
    <a href="./formulario-nueva-tarea.php">Crear Tarea</a>
    <?php
    $consulta = "SELECT id, nombre, fecha_limite, descripcion FROM tareas;";
    $resultado = pg_query($conexion, $consulta);
    while ($fila = pg_fetch_array($resultado)) {
    ?>
        <div class="tarea" id="tarea-<?php echo $fila["id"] ?>">
            <h3><?php echo $fila["nombre"] ?></h3>
            <div><?php echo $fila["fecha_limite"] ?></div>
            <a href="./tarea.php?id=<?php echo $fila["id"] ?>">Ver más</a>
            <a href="./formulario-editar-tarea.php?id=<?php echo $fila["id"] ?>">Editar</a>
            <a href="./borrar-tarea.php?id=<?php echo $fila["id"] ?>">Borrar</a>
        </div>
    <?php
    }
    ?>
</body>

</html>

<?php
// Cerrar y limpiar
pg_free_result($resultado);
pg_close($conexion);
?>