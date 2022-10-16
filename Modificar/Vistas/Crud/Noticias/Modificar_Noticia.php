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
$consulta= "select * from noticias WHERE id='$id'";
$datos=mysqli_query($con,$consulta) ;

while ($fila=mysqli_fetch_array($datos)) {
echo "<form method='POST' action='Modificar_Noticia.php' >";
echo ' <input type="text" name="Nombre" id="" placeholder="TITULO">
<textarea name="Descripcion" id="" cols="30" rows="10" placeholder="DESCRIPCION DE LA NOTICIA"></textarea>


<input type="date" name="Fecha" id="">
<input type="file" name="imagen" id="">
<input type="submit" value="Añadir">';
echo "</form>"; }

}else {
$I=$_POST["id"];
$N=$_POST["Nombre"];
$L=$_POST["Descripcion"];
$D=$_POST["Archivos"];
$consulta="UPDATE noticias SET id='$I' , Nombre='$N', Descripcion='$L', Archivos='$D' WHERE id='$I' ";
$datos=mysqli_query($con,$consulta) ; 

Header("Location: ../../Servicios/Descarga_Formularios.php");
}


?>

