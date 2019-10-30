<!DOCTYPE html>
<?php
include_once 'usuariosDAO.php';
include_once 'usuario.php';

$u = new usuariosDAO();
$retorno = $u->selectUsuario();

var_dump($retorno);
        
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Nuevo ususario</title>
</head>
<body>
    <ul>
        <li><a href="adm.html">Home</a></li>
        <li><a  class="active" href="lista-imagen.html">Imagenes</a></li>
        <li><a  href="lista-video.html">Videos</a></li>
        <li><a  href="lista-usuario.html">Usuario</a></li>        
        <li style="float:right"><a href="logout.html">Salir</a></li>
      </ul>


      <div class="contenido">
        <form action="usuarios/cadUsuarios.php" method='POST'>
          <label for="fname">Nombre: </label>
          <input type="text" id="fname" name="nombre" placeholder="Your name..">
          
           <label for="fname">Email: </label>
          <input type="text" id="fname" name="email" placeholder="Your name..">
      
          <label for="lname">Contraseña:</label>
          
          <input type="password" id="password" name="contraseña" >
          
       <input type="submit"  value="Crear">
        </form>
      </div>

</body>
</html>
