<!--
    Creado     : Enero 01, 2020 06:54:27 PM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<?php

   session_start();
   if(session_destroy())
   {
     header("Location: login.php");
   }

?>