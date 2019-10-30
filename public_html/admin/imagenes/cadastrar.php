<?php
    include_once "../../conecta.php";
    include_once "../imagenes/imagen.php";
    include_once "../imagenes/imagenDAO.php";


    $titulo = $_POST['titulo'];
    $src = $_POST['img'];
    $descripcion = $_POST['desc'];


    $PDO = new conecta();
    $connect = $PDO -> conecta();
    $c = new Imagen();

    $c->settitulo($titulo);
    $c->setsrc($src);
    $c->setdescripcion($descripcion);

    var_dump($c);

    $imagen = new imagenDAO();

    $z = $imagen->cadastrarImagen($c, $connect);
    
    var_dump($z);
    
    if($z){
        header('location:../lista-imagen.php'); 
    }else{
        
    }
?>


