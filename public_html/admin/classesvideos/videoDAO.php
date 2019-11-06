<?php

class videoDAO {

    public function cadastrarVideo($video, $connect) {
        try {
            $stmt = $connect->prepare("INSERT INTO videos (Titulo, Src, Descripcion) VALUES (?,?,?)");
            $stmt->bindValue(1, $video->gettitulo());
            $stmt->bindValue(2, $video->getsrc());
            $stmt->bindValue(3, $video->getdescripcion());

            $b = $stmt->execute();

            return $b;
        } catch (PDOException $e) {
            echo "Erro: " . $e;
        }
    }

    public function selectVideo($connect) {
        $stmt = $connect->prepare("SELECT * FROM videos");
        $stmt->execute();

        $b = $stmt->fetchAll();

        return $b;
    }

   public function eliminarVideo($id, $connect) {
        $stmt = $connect->prepare("DELETE FROM videos  WHERE idVideo = '$id'");

        $b = $stmt->execute();
       
        return $b;
    }

    public function selectById($id, $connect) {

        var_dump($id);
        $stmt = $connect->prepare("SELECT * FROM videos "
                . " WHERE idVideo = :idVideo");

        $stmt->bindValue(':idVideo', $id);
        $stmt->execute();

        $i = $stmt->fetch();

        $video = new video();
        $video->setidVideo($i['idVideo']);
        $video->settitulo($i['Titulo']);
        $video->setsrc($i['Src']);
        $video->setdescripcion($i['Descripcion']);

        return $video;
    }

    public function editarVideo($video, $connect) {
        var_dump($video);
        try {
            $stmt = $connect->prepare("UPDATE videos SET Src=?, Descripcion = ?, Titulo = ? WHERE idVideo = ?");
            $stmt->bindValue(1, $video->getsrc());
            $stmt->bindValue(2, $video->getdescripcion());
            $stmt->bindValue(3, $video->gettitulo());
            $stmt->bindValue(4, $video->getidVideo());


            $b = $stmt->execute();

            return $b;

            //var_dump($b);
        } catch (PDOException $e) {
            echo "Erro: " . $e;
        }
    }

}
?>

