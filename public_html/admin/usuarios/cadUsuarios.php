<?php

include_once "../../conecta.php";
include_once "../Usuarios/Usuario.php";
include_once "../Usuarios/UsuariosDAO.php";

$Nombre = $_POST['nombre'];
$Email = $_POST['email'];
$Contraseña = $_POST['contraseña'];

$PDO = new conecta();
$connect = $PDO -> conecta();
$b = new Usuario();


$b ->setNombre($Nombre);
$b ->setEmail($Email);
$b ->setContraseña($Contraseña);

$usuario = new UsuariosDAO();

$usuario -> cadastrarUsuario($b, $connect);

?>

