<?php
require $_SERVER["DOCUMENT_ROOT"] . "/../src/db-helper.php";

use function DatabaseHelper\db_connect;
use function DatabaseHelper\db_query;
use function DatabaseHelper\db_clear;
// Obtener datos de la base de datos
$connection = db_connect();
$result = db_query($connection, "SELECT * FROM ejemplo");
$rows = pg_fetch_all($result);
db_clear($connection, $result);
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
    <h1>Contenido</h1>
    <ul>
        <?php foreach ($rows as $row) { ?>
            <li><?php var_dump($row); ?></li>
        <?php } ?>
</body>
</html>
