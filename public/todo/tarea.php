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
    <title>Document</title>
</head>
<body>
    <?php 
        $consulta = "SELECT nombre, fecha_limite, descripcion FROM tareas WHERE "
        . "id = ". $_GET["id"] . ";";
        $resultado = pg_query($conexion, $consulta);
        $fila = pg_fetch_array($resultado);
    ?>
    <h1><?php echo $fila["nombre"] ?></h1>
    <div><?php echo $fila["fecha_limite"] ?></div>
    <p><?php echo $fila["descripcion"] ?></p>

    <a href="./lista-tareas.php">Volver a lista de tareas</a>
</body>
</html>

<?php
// Cerrar y limpiar
pg_free_result($resultado);
pg_close($conexion);
?>