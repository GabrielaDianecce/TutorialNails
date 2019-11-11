<!DOCTYPE html>
<?php
include_once "../conecta.php";
include_once 'usuarios/usuariosDAO.php';
include_once 'usuarios/usuario.php';

$PDO = new conecta();
$connect = $PDO->conecta();

$u = new usuariosDAO();
$retorno = $u->selectUsuario($connect);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <script src="assets/js/js.js"></script>
    <title>Lista Usuarios</title>
</head>
<body>
    <ul>
        <li><a href="adm.html">Home</a></li>
        <li><a  class="active" href="lista-imagen.php">Imagenes</a></li>
        <li><a href="lista-video.php">Videos</a></li>
        <li><a  href="lista-usuario.php">Usuario</a></li>        
        <li style="float:right"><a  href="logout.html">Salir</a></li>
      </ul>


      <div class="contenido">
        <table>
            <tr>
              <th>Usuario</th>
              <th>Email</th>
              <th>Constraseña</th>
            </tr>
            <tr>
              <td>blss</td>
              <td>Gabiiii</td>
              <td><a href="edita-imagen.html" ><i class="material-icons">&#xe22b;</i> </a>
                <a onclick="myFunction()"  ><i class="material-icons">clear</i> </a>
              </td>
            </tr>
            <tr>
              <td>lkjdfnf</td>
              <td>lskdnfl</td>
              <td><a href="edita-imagen.html" ><i class="material-icons">&#xe22b;</i> </a>
              <a onclick="myFunction()"  ><i class="material-icons">clear</i> </a>
              </td>
          
            </tr>
          <?php
foreach ($retorno as $row) {
    echo "<tr>";
    echo "<td>" . $row['Nombre'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
     echo "<td>" . $row['Contrasena'] . "</td>";


    
    echo "<td><a href='edita-usuario.php?id=" . $row['idUsuario'] . "' ><i class='material-icons'>&#xe22b;</i> </a>
                     
                    </td>";
    echo "<td> <a href='eliminar-usuario.php?id=" . $row['idUsuario'] . "' ><i class='material-icons'>clear</i></a> </td>";
      
    echo "</tr>";
}
?>

          </table>

          <a href="add-usuario.html" class="button">Nuevo usuario</a>

      </div>
</body>
</html>
