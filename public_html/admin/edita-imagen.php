<!DOCTYPE html>
<?php
include_once "../conecta.php";
include_once "imagenes/imagen.php";
include_once "imagenes/imagenDAO.php";

$id = $_GET['id'];
$obj = new imagen();
$objDAO = new imagenDAO();
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
    <title>Editar Imagen</title>
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
        <form action="edita-imagen-ok.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $retorno->getidImagen(); ?>">
          <label for="fname">Titulo </label>
          <input type="text" id="fname" name="titulo" placeholder="Titulo de la imagen" value="<?php echo $retorno->gettitulo(); ?>">
        <label for="fname">Descripcion </label>
          <input type="text" id="fname" name="desc" placeholder="Titulo de la imagen" value="<?php echo $retorno->getdescripcion(); ?>">
      
          <label for="lname">Archivo</label>
          
          <input type="file" id="img" name="img" placeholder="Suba una imagen"value="<?php echo $retorno->getsrc(); ?>">
          
       <input type="submit" value="Editar">
        </form>
      </div>

</body>
</html>
