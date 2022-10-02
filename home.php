<?php
    session_start();
    $usuario=$_SESSION['usuario'];
    if(!isset($usuario)){
        header("location:index.html");
    }else{
        echo"<h1>Hola $usuario</h1>";
        echo"<a href='logout.php'>Salir</a>";
    }
?>
