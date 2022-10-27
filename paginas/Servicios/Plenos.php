<?php

INCLUDE("../conexion.php");

 $con=conectar();
 $sql="SELECT * FROM pleno order by id desc" ;
 
 $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CERVERA DE LOS MONTES</title>
  <?php echo " <link rel='stylesheet' href='.$root.css/style.css' />?>" ?>
  <link rel="icon" type="image/x-icon" href="http://localhost/CERVERA/img/inicio/logo.jpg" />
</head>


<body>
 

<div class="contenedorCentral">

<div id="contenedor">
  <header id="header">
  <?php
    include_once("../../header.php")
?>


  </header>


<div id="contenedorPleno">
<h2>PLENOS</h2>
   

<?php



while($row = mysqli_fetch_array($query)){
     $arrayDatos[] = $row;
    echo'



    <div class="cajaPleno">
    <div class="tituloCajaPleno">
      <p> ' .  $row["Nombre"] . ' </p>
    </div>
   

    <div class="pdfCajaPleno">
      <a href="http://localhost/CERVERA/img/Files/'.$row["Archivos"].' " rel="noopener noreferrer">
       
      <img src="../../img/iconos/pdf.png" alt="" srcset=""></a>
    </div>
    </div>
    ';  
  }
?>
</div>
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../../js/js.js"></script>
</body>

</html>