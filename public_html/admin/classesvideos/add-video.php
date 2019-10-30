<!DOCTYPE html>
<?php
include_once 'videoDAO.php';
include_once 'video.php';

$vi = new videoDAO();
$retorno = $vi->selectVideo();

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
 
    <title>Lista Video</title>
</head>
<body>
    <ul>
        <li><a href="adm.html">Home</a></li>
        <li><a href="lista-imagen.html">Imagenes</a></li>
        <li><a class="active" href="lista-video.html">Videos</a></li>
        <li><a  href="lista-usuario.html">Usuario</a></li>        
        <li style="float:right"><a  href="logout.html">Salir</a></li>
      </ul>

      <div class="contenido">
        <table>
            <tr>
              <th>Video</th>
              <th>Src</th>
              <th>Actions</th>
            </tr>
            <tr>
              <td><video src="assets/video/video1.mp4" width="50px" height="50px"></video></td>
              <td>Gaasl</td>
              <td><a href="edita-video.html" ><i class="material-icons">&#xe22b;</i> </a>
                <a onclick="myFunction()"  ><i class="material-icons">clear</i></a> 
              </td>
            </tr>
            <tr>
                <td><video src="assets/video/video1.mp4" width="50px" height="50px"></video></td>
                <td>KKK</td>
              <td><a href="edita-video.html" ><i class="material-icons">&#xe22b;</i> </a>
                <a onclick="myFunction()"  ><i class="material-icons">clear</i> </a>
              </td>
          
            </tr>
          
          </table>

          <a href="add-video.html" class="button">Nuevo video</a>

      </div>
</body>
</html>
