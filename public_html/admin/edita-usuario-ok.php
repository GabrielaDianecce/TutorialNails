<?php

include_once "../conecta.php";
include_once "usuarios/usuario.php";
include_once "usuarios/usuariosDAO.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contrasena'];


$PDO = new conecta();
$connect = $PDO->conecta();
$r = new usuario();

$r->setidUsuario($id);
$r->setNombre($nombre);
$r->setEmail($email);
$r->setContraseña($contraseña);




var_dump($r);

$usuario = new usuariosDAO();

$z = $usuario->editarUsuario($r, $connect);

var_dump($z);

if ($z) {
   header('location:lista-usuario.php');
} else {
    echo "dasdas";
}
?>



