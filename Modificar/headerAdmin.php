<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/CERVERA/";
  echo $root
?>
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
          <li style="border-left:0px ;"><a href="http://localhost/CERVERA/modificar/vistas/principal.php">INICIO</a></li>
          <li class="highMenu"><a href="#">CONOCENOS<span class="uve">v</span></a>
            <ul class="submenu">
              <li  class="Lisubmenu" ><a href="http://localhost/CERVERA/modificar/vistas/Conocenos/Monumento.php">MONUMENTOS</a></li>
              <li class="Lisubmenu"><a href="http://localhost/CERVERA/modificar/vistas/Conocenos/Patrones.php">PATRONES</a></li>
              <li class="Lisubmenu"><a href="http://localhost/CERVERA/modificar/vistas/Conocenos/Piscina.php">PISCINA MUNICIPAL </a></li>
              <li class="Lisubmenu"><a href="http://localhost/CERVERA/modificar/vistas/Conocenos/Gastronomia.php">GASTRONOMIA</a></li>
              <li class="Lisubmenu"><a href="http://localhost/CERVERA/modificar/vistas/Conocenos/ZonasComunes.php">ZONAS COMUNES</a></li>
            </ul>
    </li>

    <li class="highMenu"><a href="#">SERVICIOS<span class="uve">v</span></a>
      <ul class="submenu">
        <li  class="Lisubmenu" ><a href="http://localhost/CERVERA/modificar/vistas/Servicios/Plenos.php">PLENOS</a></li>
        <li class="Lisubmenu"><a href="http://localhost/CERVERA/modificar/vistas/Servicios/Empleo.php">EMPLEO</a></li>
        <li class="Lisubmenu"><a href="http://localhost/CERVERA/modificar/vistas/Servicios/Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

      </ul>
</li>


    <li><a href="http://localhost/CERVERA/modificar/vistas/paginas/Noticias.php">NOTICIAS</a></li>
    <li><a href="http://localhost/CERVERA/modificar/vistas/paginas/Contacta.php">CONTACTA</a></li>
    </ul>

