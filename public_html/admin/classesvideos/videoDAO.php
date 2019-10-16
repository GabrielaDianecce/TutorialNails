<?php

class videoDAO {
    
    public function cadastrarVideo($video, $connect){
        try{
        $stmt = $connect->prepare("INSERT INTO videos (Titulo, Src, Descripcion) VALUES (?,?,?)");
        $stmt->bindValue(1, $video->gettitulo());
        $stmt->bindValue(2, $video->getsrc());
        $stmt->bindValue(3, $video->getdescripcion());

        $b = $stmt->execute();

        return $b;

        }catch(PDOException $e){
            echo "Erro: ".$e;
        }
    }

}
 ?>

