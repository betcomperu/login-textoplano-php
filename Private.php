<!--
    Creado     : Enero 01, 2020 07:00:27 PM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<?php

 session_start();
 error_reporting(0);
 include 'validate.php';
 include 'src/Header.php';
 include 'src/Mainmenu.php';

 $email = $_SESSION['email'];

 $Usuario = $_SESSION['usuario'];
 
 echo '<h2>BIENVENIDO ' . $Usuario .'</h2>';
  
?>

<p><a href="Exit.php">Salir</a></p>

<?php
   include 'src/Footer.php';
?>