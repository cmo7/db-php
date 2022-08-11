<?php
    session_start();
    $frase_conexion = "host=db " 
                    . "port=5432 " 
                    . "dbname=postgres "
                    . "user=postgres "
                    . "password=postgres ";
    $conexion = pg_connect($frase_conexion);

    $consulta = "INSERT INTO tareas ("
                . "nombre, "
                . "fecha_limite, "
                . "descripcion, "
                . "id_usuario "
                . ") VALUES ("
                . "'" . $_POST["nombre"] . "', "
                . "'" . $_POST["fecha-limite"] . "', "
                . "'" . $_POST["descripcion"] . "', "
                . "'" . $_SESSION["user-id"] . "' "
                . ");";
    
    pg_query($conexion, $consulta);

    pg_close($conexion);
    header("location: ./lista-tareas.php");
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
    <a href="./lista-tareas.php">Ver Todas las Tareas</a>
    <br>
    <a href="./formulario-nueva-tarea.php">Añadir otra tarea</a>
</body>
</html>