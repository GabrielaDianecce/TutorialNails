<!DOCTYPE html>
<?php

include_once "../conecta.php";
include_once 'classesvideos/videoDAO.php';
include_once 'classesvideos/video.php';

$PDO = new conecta();
$connect = $PDO->conecta();

$vi = new videoDAO();
$retorno = $vi->selectVideo($connect);
        
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
        <li><a href="lista-imagen.php">Imagenes</a></li>
        <li><a class="active" href="lista-php.html">Videos</a></li>
        <li><a  href="lista-usuario.php">Usuario</a></li>        
        <li style="float:right"><a  href="logout.html">Salir</a></li>
      </ul>

      <div class="contenido">
        <table>
            <tr>
              <th>Video</th>
              <th>Src</th>
              <th>Actions</th>
            </tr>
            
                <?php
                
                 foreach ($retorno as $row) {
                    echo "<tr>";
                    echo "<td>". $row['Titulo']. "</td>";
                    echo "<td>". $row['Src']. "</td>";
                    echo "<td><a href='edita-video.php?id=".$row['idVideo']."' ><i class='material-icons'>&#xe22b;</i> </a>
                      <a onclick='myFunction()'  ><i class='material-icons'>clear</i></a> 
                    </td>";
                    echo "</tr>";
                }

                ?>
          
          </table>

          <a href="add-video.html" class="button">Nuevo video</a>

      </div>
</body>
</html>
