<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>

<body>
    <h1>FizzBuzz</h1>
    <ul>
        <?php
        // Declaramos la función que comprueba si un numero es divisible por otro (resto 0)
        function es_divisible(int $x, int $y)
        {
            return $x % $y == 0;
        }
        // Bucle for para probar todos los números del 1 al 100
        for ($i = 1; $i <= 100; $i++) {
            echo "<li>";    // Escribimos la apertura de la etiqueta li
            if (es_divisible($i, 3) && es_divisible($i, 5)) { // Numero $i es divisible por 3 y por 5
                echo "FizzBuzz";
            } else if (es_divisible($i, 3)) {                 // Numero $i es divisible por 3
                echo "Fizz";
            } else if (es_divisible($i, 5)) {                 // Numero $i es divisible por 5
                echo "Buzz";
            } else {                                          // No se cumple ninguna de las otras
                echo $i;
            }
            echo "</li>";   // Escribimos el cierre de la etiqueta li 
        }
        ?>
    </ul>
</body>

</html>