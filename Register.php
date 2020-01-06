<!--
    Creado     : Dec 31, 2019, 14:21:27 PM
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

<script type="text/javascript">

  function comprobar()
  {//inicio funcion comprobar
      //Piemro hay que comprobar que el contenido en los campos de textto de los passwords
      //es igual
      
      var pass1 = document.formulario.password1;
      var pass2 = document.formulario.password2;
      
      //valida si el texto de los campós passwortd es igual
      
      if(pass1.value == pass2.value)
      {//1er if
          return true;
      }//fin del 1er if
      else
      {//else del 1er if
          alert("Las contraseñas no son iguales");
          return false;
      }//fin del else del 1er if
      
      
  }//fin funcion comprobar
    
</script>

<form method="post" action="Register_action.php" name="formulario" onsubmit="return comprobar()">
    <fieldset>
        <legend>Registro</legend>
        <p>
            <label for="name">Nombre:</label><input type="text" name="name" id="name" required="" />
            <br>
            <label for="lastname">Apellidos:</label><input type="text" name="lastname" id="lastname" required/>
            <br>
            <label for="email">E-mail:</label><input type="email" name="email" id="email" required/>
            <br>
            <label for="password1">Password:</label><input type="password" name="password1" id="password1" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" title="La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter no alfanumérico." required/>
            <br>
            <label for="password2">Confirma password:</label><input type="password" name="password2" id="password2"/>
            
        
        </p>
        
        <p class="center"><input value="Registro" type="submit" class="center"/></p>
        
    </fieldset>
    
</form>

<?php
 include "src/Footer.php";
?>
    
    
