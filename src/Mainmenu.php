<!--
    Creado     : Dec 31, 2019, 12:54:27 AM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<nav>
    <ul id="main_menu">
        <li><a href="Register.php" title="Registro nuevo usuario">Registro</a></li>
        <li><a href="Search.php" title="Lista de usuarios">Busqueda</a></li>
        <li><a href="login.php" title="Login area privada">Login</a></li>
        <?php
        
            if((isset($_SESSION['login'])) &&  ($_SESSION['login'] == "OK")   )
            {//1er if
                
                echo '<li><a href="Private.php" title="Area privada">Area Privada</a></li>';
                echo '<li style="padding-left: 40px">' . $_SESSION['email']. '</li>' ;
            }//fin del 1er if
              
        ?>
        
    </ul>  
    
    
</nav>
