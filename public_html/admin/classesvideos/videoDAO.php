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
    
        public function selectVideo() {
        $stmt = $this->conecta->prepare("SELECT * FROM $this->videos");
        $stmt->execute();

        $lista = array();

        while ($linha = $stmt->fetch()) {
            $video = new video();
            $video->settitulo($linha['t']);
            $video->setsrc($linha['s']);
            $video->setdescripcion($linha['d']);
     
            $lista[] = $video;
        }
        return $lista;
    }
    
      public function eliminarVideo($video) {
        $stmt = $this->conecta->prepare("DELETE FROM {$this->videos} "
                . " WHERE idVideo = :idVideo");

        $stmt->bindValue(':idVideo', $video->getidVideo());

        return $stmt->execute();
    }


}
 ?>

