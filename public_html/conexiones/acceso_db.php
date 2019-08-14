<?php
    $host_db = "root"; // Host de la BD
    $usuario_db = "localhost"; // Usuario de la BD
    $clave_db = ""; // Contraseña de la BD
    $nombre_db = "banco"; // Nombre de la BD
     
    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
?> 