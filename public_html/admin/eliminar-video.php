<?php

include_once "../conecta.php";
include_once "classesvideos/video.php";
include_once "classesvideos/videoDAO.php";

$id = $_GET['id'];

$objDAO = new videoDAO();
$PDO = new conecta();
$connect = $PDO->conecta();

$retorno = $objDAO->eliminarVideo($id, $connect);

if ($retorno)
   header('location:lista-video.php');
else
    echo "Error al eliminar";
?>

