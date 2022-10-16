<?php
INCLUDE("../../../conexion.php");

$con = conectar();


$Nombre=$_POST['Nombre'];

$Descripcion=$_POST['Descripcion'];

$Fecha=$_POST['Fecha'];

$imagen=$_POST['imagen'];



$sql="INSERT INTO noticias(Nombre,Descripcion,Fecha,imagen) VALUES('$Nombre','$Descripcion' ,'$Fecha' ,'$imagen')";

$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location: ../../Noticias.php");
}


?>

