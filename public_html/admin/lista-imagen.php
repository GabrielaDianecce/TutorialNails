<!DOCTYPE html>
<?php
include_once "../conecta.php";
include_once 'imagenes/imagenDAO.php';
include_once 'imagenes/imagen.php';

$PDO = new conecta();
$connect = $PDO->conecta();

$i = new imagenDAO();
$retorno = $i->selectImagen($connect);
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
            <li><a  class="active" href="lista-imagen.php">Imagenes</a></li>
            <li><a href="lista-video.php">Videos</a></li>
            <li><a  href="lista-usuario.php">Usuario</a></li>        
            <li style="float:right"><a  href="logout.html">Salir</a></li>
        </ul>


        <div class="contenido">
            <table>
                <tr>
                 
                    <th>Titulo</th>
                    <th>Src</th>
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
<?php
foreach ($retorno as $row) {
    echo "<tr>";
    echo "<td>" . $row['titulo'] . "</td>";
    echo "<td>" . $row['Src'] . "</td>";

    echo "<td><a href='edita-imagen.php?id=" . $row['idImagen'] . "' ><i class='material-icons'>&#xe22b;</i> </a>
                      <a onclick='myFunction()'  ><i class='material-icons'>clear</i></a> 
                    </td>";
    echo "</tr>";
}
?>


            </table>

            <a href="add-imagen.html" class="button">Nueva imagen</a>

        </div>
    </body>
</html>
