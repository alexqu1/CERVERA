<?php
INCLUDE("../../../conexion.php");

$con = conectar();


$Nombre=$_POST['Nombre'];

$Descripcion=$_POST['Descripcion'];

 $Archivos=$_FILES['Archivos']['name'];



$sql="REPLACE INTO alcalde(id,Nombre,Descripcion,Archivos) VALUES ('1','$Nombre','$Descripcion' ,'$Archivos')";
$query=mysqli_query($con,$sql);


include_once '../../../includes/inputsFile.php';


if ($query) {
    Header("Location: ../../Principal.php");
}




?>
