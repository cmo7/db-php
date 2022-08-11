<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> d9dfdc28704f2ad99bffb6f1d5c9b07ee61a685a
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    $dbcon = pg_connect("host=db port=5432 dbname=postgres user=postgres password=postgres")
        or die('Could not connect: ' . pg_last_error());

    ?>
    <main>
        <div class="lista-clientes">
            <h2>Clientes</h2>
            <?php
            $consulta = "SELECT id, nombre, apellido, email FROM personas";
            $resultado = pg_query($dbcon, $consulta) or die('La consulta fallo: ' . pg_last_error());
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = pg_fetch_array($resultado, NULL, PGSQL_ASSOC)) {
                        echo "<tr>";
                        foreach ($fila as $valor) {
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="lista-empresas">
            <h2>Empresas</h2>
            <?php
            $consulta = "SELECT id, nombre, direccion FROM empresas";
            $resultado = pg_query($dbcon, $consulta) or die('La consulta fallo: ' . pg_last_error());
            ?>
            <table>
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Nombre </th>
                        <th> Dirección </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = pg_fetch_array($resultado, NULL, PGSQL_ASSOC)) {
                        echo "<tr>";
                        foreach ($fila as $valor) {
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php
    pg_free_result($resultado);
    pg_close($dbcon);
    ?>
</body>

=======
    <title>Ejemplos Lenguaje PHP</title>
</head>
<body>
    <h1>Ejemplos Lenguaje PHP</h1>
    <ul>
        <li><a href="./fizzbuzz.php">FizzBuzz</a></li>
        <li><a href="./funciones.php">Funciones</a></li>
        <li><a href="./formularios/numero.php">Ejemplo formulario GET</a></li>
        <li><a href="./formularios/registro.php">Ejemplo formulario POST</a></li>
        <li><a href="./formularios/saludar.php">Formulario y manejador en el mismo archivo</a></li>
        <li><a href="./ejemplo/index.php">Ejemplo conexión a Base de Datos</a></li>
    </ul>
</body>
>>>>>>> d9dfdc28704f2ad99bffb6f1d5c9b07ee61a685a
</html>