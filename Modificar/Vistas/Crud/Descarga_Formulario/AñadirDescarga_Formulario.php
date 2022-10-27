<?php
INCLUDE("../../../conexion.php");

$con = conectar();


$Nombre=$_POST['Nombre'];

$Descripcion=$_POST['Descripcion'];

$Archivos=$_POST['Archivos'];

$sql="INSERT INTO descarga_documentos(Nombre,Descripcion,Archivos) VALUES('$Nombre','$Descripcion' ,'$Archivos')";

$query=mysqli_query($con,$sql);

include_once '../../../includes/inputsFile.php';


if ($query) {
    Header("Location: ../../Servicios/Descarga_Formularios.php");
}


?>