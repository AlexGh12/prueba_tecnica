<?php
    //conectando con el server
    $conectar=@mysql_connect('localhost','root','');
    //verificando conexion
    if(!$conectar){
        echo"ne existe conexion";
    }else{
        $base=mysql_select_db('pruebah');
        if(!$base){
            echo'no se encontro la base de datos';
        }
    }
    //variables del formulario
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $genero=$_POST['genero'];
    //sentencia sql
    $sql="INSERT INTO users VALUES ('$name','$email','$genero')";
    //ejecutar sentencia sql
    $ejecutar=mysql_query($sql);
    //verificando ejecucion
    if(!$ejecutar){
        echo'existe algun error';
    }else{
        header('localhost:50/prueba/catalogo.php');
    }

    //validar la sesion
    session_start();
    $_SESSION['usuario'] = $name;
    header('localhost:50/prueba/catalogo.php');
?>