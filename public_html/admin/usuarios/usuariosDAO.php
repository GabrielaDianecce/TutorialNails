<?php

class usuariosDAO {

    public function cadastrarUsuario($usuario, $connect) {

        //var_dump($usuario);
        try {
            $stmt = $connect->prepare("INSERT INTO usuarios (Nombre, Email, Contrasena) VALUES (?,?,?)");
            $stmt->bindValue(1, $usuario->getNombre());
            $stmt->bindValue(2, $usuario->getEmail());
            $stmt->bindValue(3, $usuario->getContraseña());
            $b = $stmt->execute();

            return $b;
        } catch (PDOException $e) {
            echo "Erro: " . $e;
        }
    }

    public function selectUsuario($connect) {
        $stmt = $connect->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        $b = $stmt->fetchAll();

        return $b;
    }

    public function eliminarUsuario($id, $connect) {
        $stmt = $connect->prepare("DELETE FROM usuarios  WHERE idUsuario = '$id'");

        $b = $stmt->execute();

        return $b;
    }

    public function selectById($id, $connect) {

        var_dump($id);
        $stmt = $connect->prepare("SELECT * FROM usuarios "
                . " WHERE idUsuario = :idUsuario");

        $stmt->bindValue(':idUsuario', $id);
        $stmt->execute();

        $f = $stmt->fetch();

        $usuario = new usuario();
        $usuario->setidUsuario($f['idUsuario']);
        $usuario->setNombre($f['Nombre']);
        $usuario->setEmail($f['Email']);
        $usuario->setContraseña($f['Contrasena']);

        return $usuario;
    }

    public function editarUsuario($usuario, $connect) {
        var_dump($usuario);
        try {
            $stmt = $connect->prepare("UPDATE usuarios SET Nombre=?, Email = ?, Contrasena = ? WHERE idUsuario = ?");
            $stmt->bindValue(1, $usuario->getNombre());
            $stmt->bindValue(2, $usuario->getEmail());
            $stmt->bindValue(3, $usuario->getContraseña());
            $stmt->bindValue(4, $usuario->getidUsuario());


            $b = $stmt->execute();

            return $b;

            //var_dump($b);
        } catch (PDOException $e) {
            echo "Erro: " . $e;
        }
    }

    public function loginUsuario($usuario, $connect) {
        $stmt = $connect->prepare("SELECT * FROM usuario WHERE Email= :email && Contrasena= :contraseña");
        $stmt->bindValue(":email", $usuario->getEmail());
        $stmt->bindValue(":contraseña", $usuario->getContraseña());
        
        $stmt->execute();
        $retorno = false;
        
        if($resultato = $stmt->fetch()){
            $_SESSION['idUsuario'] = $resultado['id'];
            $_SESSION['logado'] = true;
            
            $retorno = true;
        }
        return $retorno;
    }

}

?>
