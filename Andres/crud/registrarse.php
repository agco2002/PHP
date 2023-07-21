<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de la pagina</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>

    
      
    <form class="form" action="conexion.php" method="POST">
      <h1>Registro de crud</h1>  
      
        <label for="username">Nombre</label>
        <input type="text" placeholder="Ingresar Nombre" name="nombre">

        <label for="username">Email</label>
        <input type="text" placeholder="Ingresar Email"  name="email">
       


        <a href="#"><input type="submit" value="Registrarse"></a>
        <a href="eliminar.php"><input type="button" value="Eliminar"></a>
        <a href="actualizar.php"><input type="button" value="Actualizar"></a>
        <a href="consultar.php"><input type="button" value="Consultar"></a>

        
       
    </form>
    
  </body>
</html>
