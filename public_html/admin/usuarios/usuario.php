
<?php

class usuario {
    private $idUsuario;
    private $Nombre;
    private $Email;
    private $Contraseña;
    
     public function getidUsuario() {
            return $this->idUsuario;
        }
        public function setNombre($Nombre){
            $this->Nombre = $Nombre;
        }
        public function getNombre() {
            return $this->Nombre;
        }
      public function setEmail($Email){
            $this->Email = $Email;
        }
        public function getEmail() {
            return $this->Email;
        }
         public function setContraseña($Contraseña){
            $this->Contraseña = $Contraseña;
        }
        public function getContraseña() {
            return $this->Contraseña;
        }
        
       
}

?>