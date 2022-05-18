<?php

$sql=mysqli_connect("localhost","root","","bd_usuario");


function conectar(){
    $conexion=null;
    $host='localhost';
    $db="bd_usuario";
    $user="root";
    $pwd="";
    try{
        $conexion=new PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);

    }
    catch(PDOException $e){
        echo ' <p> nose puede conectar ala base de datos</p>';
        exit;
    }

    return $conexion;
}
?>
