<?php
function duplicar(int $x)
{
    return $x * 2;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <h1>Funciones</h1>
    <?php
    echo duplicar(25);
    ?>
</body>

</html>