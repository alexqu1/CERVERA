<?php

include_once '../includes/AntiUrlAdmin.php';



include("../conexion.php");


$con = conectar();
$sql = "SELECT * FROM Noticias order by fecha desc";

$query = mysqli_query($con, $sql);




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
  <div class="cerrarSesion">
    <a href="http://localhost/CERVERA/Modificar/includes/logout.php" class="cerrarSesion">
      <img src="http://localhost/CERVERA/img/iconos/CerrarUsuario.png" alt="" srcset="" />
      CERRAR SESION
    </a>
  </div>

  <a href="#header" id="ancla"> <img src="http://localhost/CERVERA/img/iconos/flechaarriba.png" alt=""></a>
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
          <li style="border-left:0px ;"><a href="../index.php">INICIO</a></li>
          <li class="highMenu"><a href="#">CONOCENOS<span class="uve">v</span></a>
            <ul class="submenu">
              <li class="Lisubmenu"><a href="Conocenos/Monumento.php">MONUMENTOS</a></li>
              <li class="Lisubmenu"><a href="Conocenos/Patrones.php">PATRONES</a></li>
              <li class="Lisubmenu"><a href="Conocenos/Piscina.php">PISCINA MUNICIPAL </a></li>
              <li class="Lisubmenu"><a href="Conocenos/Gastronomia.php">GASTRONOMIA</a></li>
              <li class="Lisubmenu"><a href="Conocenos/ZonasComunes.php">ZONAS COMUNES</a></li>
            </ul>
          </li>


          <li class="highMenu"><a href="#">SERVICIOS<span class="uve">v</span></a>
            <ul class="submenu">
              <li class="Lisubmenu"><a href="Servicios/Plenos.php">PLENOS</a></li>
              <li class="Lisubmenu"><a href="Servicios/Empleo.php">EMPLEO</a></li>
              <li class="Lisubmenu"><a href="Servicios/Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

            </ul>
          </li>


          <li><a href="#">NOTICIAS</a></li>
          <li><a href="Contacta.php">CONTACTA</a></li>
        </ul>


      </header>

      <div class="cajaTituloNoticia">
        <h2 class="tituloNoticia"> NOTICIAS</h2>
      </div>

      <center><iframe style="padding-left:10px" src="https://www.bandomovil.com/web_widget.php?municipio=cerveradelosmontes" width="1200" height="680"> </iframe></center>


      <form action="Crud/Noticias/Añadir_Noticia.php" method="post" style="width: 200px;">

        <input type="text" name="Nombre" id="" placeholder="TITULO">
        <textarea name="Descripcion" id="" cols="30" rows="10" placeholder="DESCRIPCION DE LA NOTICIA"></textarea>


        <input type="date" name="Fecha" id="">
        <input type="file" name="Archivos" id="">
        <input type="submit" value="Añadir">
      </form>



      <?php



      while ($row = mysqli_fetch_array($query)) {
        $arrayDatos[] = $row;
        echo '



    <div class="cajaNoticia">




    <div class="imagenNoticiaizq"><img src="http://localhost/CERVERA/img/Files/'. $row['Archivos']  .'" alt="" srcset=""></div>
    
    

    <div class="noticiaDer">
     
<div>    <a href="Crud/Noticias/Modificar_Noticia.php?id=' . $row['id']  . ' " rel="noopener noreferrer" class="BotonEditar" >Modificar</a></div>
<div>     <a href="Crud/Noticias/Borrar_Noticia.php?id=' . $row['id']  . ' " rel="noopener noreferrer"  class="BotonEliminar">Eliminar</a> </div>
      <h2> ' . $row["Nombre"] . '</h2>
      ' . $row["Descripcion"] . '
      <div class="fechaNoticia">' . $row["Fecha"] . '</div>
    </div>

    <br>


  


   </div>
 
   ';
      }
      
      
      include_once("../../footer.php")
      ?>

    
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../js/js.js"></script>
</body>

</html>