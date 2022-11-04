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
    <?php
 include("../headerAdmin.php")
?>  

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