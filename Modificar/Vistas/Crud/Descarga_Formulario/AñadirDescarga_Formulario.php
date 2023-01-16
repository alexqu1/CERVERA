<?php
INCLUDE("../../../conexion.php");

$con = conectar();

include_once '../../../includes/inputsFile.php';


$Nombre=$_POST['Nombre'];

$Descripcion=$_POST['Descripcion'];

$Archivos=$_FILES['Archivos']['name'];

$sql="INSERT INTO descarga_documentos(Nombre,Descripcion,Archivos) VALUES('$Nombre','$Descripcion' ,'$Archivos')";

$query=mysqli_query($con,$sql);


if ($query) {
    // Header("Location: ../../Servicios/Descarga_Formularios.php");
}


?>

