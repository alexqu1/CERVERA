
<!DOCTYPE html>
<html lang="en">


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
        <li  class="Lisubmenu" ><a href="../Servicios/Plenos.php">PLENOS</a></li>
        <li class="Lisubmenu"><a href="../Servicios/Empleo.php">EMPLEO</a></li>
        <li class="Lisubmenu"><a href="../Servicios/Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

      </ul>
</li>

<li><a href="../Noticias.php">NOTICIAS</a></li>
    <li><a href="../Contacta.php">CONTACTA</a></li>
    </ul>



      </header>

      <div class="cajaTituloNoticia">
        <h2 class="tituloNoticia"> GASTRONOMIA</h2>
      </div>
<div id="contenedorCartas">
    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Gastronomia/barSanRoque.png" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">BAR SAN ROQUE</div>
      <div class="descripcionCarta">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum corrupti hic expedita repellat obcaecati optio nemo aliquam, libero quisquam debitis 
        vero officiis molestiae sit illo fugit adipisci, quia incidunt voluptates?</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>

    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Gastronomia/barSanRoque.png" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">BAR SAN ROQUE</div>
      <div class="descripcionCarta">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum corrupti hic expedita repellat obcaecati optio nemo aliquam, libero quisquam debitis 
        vero officiis molestiae sit illo fugit adipisci, quia incidunt voluptates?</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>

    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Gastronomia/barSanRoque.png" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">BAR SAN ROQUE</div>
      <div class="descripcionCarta">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum corrupti hic expedita repellat obcaecati optio nemo aliquam, libero quisquam debitis 
        vero officiis molestiae sit illo fugit adipisci, quia incidunt voluptates?</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>
 

  </div>


  <?php
    include_once("../../../footer.php")
?>
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <!-- <script src="../../js/js.js"></script>
  <script type="text/javascript" src="../../js/vanilla-tilt.js "></script>
  <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".cartas"), {
          max: 25,
          speed: 400,
          glare:true,
          "max-glare":1,
      });
      
      //It also supports NodeList
      VanillaTilt.init(document.querySelectorAll(".cartas"));
  </script> -->
</body>

</html>