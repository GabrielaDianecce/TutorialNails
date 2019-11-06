
<?php

class video {
    public $idVideo;
    public $titulo;
    public $src;
    public $descripcion;
    
        
        public function getidVideo() {
            return $this->idVideo;
        }
        
        public function setidVideo($idVideo){
            $this->idVideo = $idVideo;
        }
        public function settitulo($titulo){
            $this->titulo = $titulo;
        }
        public function gettitulo() {
            return $this->titulo;
        }
         public function setsrc($src){
            $this->src = $src;
        }
        public function getsrc() {
            return $this->src;
        }
         public function setdescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
        public function getdescripcion() {
            return $this->descripcion;
        }
        
}
?>
