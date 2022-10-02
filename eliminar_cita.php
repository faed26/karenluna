<?php

include "conexion.php"; 

$id=$_GET['id'];

$sql="DELETE FROM citas WHERE id='$id'";
$consulta=mysqli_query($conexion,$sql);


if($consulta!=null){
    print"<script>alert(\"Eliminado Exitosamente.\");
    window.location='tablacitas.php';</script>";


}else{

    print"<script>alert(\"No se pudo eliminar.\");
    window.location='tablacitas.php';</script>";
}
?>