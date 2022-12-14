<?php




INCLUDE("paginas/conexion.php");


$con=conectar();

// $sql = "SELECT * FROM `alcalde` where id=`1` ";

$sql = "SELECT * FROM `alcalde` WHERE id=\"1\";";

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
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/x-icon" href="img/inicio/logo.jpg" />
</head>
<body>
  <a href="#header" id="ancla"> <img id="imgAncla" src="img/iconos/flechaarriba.png" alt="" ></a>
  <div class="contenedorCentral">

    <div id="contenedor">
      <header id="header">
        <nav>
          <div class="navinfo">
            <img src="img/iconos/gmail.png" alt="" srcset="" /> ayuntcervera@hotmail.com
          </div>

          <div class="navinfo">
            <img src="img/iconos/telefono.png" alt="" srcset="" />
            925-875-501
          </div>

          <div class="contenedorLogo">
            <img src="img/inicio/logo.jpg" width="100px" class="logo" alt="" srcset="" />
        <b> <h2> CERVERA DE LOS MONTES</h2></b>  
          </div>

      
          <div class="navinfo">
            <img src="img/iconos/ubicacion.png" alt="" srcset="" /> Plaza Constitución 1
            45637 Cervera de los Montes (Toledo)
          </div>
        </nav>
        <img id="iconomenu" src="img/iconos/menu.png" alt="" srcset="" onclick="Menuvisible()">
        <img id="iconoCerrarMenu" src="img/iconos/letrax.png" alt="" srcset="" onclick="MenuCerrar()">
        <ul id="menu">
          <li style="border-left:0px ;"> <a href="#"> INICIO</a></li>
          <li class="highMenu"><a href="#">CONOCENOS<span class="uve">v</span></a>
            <ul class="submenu">
              <li  class="Lisubmenu" ><a href="paginas/Conocenos/Monumento.php">MONUMENTOS</a></li>
              <li class="Lisubmenu"><a href="paginas/Conocenos/Patrones.php">PATRONES</a></li>
              <li class="Lisubmenu"><a href="paginas/Conocenos/Piscina.php">PISCINA MUNICIPAL</a></li>
              <li class="Lisubmenu"><a href="paginas/Conocenos/Gastronomia.php">GASTRONOMIA</a></li>
              <li class="Lisubmenu"><a href="paginas/Conocenos/ZonasComunes.php">ZONAS COMUNES</a></li>
            </ul>
    </li>

    <li class="highMenu"><a href="#">SERVICIOS<span class="uve">v</span></a>
      <ul class="submenu">
        <li  class="Lisubmenu" ><a href="paginas/Servicios/Plenos.php">PLENOS</a></li>
        <li class="Lisubmenu"><a href="paginas/Servicios/Empleo.php">EMPLEO</a></li>
        <li class="Lisubmenu"><a href="paginas/Servicios/Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

      </ul>
</li>


    <li><a href="paginas/Noticias.php">NOTICIAS</a></li>
    <li><a href="paginas/Contacta.php">CONTACTA</a></li>
    </ul>


        
        </header>

   

      <div id="texto1inicio">

        <img src="img/logo.png" alt="" srcset="" />
        <p class="subtituloInicio">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa qui soluta cumque. 
         Sint quam consequuntur corrupti 
         nobis harum deleniti debitis est eos veniam provident ullam, commodi veritatis dolorum iusto?
        </p>
      </div>

      <div id="texto2inicio">
        <div class="izqInicio"></div>

        <div class="derInicio">
          La localidad de Cervera de los Montes está situada al suroeste de la comarca, en un lugar rodeado de pequeños cerros, cuyas altitudes oscilan entre los 590 y 650 metros de altura y debe su nombre a 
          la gran presencia de la caza mayor, la cual vivía en estas tierras, especialmente de ciervos.
    
    
          <h2>
           QUIERES VISITARNOS
          </h2>

          <p>
            A mediados del siglo XV pasa Cervera a formar parte del Condado 
            de Oropesa; sosteniendo ya en 1569 un pleito el conde de Oropesa con Talavera, sobre los 
            aprovechamientos de los pastos en este término. Ya en el año 1641 pasó a ser villa, 
            en tiempo de Felipe IV
          </p>

          <br />
     

          <p>
            En un comienzo hay referencias de población desde hace milenios, los primeros vestigios son tardorromanos con restos de una calzada. Después, durante el siglo XII, fue cuando Enrique II ‘El Trastámara’, desvincula este asentamiento del de la villa de Talavera de la Reina, a la vez que también lo hacía con Segurilla y Mejorada. Más tarde, a partir del siglo XV, pasa a formar parte del condado de Oropesa,
             hasta que en el año 1639 se le otorga el título de villa durante el reinado de Felipe IV.
          </p>

        </br>

          <p>
            No se tienen datos históricos sobre el origen de esta villa; Sólo la tradición afirma que
            unos pastores vinieron, procedentes de Talavera con sus rebaños, y al ver la abundancia de
             pastos, decidieron construir sus viviendas, que fueron aumentando con su descendencia 
            formándose así el pueblo. 
          </p>
          
        
         
        </div>
      </div>

      <div id="texto3inicio">
        <div class="izqInicio2">


        <?php


  echo '
 
  <h2>' .  $row["Nombre"] . '</h2>
  <p>
   
  ' .  $row["Descripcion"] . '

  </p>

  </div>

        <div class="derInicio2"><img src=img/Files/'.  $row["Archivos"] .' alt="" srcset=""></div>
      </div>

';

?>



      

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
              <img src="img/iconos/telefono.png" alt="" srcset="" />
              925-875-501
            </div>
            <div>
              <img src="img/iconos/gmail.png" alt="" srcset="" /> ayuntcervera@hotmail.com

            </div>
            <div>
              <img src="img/iconos/ubicacion.png" alt="" srcset="" /> Plaza Constitución 1
              45637 Cervera de los Montes (Toledo)
            </div>
        </div>


        <div class="footerder">
          <i>
            <h2>REDES SOCIALES</h2>
          </i>
          <div class="conjuntoRedes">
            <a href="https://m.facebook.com/Cervera-de-los-Montes-en-vivo-223288074676712/?__tn__=C-R" target="_blank"> <img src="img/iconos/facebook.png" alt=""></a>
            <a href="" target="_blank"> <img src="img/iconos/gmail2.png" alt=""></a>
            <a href="" target="_blank"><img src="img/iconos/instagram.png"alt=""> </a>
          </div>
        </div>

      </footer>
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="js/js.js"></script>
</body>

</html>