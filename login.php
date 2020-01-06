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
   error_reporting(0);
   
   include "src/Header.php";
   include "src/Mainmenu.php";
     
?>

<span style="font-size: 13.3333339691162px; line-height: 20.0063056945801px;"></span>

<form method="post" action="login_action.php">
    <fieldset>
        <legend>Login</legend>
        <p><label for="email">Email:</label>
           <input type="email" name="email" id="email" required />
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" title="La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter no alfanumérico." required/>
        </p>
        <p class="center">
            <input value="Login" type="submit" class="center"/>
        </p>
    </fieldset>
</form>

<?php
   
   include "src/Footer.php";
?>