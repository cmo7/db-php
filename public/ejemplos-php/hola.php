<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola</h1>
    <?php
    // Numero de la cuenta de mi banco 15123512341234
    # esto también es comentario
    /*
        Comenario de bloque
    */
    $variable1 = 15;
    $variable2 = 'Esto es un string';
    $variable3 = false;
    $variable4 = 10.5;
    $variable5 = array("hola", "adios", 45, "aguacate");
    echo "Esto lo ha escrito php: $variable1";
    echo "<br>";
    echo ("hola");
    print "esto también sale en la web";
    ?>
    <div>
        La variable 5 vale <?php echo var_dump($variable5); ?>
    </div>
    <h2>
        IF y ELSE
    </h2>
    <?php if ($variable3) { ?>
        <h3>La Variable 3 es verdadera</h3>
        <img src="https://via.placeholder.com/200/200" alt="">
    <?php } else { ?>
        ah, pues no.
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul>
    <?php } ?>
</body>

</html>