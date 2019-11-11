<?php

include_once "../conecta.php";
include_once "usuarios/usuario.php";
include_once "usuarios/usuariosDAO.php";

$id = $_GET['id'];

$objDAO = new usuariosDAO();
$PDO = new conecta();
$connect = $PDO->conecta();

$retorno = $objDAO->eliminarUsuario($id, $connect);

if ($retorno)
   header('location:lista-usuario.php');
else
    echo "Error al eliminar";
?>

