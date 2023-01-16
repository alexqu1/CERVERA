<?php
   include_once '../../includes/AntiUrlAdmin.php';
     
        INCLUDE("../../conexion.php");
        
$con=conectar();
$sql="SELECT * FROM descarga_documentos order by id desc" ;

$query=mysqli_query($con,$sql);

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

    <div class="contenedorCentral">

        <div id="contenedor">
            <header id="header">
            <?php
 include("../../headerAdmin.php")
?> 
      
            </header>

            <div id="contenedorPleno">
                <h2>DESCARGA FORMULARIO</h2>

                <form action="../Crud/Descarga_Formulario/AñadirDescarga_Formulario.php" method="post" enctype="multipart/form-data"
                    style="width: 200px;" >

                    <input type="text" name="Nombre" id="" placeholder="Titulo">
                    <input type="text" name="Descripcion" id="" placeholder="Descripcion">
                    <input type="file" name="Archivos" id="">
                    <input type="submit" value="Añadir">
                </form>

                <?php

while($row = mysqli_fetch_array($query)){
     $arrayDatos[] = $row;
    echo'
    <div class="cajaPleno">
    <div class="tituloDescargaFormulario">
      <p><h4>'.  $row["Nombre"] .' </h4></p>
      <p>'.  $row["Descripcion"] .'</p>
    </div>

    <a href="../Crud/Descarga_Formulario/ModificarDescarga_Formulario.php?id=' .$row['id']  . ' " rel="noopener noreferrer" class="BotonEditar" >Modificar</a>
    <a href="../Crud/Descarga_Formulario/BorrarDescarga_Formulario.php?id=' .$row['id']  . ' " rel="noopener noreferrer"  class="BotonEliminar">Eliminar</a>

    <div class="pdfCajaPleno">
      <a href="http://localhost/CERVERA/img/Files/' .  $row["Archivos"] . ' " target="_blank" rel="noopener noreferrer">
        <img src="http://localhost/CERVERA/img/iconos/pdf.png" alt="" srcset=""></a>
    </div>
  
   </div>
    ';
  }
?>
            </div>

        </div>

        <?php
    include_once("../../../footer.php")
?>
    </div>
    <!-- fin contendor -->
    </div>
    <!-- fin contendor central -->
    <script src="../../js/js.js"></script>
</body>

</html>