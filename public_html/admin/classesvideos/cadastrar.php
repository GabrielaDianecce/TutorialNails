<?php

include_once "../../conecta.php";
include_once "../classesvideos/video.php";
include_once "../classesvideos/videoDAO.php";

$titulo = $_POST['t'];
$src = $_POST['s'];
$descripcion = $_POST['d'];

//var_dump($_POST);

$PDO = new conecta();
$connect = $PDO->conecta();
$a = new Video();

$a->settitulo($titulo);
$a->setsrc($src);
$a->setdescripcion($descripcion);


$video = new videoDAO();

$v = $video->cadastrarVideo($a, $connect);

//var_dump($v);
if ($v) {
   header('location:../lista-video.php'); 
} else {
    
}
?>



