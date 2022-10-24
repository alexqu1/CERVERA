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
        <h2 class="tituloNoticia"> PATRONES</h2>
      </div>

      <div id="texto2Patrones">
        <div class="izqPatrones"></div>

        <div class="derPatrones">
         
    
    
          <h2>
          SAN BLAS
          </h2>

          <p>
          <b>   3 de febrero: se celebra el día de San Blas.</b>
          
          </p>
          <br>    
          <p>
            El día de San Blas es venerado tradicionalmente como “Abogado contra los males de garganta” porque uno de los milagros que se le atribuyen es la curación de un niño al que se le clavó una espina de pescado en la garganta.Son muchos los pueblos de Castilla-La Mancha que celebran este día. 

           
          </p>

          <br />
     

          <p>
            San Blas fue uno de los primeros mártires, fue obispo y médico y su labor la dirigió a ayudar a curar las enfermedades de las personas.
            
            Procesiones, misas, danzas, reparto y subasta de tortas son algunas de los actos más habituales en estas celebraciones. 
           
            
  San Blas es una de las fiestas más importantes de la localidad.
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

      <div id="texto3Patrones">
        <div class="izqPatrones2">
          <h2>SAN ROQUE</h2>
          <p>
           
            <b>16 de agosto: Festividad de San Roque.</b>
          <ul>
            <li>
              En agosto, después de la Asunción de la Virgen, llega el día de San Roque. Patrón de los peregrinos, de los contagiados por epidemias, de los enfermeros, de los falsamente acusados, San Roque se representa siempre junto a su fiel perro, y se recuerdan su vida y su milagro el 16 de agosto.

            
            </li>
            <li>  San Roque, nacido en Montpellier en 1295, en su peregrinaje hacia Roma llegó a la ciudad italiana de Aguapendente, donde quedó sobrecogido por los estragos de la peste.</li>
            <li>
              San Roque desconocía su poder taumatúrgico, que descubrió cuando, impulsado por su generosidad, trazó el signo de la cruz sobre el cuerpo de un enfermo, y este sanó con tanta alegría y exaltación de júbilo que todos los apestados de la gran sala del hospital quisieron recibir la bendición de tan extraño ermitaño.
            </li>
            <li>El hecho trascendió rápidamente y San Roque tuvo que huir de la multitud que le asediaba y que, como era de esperar, le contagió. Sin embargo, el santo carecía de don para sanarse a sí mismo, y, enfermo, se refugió en una cueva. Allí lo descubrió un perro tan inteligente que se percató de la hambruna del bendito Roque y marchó a casa de su amo para coger un panecillo y llevárselo.</li>
            <li>La hagiografía termina con la muerte de San Roque en Montpellier un 16 de agosto, motivo por el cual se le dedica este día. En su ciudad natal lo encarcelaron, confundiéndole con un espía. Nadie le advirtió lo difícil que es ser profeta en su tierra, aunque por el perro su imagen es inconfundible.</li>
            

          </ul>
          </p>
        </div>

        <div class="derPatrones2"></div>
      </div>


      <?php
    include_once("../../footer.php")
?>
    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../../js/js.js"></script>
</body>

</html>