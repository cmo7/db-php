<?php
session_start();

if (!isset($_SESSION["user-id"])) {
    header("location: ./auth/signup.php");
}

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
    La id guardada en la sesión es:
    <?php 
        echo $_SESSION["user-id"];
    ?>

    <div class="barra-usuario">
        <a href="./auth/signup.php">Registro</a>
        <a href="./auth/login.php">Entrar</a>
        <a href="./auth/logout.php">Salir</a>
    </div>

    <a href="./formulario-nueva-tarea.php">Crear Tarea</a>
    <?php
    $consulta = "SELECT id, nombre, fecha_limite, descripcion FROM tareas" .
                " WHERE id_usuario = " . $_SESSION["user-id"] . ";";

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