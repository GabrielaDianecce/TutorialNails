
<?php

class imagen {
    private $idImagen;
    private $titulo;
    private $src;
    private $descripcion;
    
        
        public function getidImagen() {
            return $this->idImagen;
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