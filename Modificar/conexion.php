<?php


        function conectar(){

                $user = "root";
                $pass = "";
                $host = "localhost";
                $bd = "cervera";
        
        
                $con= mysqli_connect($host, $user, $pass) or die("No se ha podido conectar con el servidor");
             
        
                mysqli_select_db($con,$bd);
        
                return $con;
        


        }





?>