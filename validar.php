<?php
    $usuarios = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuarios;
    include('conexion.php');
    $consulta="SELECT * FROM usuarios WHERE usuario='$usuarios' and contraseña='$contraseña'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        $_SESSION['usuario']=$usuarios;
        header("location:tablacitas.php");
    }else{
        ?>
        <?php
        include("inicio.php");
        ?>
        <h1>Error Datos</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
