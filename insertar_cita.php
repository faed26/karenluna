<?php

$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
$fechnac=$_POST['fechnac'];
$hcita=$_POST['hcita'];
$tel=$_POST['tel'];
$email=$_POST['email'];

include "conexion.php";

$accion="INSERT INTO citas (nombre, app, apm, fechnac, hcita, tel, email)
VALUES ('$nombre', '$app', '$apm', '$fechnac', '$hcita', '$tel', '$email')";
$consulta=mysqli_query($conexion,$accion);

if($consulta!=null){
    print("<script>alert(\"Cita registrada con exito.\");
    window.location='citas.php';</script>");


}else{

    print"<script>alert(\"No se pudo registrar.\");
    window.location='citas.php';</script>";
}
?>