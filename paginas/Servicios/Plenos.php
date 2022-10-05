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
  <link rel="stylesheet" href="http://localhost/CERVERA/css/style.css" />
  <link rel="icon" type="image/x-icon" href="../../img/inicio/logo.jpg" />
</head>


<body>
 

<div class="contenedorCentral">

<div id="contenedor">
  <header id="header">
    <nav>
      <div class="navinfo">
        <img src="../../img/iconos/gmail.png" alt="" srcset="" /> ayuntcervera@hotmail.com
      </div>

      <div class="navinfo">
        <img src="../../img/iconos/telefono.png" alt="" srcset="" />
        925-875-501
      </div>

      <div class="contenedorLogo">
        <img src="../../img/inicio/logo.jpg" width="100px" class="logo" alt="" srcset="" />
       <h2> CERVERA DE LOS MONTES</h2>
      </div>

  
      <div class="navinfo">
        <img src="../../img/iconos/ubicacion.png" alt="" srcset="" /> Plaza Constitución 1
        45637 Cervera de los Montes (Toledo)
      </div>
    </nav>

    <img id="iconomenu" src="../../img/iconos/menu.png" alt="" srcset="" onclick="Menuvisible()">
    <img id="iconoCerrarMenu" src="../../img/iconos/letrax.png" alt="" srcset="" onclick="MenuCerrar()">


    <ul id="menu">
          <li style="border-left:0px ;"><a href="../../index.php">INICIO</a></li>
          <li class="highMenu"><a href="#">CONOCENOS<span class="uve">v</span></a>
            <ul class="submenu">
              <li  class="Lisubmenu" ><a href="Monumento.php">MONUMENTOS</a></li>
              <li class="Lisubmenu"><a href="Patrones.php">PATRONES</a></li>
              <li class="Lisubmenu"><a href="Piscina.php">PISCINA MUNICIPAL </a></li>
  
              <li class="Lisubmenu"><a href="Gastronomia.php">GASTRONOMIA</a></li>
              <li class="Lisubmenu"><a href="ZonasComunes.php">LUGARES COMUNES</a></li>
            </ul>
    </li>

    <li class="highMenu"><a href="#">SERVICIOS<span class="uve">v</span></a>
      <ul class="submenu">
        <li  class="Lisubmenu" ><a href="#">PLENOS</a></li>
        <li class="Lisubmenu"><a href="Empleo.php">EMPLEO</a></li>
        <li class="Lisubmenu"><a href="Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

      </ul>
</li>

<li><a href="../Noticias.php">NOTICIAS</a></li>
    <li><a href="../Contacta.php">CONTACTA</a></li>
    </ul>


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
      <a href="' .  $row["Archivos"] . ' " rel="noopener noreferrer">
       
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