<!--
    Creado     : Enero 01, 2020 19:35:27 PM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<?php

    session_start();
    
    include 'src/Header.php';
    include 'src/Mainmenu.php';
    
    include 'modelo/Archivo.php';
    
    echo '<fieldset><legend>Usuarios</legend>';
    
    $archivo = new Archivo();
    
     if(!isset($_POST['name']) || empty($_POST['name'])) 
         {//1er if     
            echo "<p>La busqueda de una cadena vacia no esta permitida</p>";   
         }//fin del 1er if
     else
     {//else del 1er if
         $nombre = $_POST['name'];
         
         $arrayDatos = $archivo->existeNombre($nombre);
         /*
         echo "<b>Count: </b> ". count($arrayDatos);
         echo '<br>';
         */
         //valuidar que haya cadenas que mostrar
         //en el arreglo
         if(!empty($arrayDatos))
         {//2do if
            //obtenr uno a uno los elementos del arereglo
             
            foreach ($arrayDatos as $linea)
            {//1er foreach
                //los elmentos tienen el formato
                //nombre,apellido
                $arrayLinea = explode(",", $linea);
                
                echo '<p>';
                  echo "<b>Nombre: </b> ". $arrayLinea[0];
                  echo '<br>';
                  echo "<b>Apellido: </b> ". $arrayLinea[1];
                  echo '<br>';                  
                echo '</p>';
                
            }//fin del 1er foreach
             
         }//fin del 2do if
         else
         {//else del 2do if
             echo '<p>Usuario no encontrado';
         }//fin del else del 2do if
         
     }//fin del else del 1er if

  echo '</fieldset>';
  include 'src/Footer.php';
  
?>
