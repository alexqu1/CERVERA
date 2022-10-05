<?php
INCLUDE("../../../conexion.php");

$con = conectar();


$Nombre=$_POST['Nombre'];

$Descripcion=$_POST['Descripcion'];

$Fecha=$_POST['Fecha'];

$Imagen=$_POST['Imagen'];



$sql="INSERT INTO Noticias(Nombre,Descripcion,Fecha,Imagen) VALUES('$Nombre','$Descripcion' ,'$Fecha' ,'$Imagen')";

$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location: ../../Noticias.php");
}


?>

