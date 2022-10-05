<?php

INCLUDE("../../../conexion.php");

$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM descarga_documentos WHERE id='$id'";

$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location: ../../Servicios/Descarga_Formularios.php");
}


?>
