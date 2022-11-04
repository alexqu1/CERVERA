<?php

include_once '../includes/AntiUrlAdmin.php';



include("../conexion.php");


$con = conectar();
$sql = "SELECT * FROM alcalde";

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
<div class="cerrarSesion" >
  <a href="http://localhost/CERVERA/Modificar/includes/logout.php" class="cerrarSesion" >  
  <img src="http://localhost/CERVERA/img/iconos/CerrarUsuario.png" alt="" srcset="" />
  CERRAR SESION 
  </a>
  </div> 
  <a href="#header" id="ancla"> <img id="imgAncla" src="http://localhost/CERVERA/img/iconos/flechaarriba.png" alt="" ></a>
  <div class="contenedorCentral">

    <div id="contenedor">
      <header id="header">
  
<?php
 include("../headerAdmin.php")
?>    
        </header>

   

      <div id="texto1inicio">

        <img src="http://localhost/CERVERA/img/logo.png" alt="" srcset="" />
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

        <form enctype="multipart/form-data" action="Crud/Alcalde/AñadirAlcalde.php"  method="POST" style="width: 200px;">

<input type="text" name="Nombre" id="" placeholder="Titulo">
<textarea type="text" name="Descripcion" id="" placeholder="Descripcion"></textarea>
<input name="Archivos" type="file" name="Archivos" id="">

<input type="submit" value="Añadir">
</form>




        
<?php



while ($row = mysqli_fetch_array($query)) {
  $arrayDatos[] = $row;
  echo '

  <h2>' .  $row["Nombre"] . '</h2>
  <p>
   
  ' .  $row["Descripcion"] . '

  </p>


  </div>

  <div class="derInicio2"><img src=http://localhost/CERVERA/img/Files/'.  $row["Archivos"] .' alt="" srcset=""></div>
  </div>

';
}

include_once("../../footer.php")
?>




    </div>
    <!-- fin contendor -->
  </div>
  <!-- fin contendor central -->
  <script src="../../js/js.js"></script>
</body>

</html>