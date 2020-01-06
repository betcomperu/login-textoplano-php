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
        //Para acceder al objeto que guardara en el archivo de texto
        //los datos del formulario
        include "modelo/Archivo.php";
       
        //Al llegar aqui se tiene la certeza que los valores de los compos del 
        //formulario son validos. Se procede a asignar a las variables
        
        $name       = $_POST['name'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $password1  = $_POST['password1'];
        
        //Converimos a mayusculas nobre y apellidos
        
        $name = strtoupper($name);
        $lastname = strtoupper($lastname);
        
        //creación del objeto archivo
        $archivo = new Archivo();
        
        include "src/Header.php";
        include "src/Mainmenu.php";
        
        if(!$archivo->existeEmail($email))
        {//1er if
            //si no hubo uin error se ingresa aqui
            $archivo->agregaRegistro($name, $lastname, $email, $password1);
            
            /*
            echo '<p>'. $archivo->getEstatus() .'</p>';
            echo '<br>';
            */
            echo '<p>Los datos se guardaron exitosamente</p>';
            echo '<br>';
            echo '<p><a href="index.php">Inicio</a></p>';
        }//fin del 1er if
        else
        {//else del 1er if
            //si hay una linea del archivo con un email igual alque se 
            //quiere ingresar se notifica
            
            /*echo '<p>Nombre: '.$name . '</p>';
            echo '<br>';
            echo '<p>Apellido: '.$lastname . '</p>';
            echo '<br>';
            echo '<p>Email: '.$email . '</p>';
            echo '<br>';
            echo '<p>Password: '.$password1 . '</p>';
            echo '<br>';
            */
            echo '<p>Ya existe un usuario que registro el email proporcionado. Usar otro Email</p>';
            echo '<br>';
            echo '<p><a href="Register.php">Registrate de nuevo</a></p>';
            
            
        }//fin del else del 1er if
   ?>
        
        
  <?php     
        include "src/Footer.php";
  ?>

