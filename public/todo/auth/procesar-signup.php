<?php
$frase_conexion = "host=db "
. "port=5432 "
. "dbname=postgres "
. "user=postgres "
. "password=postgres ";
$conexion = pg_connect($frase_conexion);

$consulta = "INSERT INTO usuarios(nombre, pass) VALUES ('"
    . $_POST["nombre"] . "', '"
    . $_POST["pass"] . "');";

pg_query($conexion, $consulta);

pg_close($conexion);

header("location: ../lista-tareas.php");
?>