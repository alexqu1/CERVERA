<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]) . "/CERVERA/";
?>
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
      <?php
 include($root .  "modificar/headerAdmin.php")
?> 
      



      </header>
      <div class="cajaTituloNoticia">
        <h2 class="tituloNoticia"> MONUMENTOS</h2>
      </div>
<div id="contenedorCartas">
    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/potro_herrar.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">POTRO DE HERRAR</div>
      <div class="descripcionCarta">datado en el siglo XX, está integrado por bloques de granito colocados de dos y a cierta distancia entre sí. En el suelo,
         todavía se conservan los hierros típicos de estas construcciones.</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>

    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/torrejones.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">LOS TORREJONES</div>
      <div class="descripcionCarta">Datados entre los siglos XII-XIV. Están situados al norte del pueblo y se compone de los restos una torre rectangular, construida con mampostería y que muestra la presencia de un aljibe de planta rectangular y de pequeñas dimensiones.</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>

 


    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/Iglesia2.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">IGLESIA DE LA ASUNCION</div>
      <div class="descripcionCarta">

        Es un templo que se terminó de construir en 1594 bajo el patrocinio de la Marquesa de Deleitosa. Está compuesta por una sola nave con Presbítero más elevado y un destacado ábside poligonal de tres lados. La torre campanario es de dos cuerpos y preside la plaza principal de la localidad. Además, su pórtico de columnas situado en su lado sur se configura como una suerte de atrio donde poder resguardarse. En su interior destaca el coro de madera justo a lado de un gran órgano barroco y un lienzo representado a la Virgen de la Asunción de la escuela española del siglo XVII.
      </div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>



    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/ermitaconsuelo.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">Ermita del Consuelo</div>
      <div class="descripcionCarta">Está situada junto al cementerio y ha sido recientemente restaurada, ya que también la utilizaron los franceses como refugio.</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>


    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/ermitasocorro.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">Ermita de la Virgen del Socorro</div>
      <div class="descripcionCarta">Está situada en la carretera que parte hacia la localidad de Marrupe y se desconoce su origen.</div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>

    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/ermitarosario.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">Ermita  del Rosario </div>
      <div class="descripcionCarta"> Está situada en dirección a la localidad de Segurilla y es una de las advocaciones con más arraigo en la localidad. Aunque es muy pequeña, está muy bien decorada con un valioso zócalos de cerámica de Talavera de la Reina datado en el siglo XVI. </div>
      <div class="localizacion"> <img src="../../img/iconos/ubicacion.png" alt="" srcset="" />carretera talavera, n8
        45637 Cervera de los Montes
        Toledo
        España</div>
    </div>

    
    <div class="cartas">
      <div class="CajaCarta"><img src="../../img/Monumentos/fabricaseda.jpg" class="imagenCarta" alt="" srcset=""></div>
      <div class="tituloCarta">FABRICA DE SEDA</div>
      <div class="descripcionCarta">Es una edificación creada a mediados del siglo XVIII, como dependencia aneja a la Real Fábrica de Sedad de 
        Talavera de la Reina. Hasta el siglo XIX dependió de dicho complejo manufacturero debido a las extensas plantaciones de moreras que había 
        en la comarca. Realizada en trazas neoclásicas, actualmente está embutida en las viviendas que se han construido alrededor. A día de hoy 
        aún permanecen en pie el edificio principal o Casa de los Molinos, divido en casas particulares, destacando la portada central de acceso</div>
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