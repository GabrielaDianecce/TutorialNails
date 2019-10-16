<?php

class conecta {
    public function conecta(){
        try{
            $con = new PDO ("mysql:host=localhost;dbname=tutorialnails", "root", "");
        }catch(PDOExceotion $e){
            echo "Erro: ".$e;
        }
        return $con;
    }
}
?>
