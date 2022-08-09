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
        echo "<h1> hola " . $_POST["saludo"] .  "</h1>";
    }
    ?>
    <form action="./saludar.php" method="post">
        <input type="text" name="saludo" id="saludo">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>