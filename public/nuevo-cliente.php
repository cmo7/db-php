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
    if ($_POST) {
        $dbcon = pg_connect("host=db port=5432 dbname=postgres user=postgres password=postgres")
            or die('Could not connect: ' . pg_last_error());

        $consulta = "INSERT INTO personas (";
        $consulta .= "nombre, apellido, email, empresa_id) ";
        $consulta .= " VALUES ('";
        $consulta .= $_POST["nombre"] . "' , '";
        $consulta .= $_POST["apellido"] . "' , '";
        $consulta .= $_POST["email"] . "' , '";
        $consulta .= $_POST["empresa"];
        $consulta .= "');";

        $resultado = pg_query($dbcon, $consulta) or die('La consulta fallo: ' . pg_last_error());
        if ($resultado) {
            echo "Se ha añadido el cliente correctamente";
            pg_free_result($resultado);
            pg_close($dbcon);
        } else {
            echo "Ha habido un error al añadir el cliente";
            pg_free_result($resultado);
            pg_close($dbcon);
        }
    }
    ?>
    <form action="nuevo-cliente.php" method="post">
        <label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre"> <br>
        <label for="apellido">Apellido</label><input type="text" name="apellido" id="apellido"><br>
        <label for="email">Email</label><input type="email" name="email" id="email"><br>
        <label for="empresa">Id Empresa</label><input type="number" name="empresa" id="empresa"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>