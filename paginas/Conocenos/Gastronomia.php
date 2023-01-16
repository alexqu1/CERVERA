
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

  <a href="#header" id="ancla"> <img src="http://localhost/CERVERA/img/iconos/flechaarriba.png" alt=""></a>
  <div class="contenedorCentral">

    <div id="contenedor">
      <header id="header">
      <?php
    include_once("../../header.php")
?>


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

   

  </div>


  <?php
    include_once("../../footer.php")
?>
    </div>
    <!-- fin contendor -->
  </div>

</body>

</html>