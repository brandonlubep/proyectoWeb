<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="prueba_db";
    $con= new mysqli($server,$user,$pass,$db);

    if ($con) {
        print("conexion realizada con exito");
    }else {
        echo "error al establecer la conexion";
    }
}
conectar();
 ?>
