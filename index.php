<!--
    Creado     : Dec 31, 2019, 12:54:27 AM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<?php
    session_start();
    include "src/Header.php";
    include "src/Mainmenu.php";
?>
<h2>Desarrollo web avanzado!!!</h2>

<p>
    Puedes comenzar a <a href="Register.php"> registrarte</a> como un usuario nuevo.
    Una vez que tu registro tenga exito, puedes <a href="Search.php"> buscar</a> a otros usuarios.
    Finalmente, puedes <a href="login.php"> logearte</a> para acceder a tu area privada
    
</p>

<?php

    include "src/Footer.php";

?>