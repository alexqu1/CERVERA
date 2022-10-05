<?php
        
        
include_once '../../includes/AntiUrlAdmin.php';
INCLUDE("../../conexion.php");

 $con=conectar();
 $sql="SELECT * FROM Empleo order by id desc" ;
 
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

<div class="cerrarSesion" >
  <a href="http://localhost/CERVERA/Modificar/includes/logout.php" class="cerrarSesion" >  
  <img src="http://localhost/CERVERA/img/iconos/CerrarUsuario.png" alt="" srcset="" />
  CERRAR SESION 
  </a>
  </div> 

<div class="contenedorCentral">

<div id="contenedor">
  <header id="header">
    <nav>
      <div class="navinfo">
        <img src="http://localhost/CERVERA/img/iconos/gmail.png" alt="" srcset="" /> ayuntcervera@hotmail.com
      </div>

      <div class="navinfo">
        <img src="http://localhost/CERVERA/img/iconos/telefono.png" alt="" srcset="" />
        925-875-501
      </div>

      <div class="contenedorLogo">
        <img src="http://localhost/CERVERA/img/inicio/logo.jpg" width="100px" class="logo" alt="" srcset="" />
       <h2> CERVERA DE LOS MONTES</h2>
      </div>
  
      <div class="navinfo">
        <img src="http://localhost/CERVERA/img/iconos/ubicacion.png" alt="" srcset="" /> Plaza Constitución 1
        45637 Cervera de los Montes (Toledo)
      </div>
    </nav>

    <img id="iconomenu" src="http://localhost/CERVERA/img/iconos/menu.png" alt="" srcset="" onclick="Menuvisible()">
    <img id="iconoCerrarMenu" src="http://localhost/CERVERA/img/iconos/letrax.png" alt="" srcset="" onclick="MenuCerrar()">

    <ul id="menu">
      <li style="border-left:0px ;"><a href="../../index.php">INICIO</a></li>
      <li class="highMenu"><a href="#">CONOCENOS<span class="uve">v</span></a>
        <ul class="submenu">
          <li  class="Lisubmenu" ><a href="../Conocenos/Monumento.php">MONUMENTOS</a></li>
          <li class="Lisubmenu"><a href="../Conocenos/Patrones.php">PATRONES</a></li>
          <li class="Lisubmenu"><a href="../Conocenos/Piscina.php">PISCINA MUNICIPAL </a></li>
          <li class="Lisubmenu"><a href="../Conocenos/Gastronomia.php">GASTRONOMIA</a></li>
          <li class="Lisubmenu"><a href="../Conocenos/ZonasComunes.php">ZONAS COMUNES</a></li>
        </ul>
</li>

<li class="highMenu"><a href="#">SERVICIOS<span class="uve">v</span></a>
  <ul class="submenu">
    <li  class="Lisubmenu" ><a href="Plenos.php">PLENOS</a></li>
    <li class="Lisubmenu"><a href="#">EMPLEO</a></li>
    <li class="Lisubmenu"><a href="Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

  </ul>
</li>

<li><a href="../Noticias.php">NOTICIAS</a></li>
<li><a href="../Contacta.php">CONTACTA</a></li>
</ul>


  </header>


<div id="contenedorPleno">
<h2>OFERTAS EMPLEO </h2>
      <form action="../Crud/Empleo/Añadir_Empleo.php" method="post" style="width: 200px;">
 
      <input type="text" name="Nombre" id="" placeholder="Titulo">
    <input type="file" name="Archivos" id="">
    <input type="submit" value="Añadir">
</form>

<?php



while($row = mysqli_fetch_array($query)){
     $arrayDatos[] = $row;
    echo'
    <div class="cajaPleno">
    <div class="tituloCajaPleno">
      <p> ' .  $row["Nombre"] . ' </p>
    </div>
    
    <a href="../Crud/Empleo/Modificar_Empleo.php?id=' .$row['id']  . ' " rel="noopener noreferrer" class="BotonEditar" >Modificar</a>
    <a href="../Crud/Empleo/Borrar_Empleo.php?id=' .$row['id']  . ' " rel="noopener noreferrer"  class="BotonEliminar">Eliminar</a>

    <div class="pdfCajaPleno">
      <a href="' .  $row["Archivos"] . ' " rel="noopener noreferrer">
       
      <img src="http://localhost/CERVERA/img/iconos/pdf.png" alt="" srcset=""></a>
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