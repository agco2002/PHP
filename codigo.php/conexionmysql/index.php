<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="conexion.php" method="POST">

<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre" required><br><br>

<label for="email">Email</label>
<input type="email" id="email" name="email"  required><br><br>

<label for="telefono">Telefono</label>
<input type="tel" id="telefono" name="telefono"  required><br><br>

<input type="submit" value="Enviar">
    </form>
</body>
</html>