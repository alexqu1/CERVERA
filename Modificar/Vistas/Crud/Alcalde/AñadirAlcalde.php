<?php
INCLUDE("../../../conexion.php");

$con = conectar();


$Nombre=$_POST['Nombre'];

$Descripcion=$_POST['Descripcion'];

$Archivos=$_POST['Archivos'];

$sql="INSERT INTO alcalde(Nombre,Descripcion,Archivos) VALUES('$Nombre','$Descripcion' ,'$Archivos')";

$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location: ../../Principal.php");
}


?>