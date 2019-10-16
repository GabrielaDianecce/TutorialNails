<?php

class usuariosDAO {
public function cadastrarUsuario($usuario, $connect){
    try{
    $stmt = $connect->prepare("INSERT INTO usuario (Nombre, Email, Tipo, Contraseña) VALUES (?,?,?,?)");
    $stmt->bindValue(1, $usuario->getNombre());
    $stmt->bindValue(2, $usuario->getEmail());
     $stmt->bindValue(3,$usuario->getTipo());
    $stmt->bindValue(4, $usuario->getContraseña());
    $stmt->execute();
    }catch(PDOException $e){
        echo "Erro: ".$e;
    }
}
}
 ?>
