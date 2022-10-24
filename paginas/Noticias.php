<?php




INCLUDE("conexion.php");


$con=conectar();
$sql="SELECT * FROM Noticias" ;

$query=mysqli_query($con,$sql);

  $row=mysqli_fetch_array($query);


?>


<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CERVERA DE LOS MONTES</title>
  <link rel="stylesheet" href="http://localhost/CERVERA/css/style.css" />



  <link rel="icon" type="image/x-icon" href="http://localhost/CERVERA/img/inicio/logo.jpg" />
</head>


<body>


  <a href="#header" id="ancla"> <img src="http://localhost/CERVERA/img/iconos/flechaarriba.png" alt=""></a>
  <div class="contenedorCentral">


  
    <div id="contenedor">
      <header id="header">
      <?php
    include_once("../header.php")
?>

      </header>

      <div class="cajaTituloNoticia">
        <h2 class="tituloNoticia"> NOTICIAS</h2>
      </div>

      <div class="Divbandomovil">
      <iframe style="padding-left:10px" src="https://www.bandomovil.com/web_widget.php?municipio=cerveradelosmontes" width="1200" height="680"> </iframe>
      </div>



      <?php



while($row = mysqli_fetch_array($query)){
     $arrayDatos[] = $row;
    echo'
    <div class="cajaNoticia">
    <div class="imagenNoticiaizq"><img src="../img/'. $row["Archivos"] .'" alt="" srcset=""></div>
  

    <div class="noticiaDer">
     

      <h2> ' . $row["Nombre"] . '</h2>
      ' . $row["Descripcion"] . '
      <div class="fechaNoticia">' . $row["Fecha"] . '</div>
    </div>

    <br>


  


   </div>
 
   ';
    
  }
?>
    
    <?php
    include_once("../footer.php")
?>
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../js/js.js"></script>
</body>

</html>