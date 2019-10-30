<!DOCTYPE html>
<?php
include_once 'imagenDAO.php';
include_once 'imagen.php';

$i = new imagenDAO();
$retorno = $i->selectImagen();

var_dump($retorno);
        
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <script src="assets/js/js.js"></script>
    <title>Lista imagenes</title>
</head>
<body>
    <ul>
        <li><a href="adm.html">Home</a></li>
        <li><a  class="active" href="lista-imagen.html">Imagenes</a></li>
        <li><a href="lista-video.html">Videos</a></li>
        <li><a  href="lista-usuario.html">Usuario</a></li>        
        <li style="float:right"><a  href="logout.html">Salir</a></li>
      </ul>


      <div class="contenido">
        <table>
            <tr>
              <th>Imagen</th>
              <th>Titulo</th>
              <th>Actions</th>
            </tr>
            <tr>
              <td><img src="assets/img/img3.jpg" alt="" width="50px" height="50px"></td>
              <td>sklsls</td>
              <td><a href="edita-imagen.html" ><i class="material-icons">&#xe22b;</i> </a>
                <a onclick="myFunction()"  ><i class="material-icons">clear</i> </a>
              </td>
            </tr>
            <tr>
              <td><img src="assets/img/img3.jpg" alt="" width="50px" height="50px"></td>
              <td>lsksjdsk</td>
              <td><a href="edita-imagen.html" ><i class="material-icons">&#xe22b;</i> </a>
              <a onclick="myFunction()"  ><i class="material-icons">clear</i> </a>
              </td>
          
            </tr>
          
          </table>

          <a href="add-imagen.html" class="button">Nueva imagen</a>

      </div>
</body>
</html>
