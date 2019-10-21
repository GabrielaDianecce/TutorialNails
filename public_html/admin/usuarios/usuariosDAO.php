<?php

class usuariosDAO {
public function cadastrarUsuario($usuario, $connect){
    try{
    $stmt = $connect->prepare("INSERT INTO usuario (Nombre, Email, Contraseña) VALUES (?,?,?)");
    $stmt->bindValue(1, $usuario->getNombre());
    $stmt->bindValue(2, $usuario->getEmail());
    $stmt->bindValue(3, $usuario->getContraseña());
    $stmt->execute();
    }catch(PDOException $e){
        echo "Erro: ".$e;
    }
}


    public function selectUsuarios() {
        $stmt = $this->conecta->prepare("SELECT * FROM $this->usuario");
        $stmt->execute();

        $lista = array();

        while ($linha = $stmt->fetch()) {
            $usuario = new Usuario();
            $usuario->setNombre($linha['nombre']);
            $usuario->setSenha($linha['contraseña']);
            $usuario->setEmail($linha['email']);
            $usuario->settipo($linha['tipo']);
            $usuario->setidUsuario($linha['idUsuario']);

            $lista[] = $usuario;
        }
        return $lista;
    }

    public function selectById($usuario) {
        $stmt = $this->conecta->prepare("SELECT * FROM $this->usuario WHERE id = :idUsuario");

        $stmt->bindValue(':idUsuario', $usuario->getidUsuario());
        $stmt->execute();

        $linha = $stmt->fetch();

        $usuario = new Usuario();
        $usuario->setNombre($linha['nombre']);
        $usuario->setSenha($linha['contraseña']);
        $usuario->setEmail($linha['email']);
        $usuario->settipo($linha['tipo']);
        $usuario->setidUsuario($linha['idUsuario']);

        return $usuario;
    }

    public function eliminar($usuario) {
        $stmt = $this->conecta->prepare("DELETE FROM {$this->usuario} "
                . " WHERE idUsuario = :idUsuario");

        $stmt->bindValue(':idUsuario', $usuario->getidUsuario());

        return $stmt->execute();
    }

}
?>
