<?php




// $nombre = $_POST['nombre'];
// $telefono = $_POST['telefono'];
// $comentario = $_POST['comentario'];






$nombre =!empty($_POST['nombre'])  ? $_POST['nombre']  : null;
$telefono=!empty($_POST['telefono']) ?$_POST['telefono'] : null;
$comentario=!empty($_POST['comentario']) ? $_POST['comentario'] : null;

if($nombre && $telefono && $comentario){
    #Riesgo de consulta descabellada, ver Post-Data
    
  
    echo "<br>";
    mail('pepe@gmail.com' , $telefono , $comentario);

    header('Location: ../../paginas/Contacta.php');
 
}

?>
