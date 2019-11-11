<!DOCTYPE html>
<?php
include_once "../conecta.php";
include_once "usuarios/usuario.php";
include_once "usuarios/usuariosDAO.php";

$id = $_GET['id'];
$obj = new usuario();
$objDAO = new usuariosDAO();
$PDO = new conecta();
$connect = $PDO->conecta();

$retorno = $objDAO->selectById($id, $connect);

print_r($retorno);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Editar Usuario</title>
</head>
<body>
    <ul>
        <li><a href="adm.html">Home</a></li>
        <li><a  class="active" href="lista-imagen.php">Imagenes</a></li>
        <li><a  href="lista-video.php">Videos</a></li>
        <li><a  href="lista-usuario.php">Usuario</a></li>        
        <li style="float:right"><a href="logout.html">Salir</a></li>
      </ul>


      <div class="contenido">
        <form action="edita-usuario-ok.php" method="POST">
                   <input type="hidden" name="id" value="<?php echo $retorno->getidUsuario(); ?>">
          <label for="fname">Nombre </label>
          <input type="text" id="fname" name="nombre" placeholder="Your name.." value="<?php echo $retorno->getNombre(); ?>">
      
          <label for="fname">Email </label>
          <input type="text" id="fname" name="email" placeholder="Your name.." value="<?php echo $retorno->getEmail(); ?>">
      
          <label for="lname">Contraseña</label>
          
          <input type="password" id="password" name="contrasena" value="<?php echo $retorno->getContraseña(); ?>">
          
       <input type="submit" value="Editar">
        </form>
      </div>

</body>
</html>
