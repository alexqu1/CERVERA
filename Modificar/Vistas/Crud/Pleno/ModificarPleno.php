<?php

INCLUDE("../../../conexion.php");

$con=conectar();





if (!isset($_POST['submit'])) {
    $id=$_GET['id'];
$consulta= "select * from Pleno WHERE id='$id'";
$datos=mysqli_query($con,$consulta) ;
echo ' <table width=300>
<tr>
<td></td><td>nombre</td><td>Archivos</td>
</tr>';
while ($fila=mysqli_fetch_array($datos)) {
echo "<form method='POST' action='ModificarPleno.php' >";
echo "<tr>";
echo "<td> <input style='display:none;' type='text' name='id' value='".$fila['id']."'> </td>";
echo "<td><input type='text' name='Nombre' value='".$fila['Nombre']."'></td>";

echo "<td><input type='file' name='Archivos' value='".$fila['Archivos']."'></td> ";
echo "<td>"," <input type='submit' name='submit' value='Actualizar'>"," </td>";
echo "</tr>";
echo "</form>"; }
echo "</table>";
}else {
$I=$_POST["id"];
$N=$_POST["Nombre"];

$D=$_POST["Archivos"];
$consulta="UPDATE Pleno SET id='$I' , Nombre='$N',  Archivos='$D' WHERE id='$I' ";
$datos=mysqli_query($con,$consulta) ; 

Header("Location: ../../Servicios/Plenos.php");
}


?>