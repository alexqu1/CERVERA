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
          <li style="border-left:0px ;"><a href="../index.php">INICIO</a></li>
          <li class="highMenu"><a href="#">CONOCENOS<span class="uve">v</span></a>
            <ul class="submenu">
              <li  class="Lisubmenu" ><a href="Conocenos/Monumento.php">MONUMENTOS</a></li>
              <li class="Lisubmenu"><a href="Conocenos/Patrones.php">PATRONES</a></li>
              <li class="Lisubmenu"><a href="Conocenos/Piscina.php">PISCINA MUNICIPAL </a></li>
              <li class="Lisubmenu"><a href="Conocenos/Gastronomia.php">GASTRONOMIA</a></li>
              <li class="Lisubmenu"><a href="Conocenos/ZonasComunes.php">ZONAS COMUNES</a></li>
            </ul>
    </li>

    <li class="highMenu"><a href="#">SERVICIOS<span class="uve">v</span></a>
      <ul class="submenu">
        <li  class="Lisubmenu" ><a href="Servicios/Plenos.php">PLENOS</a></li>
        <li class="Lisubmenu"><a href="Servicios/Empleo.php">EMPLEO</a></li>
        <li class="Lisubmenu"><a href="Servicios/Descarga_Formularios.php">DESCARGA DOCUMENTOS </a></li>

      </ul>
</li>


    <li><a href="Noticias.php">NOTICIAS</a></li>
    <li><a href="Contacta.php">CONTACTA</a></li>
    </ul>

  
      </header>

<div class="contenedorContacta">

<div class="izqContacta">

  <h2>DONDE NOS ENCONTRAMOS</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2760.4312445462497!2d-4.810646398977703!3d40.051819375804186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4010acc9457835%3A0xa7f158d3109fffc!2sAyuntamiento-Casa%20del%20M%C3%A9dico!5e0!3m2!1ses!2ses!4v1657876739055!5m2!1ses!2ses" 
  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<div class="DerContacta">
<h2>
  ENVIANOS UNA QUEJA,DUDA O SUGERENCIA 
</h2>
<br>
<form action="" method="get">
  <label for="nombre">NOMBRE Y APELLIDOS</label>
  <input type="text" id="nombre">
  <label for="telefono">TELEFONO</label>
  <input type="tel" id="telefono">

  <div>
    <input type="checkbox" name="" id="">
  
    <label for="">He leido y acepto los   <a href="javascript:abrirModal()"> terminos y condiciones</a></label>
  </div> 


    <!-- <button class="bRules">RULES</button> -->



  <label for="">COMENTARIO</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
  <input type="submit" id="botonContacta" value="Enviar">
  



  
</form>
</div>


</div>


<div id="myModal" class="modal">
  <div class="modal-contenedor">
      <div class="arriba"><p><h2> AVISO LEGAL</h2></p>
        <p> AYUNTAMIENTO CERVERA DE LOS MONTES</p>
      </div>
      <div class="contenido">
        <p>

         </p> 
       
        <h4>  Política de privacidad y protección de datos</h4>
       
          AYUNTAMIENTO CERVERA DE LOS MONTES es Responsable de la recogida de datos de este sitio web y será el encargado del tratamiento de los mismos. En virtud de lo dispuesto en el Reglamento General de Protección de Datos (RGPD), Reglamento UE 2016/679, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de los mismos, se informa al USUARIO que todos los datos que proporcione serán incorporados a un fichero, creado y mantenido bajo la responsabilidad de AYUNTAMIENTO CERVERA DE LOS MONTES con el fin de gestionar el envío de la información que soliciten, facilitar al interesado ofertas de productos y servicios de su interés y mejorar su experiencia de usuario, pudiendo elaborarse, de ser necesario, un perfil comercial, en base a la información facilitada. No se tomarán decisiones automatizadas en base a dicho perfil. Los datos personales proporcionados se conservarán mientras se mantenga la relación mercantil, en su caso, y no se solicite su supresión por el interesado.
        </p>
        <p>
          Para ello, AYUNTAMIENTO CERVERA DE LOS MONTES solicitará el consentimiento del interesado a través del formulario de recogida de datos para el tratamiento de los mismos y la oferta prospectiva de productos y servicios, estando el USUARIO legitimado para retirar dicho consentimiento en cualquier momento, así como a ejercer sus derechos de acceso, rectificación, portabilidad y supresión de sus datos, y a presentar una reclamación ante la autoridad de control , si considera que el tratamiento no se ajusta a la normativa vigente.
        </p>
        <p>
          Los contenidos de la página web están dirigidos a personas mayores de edad, AYUNTAMIENTO CERVERA DE LOS MONTES no pretende obtener datos de personas menores de edad, y cuando tenga conocimiento de que existen en su fichero datos de carácter personal de un menor, procederá de inmediato a cancelar dichos datos.
        </p>
        <p>
        <h4> Legislación aplicable y jurisdicción</h4> 
        </p> 
        <p>
          La relación con el USUARIO se regirá por la normativa española vigente y cualquier controversia se someterá a los Juzgado y tribunales de la ciudad de Madrid salvo que la legislación aplicable determine de forma imperativa otro fuero o legislación distinta.</p>
        </p>

        </div>        
          <span class="close" onclick="cerrarModal()">CERRAR X</span></div>
      <div id="Rules"></div>
  </div>
</div>
<?php
    include_once("../../footer.php")
?>


    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../js/js.js"></script>
</body>

</html>