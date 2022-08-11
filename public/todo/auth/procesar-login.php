<?php
session_start();
$frase_conexion = "host=db "
. "port=5432 "
. "dbname=postgres "
. "user=postgres "
. "password=postgres ";
$conexion = pg_connect($frase_conexion);

$consulta = "SELECT id FROM usuarios "
                . " WHERE nombre = '" . $_POST["nombre"] . "'"
                . " AND pass = '" . $_POST["pass"] . "';";

$resultado = pg_query($conexion, $consulta);

if ($fila = pg_fetch_array($resultado)) {
    $_SESSION["user-id"] = $fila['id'];
}

//

pg_free_result($resultado);
pg_close($conexion);

header("location: ../lista-tareas.php");
?>