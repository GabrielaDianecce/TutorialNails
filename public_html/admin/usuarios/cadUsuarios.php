<?php

include_once "../conecta.php";
include_once "../Usuarios/Usuario.php";
include_once "../Usuarios/UsuariosDAO.php";

$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Tipo = $_POST['Tipo'];
$Contraseña = $_POST['Contraseña'];

$PDO = new conecta();
$connect = $PDO -> conecta();
$b = new Usuario();


$b ->setNombre($Nombre);
$b ->setEmail($Email);
$b ->setTipo($Tipo);
$b ->setContraseña($Contraseña);

$usuario = new UsuarioDAO();

$usuario -> cadastrarUsuario($b, $connect);

?>

