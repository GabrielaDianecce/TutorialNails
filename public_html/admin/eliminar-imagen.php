<?php

include_once "../conecta.php";
include_once "imagenes/imagen.php";
include_once "imagenes/imagenDAO.php";

$id = $_GET['id'];

$objDAO = new imagenDAO();
$PDO = new conecta();
$connect = $PDO->conecta();

$retorno = $objDAO->eliminarImagen($id, $connect);

if ($retorno)
   header('location:lista-imagen.php');
else
    echo "Error al eliminar";
?>
