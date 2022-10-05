<?php

INCLUDE("../../../conexion.php");

$con=conectar();

// $I=$_POST["id"];
// $N=$_POST["Nombre"];
// $L=$_POST["Descripcion"];
// $D=$_POST["dni"];
// $consulta="UPDATE usuarios SET id='$I' , nombre='$N', apellido='$L', dni='$D' WHERE id='$I' ";
// $datos=mysqli_query($conexion,$consulta); 

$id=$_GET['id'];

if (!isset($_POST['submit'])) {
$consulta= "select * from descarga_documentos WHERE id='$id'";
$datos=mysqli_query($con,$consulta) ;
echo ' <table width=300>
<tr>
<td></td><td>nombre</td><td>Descripcion</td><td>Archivos</td>
</tr>';
while ($fila=mysqli_fetch_array($datos)) {
echo "<form method='POST' action='ModificarDescarga_Formulario.php' >";
echo "<tr>";
echo "<td> <input style='display:none;' type='text' name='id' value='".$fila['id']."'> </td>";
echo "<td><input type='text' name='Nombre' value='".$fila['Nombre']."'></td>";
echo "<td><input type='text' name='Descripcion' value='".$fila['Descripcion']."'></td>";
echo "<td><input type='file' name='Archivos' value='".$fila['Archivos']."'></td> ";
echo "<td>"," <input type='submit' name='submit' value='Actualizar'>"," </td>";
echo "</tr>";
echo "</form>"; }
echo "</table>";
}else {
$I=$_POST["id"];
$N=$_POST["Nombre"];
$L=$_POST["Descripcion"];
$D=$_POST["Archivos"];
$consulta="UPDATE descarga_documentos SET id='$I' , Nombre='$N', Descripcion='$L', Archivos='$D' WHERE id='$I' ";
$datos=mysqli_query($con,$consulta) ; 

Header("Location: ../../Servicios/Descarga_Formularios.php");
}


?>

