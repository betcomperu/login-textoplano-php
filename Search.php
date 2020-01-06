<!--
    Creado     : Enero 01, 2020 19:30:27 PM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->


 <?php
        // put your code here
        session_start();
        
        include 'src/Header.php';
        include 'src/Mainmenu.php';
 
?>

<form method="post" action="Search_full_result.php">
    <fieldset>
    <legend>Busqueda</legend>
    <p><label for="name">Nombre:</label> <input type="text" name="name" id="name" required /></p>
    <p class="center"><input type="submit" value="Buscar" class="center" /></p>
    </fieldset>
    </form>

<?php
        // put your code here
        include 'src/Footer.php';
?>
