<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="./procesar-signup.php" method="post">
        <label for="nombre">Nombe de Usuario</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" required>
        <br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>