
<?php

     

        INCLUDE("../conexion.php");
        
$con=conectar();
$sql="SELECT * FROM descarga_documentos order by id desc" ;

$query=mysqli_query($con,$sql);

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
  <div class="contenedorCentral">

    <div id="contenedor">
      <header id="header">
      <?php
    include_once("../../header.php")
?>

  
      </header>

<div id="contenedorPleno">
<h2>DESCARGA FORMULARIO</h2>


<?php

while($row = mysqli_fetch_array($query)){
     $arrayDatos[] = $row;
    echo'



    <div class="cajaPleno">
    <div class="tituloDescargaFormulario">
      <p><h4>'.  $row["Nombre"] .' </h4></p>
      <p>'.  $row["Descripcion"] .'</p>
    </div>

   
    <div class="pdfCajaPleno">
      <a href="http://localhost/CERVERA/img/Files/' .  $row["Archivos"] . ' " target="_blank" rel="noopener noreferrer">
        <img src="../../img/iconos/pdf.png" alt="" srcset=""></a>
    </div>
  
   </div>

    
    ';


    
  }
?>



 </div>




</div>



<footer>
  <div class="footerizq">
    <i>
      <h2>HORARIO</h2>
    </i>
    <p>LUNES-VIERNES : <b> 9:00 - 14:00</b> </p>
    <br>
    <p>SABADO-DOMINGO : <b>C E R R A D O</b></p>
  </div>
  <div class="footercentro">
    <i>
      <h2>CONTACTO</h2>

      <div>
        <img src="http://localhost/CERVERA/img/iconos/telefono.png" alt="" srcset="" />
        925-875-501
      </div>
      <div>
        <img src="http://localhost/CERVERA/img/iconos/gmail.png" alt="" srcset="" /> ayuntcervera@hotmail.com

      </div>
      <div>
        <img src="http://localhost/CERVERA/img/iconos/ubicacion.png" alt="" srcset="" /> Plaza Constitución 1
        45637 Cervera de los Montes (Toledo)
      </div>
  </div>


  <div class="footerder">
    <i>
      <h2>REDES SOCIALES</h2>
    </i>
    <div class="conjuntoRedes">
      <a href="" target="_blank"> <img src="http://localhost/CERVERA/img/iconos/facebook.png" alt=""></a>
      <a href="" target="_blank"> <img src="http://localhost/CERVERA/img/iconos/gmail2.png" alt=""></a>
      <a href="" target="_blank"><img src="http://localhost/CERVERA/img/iconos/instagram.png"alt=""> </a>
    </div>
  </div>

  
</footer>
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../../js/js.js"></script>
</body>

</html>