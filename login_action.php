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
        //Para acceder al objeto que guardara en el archivo de texto
        //los datos del formulario
        include "modelo/Archivo.php";
       
        //Al llegar aqui se tiene la certeza que los valores de los compos del 
        //formulario son validos. Se procede a asignar a las variables
        $email      = $_POST['email'];
        $password1  = $_POST['password'];
        
        //creación del objeto archivo
        $archivo = new Archivo();
        
        include "src/Header.php";
        include "src/Mainmenu.php";
        
        $arrayDatos = $archivo->existeEmailPass($email, $password1);
        
        /*
        echo '<p>Email'. $email .'</p>';
        echo '<br>';        

        echo '<p>Pass'. $password1 .'</p>';
        echo '<br>'; 
        
        echo '<p>Elementos: '.count($arrayDatos) . '</p>';
        echo '<br>';
        */
        if(count($arrayDatos) > 0)
        {//1er if
            //si el arreglo tiene elementos, quiere decir
            //que el email y pass estan almacenados en el archivo
            //y estan asociados a una persona
                        
            /*
            echo '<p>'. $archivo->getEstatus() .'</p>';
            echo '<br>';
            */
            /*
            echo '<p>Bienvenido: ' . $arrayDatos[0] . " " . $arrayDatos[1] . '</p>';
            echo '<br>';
            echo '<p><a href="Exit.php">Salir</a></p>';
            */
            
            $_SESSION['login'] = "OK";
            $_SESSION['email'] = $email;
            $_SESSION['usuario'] = $arrayDatos[0] . " " . $arrayDatos[1];
            header('Location: Private.php');
            
        }//fin del 1er if
        else
        {//else del 1er if
            //si hay una linea del archivo con un email igual alque se 
            //quiere ingresar se notifica
            
            /*
            echo '<p>Nombre: '.$name . '</p>';
            echo '<br>';
            echo '<p>Apellido: '.$lastname . '</p>';
            echo '<br>';
            echo '<p>Email: '.$email . '</p>';
            echo '<br>';
            echo '<p>Password: '.$password1 . '</p>';
            echo '<br>';
            */
            echo '<p>Credenciales incorectas!!!!</p>';
            echo '<br>';
            echo '<p><a href="Exit.php">Salir</a></p>';
            
            
        }//fin del else del 1er if        
        

?>

  <?php     
        include "src/Footer.php";
  ?>
