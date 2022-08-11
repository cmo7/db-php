<?php
    $frase_conexion = "host=db " 
                    . "port=5432 " 
                    . "dbname=postgres "
                    . "user=postgres "
                    . "password=postgres ";

    $conexion = pg_connect($frase_conexion);

    $consulta = "SELECT * FROM ejemplo";

    $resultado = pg_query($conexion, $consulta);
    echo "<ul>";
    while ($fila = pg_fetch_array($resultado)) {
        echo "<li>" . $fila["id"] . " -> " . $fila["nombre"] . "</li>";
    }
    echo "</ul>";

    // Insertar un usuario llamado Gloria cada vez que cargue la página
    $consulta = "INSERT INTO ejemplo(nombre) VALUES ('Gloria')";
    pg_query($conexion, $consulta);

    // Borrar todos los usuarios que tengan Gloria como nombre
    $consulta = "DELETE FROM ejemplo WHERE nombre='Gloria'";
    pg_query($conexion, $consulta);
    
    // Cambiar el nombre del usuario 5 por aguacate
    pg_query($conexion, "UPDATE ejemplo SET nombre='aguacate' WHERE id=5");

    // Crear la tabla ejemplo2
    $consulta = "CREATE TABLE ejemplo2("
                    . "fecha DATE"
                    . ");";

    pg_query($conexion, $consulta);

    pg_free_result($resultado);
    pg_close($conexion);
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
    <h1>Ejemplo de conexión a base de datos</h1>
</body>
</html>