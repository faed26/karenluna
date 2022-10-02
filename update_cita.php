<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
$fechnac=$_POST['fechnac'];
$hcita=$_POST['hcita'];
$tel=$_POST['tel'];
$email=$_POST['email'];

$accion = "UPDATE citas SET nombre='$nombre', app='$app', apm='$apm', fechnac='$fechnac', hcita='$hcita', tel='$tel', email='$email' WHERE nombre='$nombre'";

$consulta=mysqli_query($conexion,$accion);

if($consulta!=null){
    print"<script>alert(\"Edición Exitosamente.\");
    window.location='tablacitas.php';</script>";


}else{

    print"<script>alert(\"No se pudo editar.\");
    window.location='tablacitas.php';</script>";
}

?>