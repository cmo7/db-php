!<?php
// Conectar con la base de datos
$frase_conexion = "host=db "
    . "port=5432 "
    . "dbname=postgres "
    . "user=postgres "
    . "password=postgres ";
$conexion = pg_connect($frase_conexion);

$consulta = "DELETE FROM tareas WHERE " 
        . "id = ". $_GET["id"] . ";";

pg_query($conexion, $consulta);

pg_close($conexion);

header("location: ./lista-tareas.php");
?>