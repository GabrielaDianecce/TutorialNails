
<?php

include_once "../conecta.php";
include_once "imagenes/imagen.php";
include_once "imagenes/imagenDAO.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['desc'];

$nombreimg = $_FILES['img']['name'];
$nombret = $_FILES['img']['tmp_name'];
$d = "../assets/img/" . $nombreimg;

    if (move_uploaded_file($nombret, $d))
        echo "Imagen enviada";
    else
        echo "Error al enviar imagen";

$PDO = new conecta();
$connect = $PDO->conecta();
$c = new imagen();

$c->setidImagen($id);
$c->settitulo($titulo);
$c->setdescripcion($descripcion);




var_dump($c);

$img = new imagenDAO();

$z = $img->editarImagen($c, $connect);

var_dump($z);

if ($z) {
   header('location:lista-imagen.php');
} else {
    echo "dasdas";
}
?>



