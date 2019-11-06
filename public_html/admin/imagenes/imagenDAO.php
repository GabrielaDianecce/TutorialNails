<?php

class imagenDAO {

    public function cadastrarImagen($imagen, $connect) {
        try {
            $stmt = $connect->prepare("INSERT INTO imagenes (Src, Descripcion, titulo) VALUES (?,?,?)");
            $stmt->bindValue(1, $imagen->getsrc());
            $stmt->bindValue(2, $imagen->getdescripcion());
            $stmt->bindValue(3, $imagen->gettitulo());

            $b = $stmt->execute();

            return $b;

            //var_dump($b);
        } catch (PDOException $e) {
            echo "Erro: " . $e;
        }
    }

    public function selectImagen($connect) {
        $stmt = $connect->prepare("SELECT * FROM imagenes");
        $stmt->execute();

        $b = $stmt->fetchAll();

        return $b;
    }

    public function selectById($id, $connect) {

        var_dump($id);
        $stmt = $connect->prepare("SELECT * FROM imagenes "
                . " WHERE idImagen = :idImagen");

        $stmt->bindValue(':idImagen', $id);
        $stmt->execute();

        $i = $stmt->fetch();

        $img = new imagen();
        $img->setidImagen($i['idImagen']);
        $img->settitulo($i['titulo']);
        $img->setsrc($i['Src']);
        $img->setdescripcion($i['Descripcion']);



        return $img;
    }

    public function editarImagen($imagen, $connect) {
        var_dump($imagen);
        try {
            $stmt = $connect->prepare("UPDATE imagenes SET Src=?, Descripcion = ?, titulo = ? WHERE idImagen = ?");
            $stmt->bindValue(1, $imagen->getsrc());
            $stmt->bindValue(2, $imagen->getdescripcion());
            $stmt->bindValue(3, $imagen->gettitulo());
            $stmt->bindValue(4, $imagen->getidImagen());


            $b = $stmt->execute();

            return $b;

            //var_dump($b);
        } catch (PDOException $e) {
            echo "Erro: " . $e;
        }
    }

    public function eliminarImagen($id, $connect) {
        $stmt = $connect->prepare("DELETE FROM imagenes  WHERE idImagen = '$id'");

        $b = $stmt->execute();
       
        return $b;
    }

}

?>
