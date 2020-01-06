<!--
    Creado     : Enero 01, 2020 19:40:27 PM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<?php
   if(!(isset($_SESSION['login'])) && ($_SESSION['login'] == "OK"))
   {//1er if
       header('Location: login.php');
       exit;
   }//fin del 1er if



?>