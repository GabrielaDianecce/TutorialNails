<?php

session_start();
include_once 'usuarios/usuario.php';
include_once 'usuarios/usuariosDAO.php';

$usuario = new usuario();

$usuario->setEmail($_POST['email']);
$usuario->setConttraseña($_POST['contraseña']);

$login = new SQL();
if($login->login($usuario)){
    header("location:index.html");
}else{
    header("location:registro.html");
}

?>
