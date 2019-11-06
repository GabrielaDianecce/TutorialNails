

<?php

include_once "../conecta.php";
include_once "classesvideos/video.php";
include_once "classesvideos/videoDAO.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$desc = $_POST['desc'];


$nombrevideo = $_FILES['videos']['name'];
$nombret = $_FILES['videos']['tmp_name'];
$d = "../assets/videos/" . $nombrevideo;

    if (move_uploaded_file($nombret, $d))
        echo "Video enviado";
    else
        echo "Error al enviar video";


$PDO = new conecta();
$connect = $PDO->conecta();
$v = new video();

$v->setidVideo($id);
$v->settitulo($titulo);
$v->setdescripcion($desc);




var_dump($v);

$video = new videoDAO();

$z = $video->editarVideo($v, $connect);

var_dump($z);

if ($z) {
   header('location:lista-video.php');
} else {
    echo "dasdas";
}
?>



