<?php

class imagenDAO {
    
    public function cadastrarImagen($imagen, $connect){
    try{
    $stmt = $connect->prepare("INSERT INTO imagenes (Src, Descripcion, titulo) VALUES (?,?,?)");
    $stmt->bindValue(1, $imagen->getsrc());
    $stmt->bindValue(2, $imagen->getdescripcion());
    $stmt->bindValue(3, $imagen->gettitulo());
 
    $b = $stmt->execute();
    
    return $b;
    
    //var_dump($b);
    }catch(PDOException $e){
        echo "Erro: ".$e;
    }
}


    public function selectImagen() {
        $stmt = $this->conecta->prepare("SELECT * FROM $this->imagenes");
        $stmt->execute();

        $lista = array();

        while ($linha = $stmt->fetch()) {
            $imagen = new imagen();
            $imagen->settitulo($linha['titulo']);
            $imagen->setsrc($linha['img']);
            $imagen->setdescripcion($linha['desc']);
     
            $lista[] = $imagen;
        }
        return $lista;
    }
    
      public function eliminarImagen($imagen) {
        $stmt = $this->conecta->prepare("DELETE FROM {$this->imagenes} "
                . " WHERE idImagen = :idImagen");

        $stmt->bindValue(':idImagen', $imagen->getidImagen());

        return $stmt->execute();
    }


}
 ?>
