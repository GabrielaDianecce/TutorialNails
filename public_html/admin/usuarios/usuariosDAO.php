<?php

class usuariosDAO {
public function cadastrarUsuario($usuario, $connect){
    
    //var_dump($usuario);
    try{
    $stmt = $connect->prepare("INSERT INTO usuarios (Nombre, Email, Contrasena) VALUES (?,?,?)");
    $stmt->bindValue(1, $usuario->getNombre());
    $stmt->bindValue(2, $usuario->getEmail());
    $stmt->bindValue(3, $usuario->getContraseña());
    $b = $stmt->execute();
    
    return $b;
    }catch(PDOException $e){
        echo "Erro: ".$e;
    }
}


    public function selectUsuario($connect) {
        $stmt = $connect->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        
        $b = $stmt->fetchAll();
      
        return $b;
    }
}
  ?>
