<?php
INCLUDE("../../../conexion.php");

$con = conectar();


$Nombre=$_POST['Nombre'];

$Archivos=$_POST['Archivos'];

$sql="INSERT INTO pleno(Nombre,Archivos) VALUES('$Nombre','$Archivos')";

$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location:../../Servicios/Plenos.php");
}


?>

