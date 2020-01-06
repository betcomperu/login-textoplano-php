<!--
    Creado     : Dec 31, 2019, 12:54:27 AM
    Author     : Ing. René Velasco Rivera
               : Ing. Alberto Walter Chavez Rodriguez
    Materia    : Computación en el Servidor WEB
    Grupo      : 4
    Maestro    : Mtro. Israel Sandoval Grajeda
-->

<?php

class Archivo 
{//clase Archivo
    //put your code here
    
    private $ruta = null;
    private $archivo = null;
    private $modo = null;
    private $Estatus = null;
    
    const SEPARADOR = ",";
    const EOL = "\r\n";
    
    //Constructor

    function Archivo()
    {//inicio constructor
        
        $ruta = "datos.txt";
        
        //revisa si existe el archvo, si no existe lo crea
        if(!file_exists($ruta))
        {//1er if
          $this->archivo = fopen($ruta, "a+");
          fclose($this->archivo);
        }//fin del 1er if
    }//fin del constructor    
   
    //Destructor
    
   
    function _destruct()
    {//inicio del desrtructor
        
        //cierra el archivo
        //fclose($ruta);
    }//fin del destructor
    
    //====================================================================
    //NOMBRE FUNCION: existeEmail
    //DESCRIPCION: recorre todos los registros del archivo y verifica
    //             si el email ya existe
    //REGRESA:     True si el email ya existe
    //             False si el emal no existe             
    //====================================================================
    
    public function existeEmail($Email)
    {//iniciio existeEmail
      $ruta = "datos.txt";
      $existeEmail = false;
      $Datos = "";
      
      /*
      echo 'Existe Archivo = ' . file_exists($ruta);
      echo '<br>';
      */
      
      if(file_exists($ruta))
       {//1er idf
        //obtner cada linea del archivo en un arrelo
        $alineas = file($ruta);
        foreach ($alineas as $linea)
        {//1er foreach ()
          //La linea, crea un arreglo de los datos que estan separados
          //por las comas
        
          $Datos = explode(",", $linea);

          if($Datos[2] == $Email)
          {//2do if
              $existeEmail = true;
          }//fin del 2do if
          else
          {//else del 2do if
              
          }//fin del else del 2do if
          
        }//fin del 1er foreach
        
       }//fin del 11er if   
       else 
       {//inicio del else del 1er if
         $this->Estatus = "Error: No Existe el archivo. ExisteEmail()";
       } //fini del else del 1er if
        
        return $existeEmail;
    }//fin de eexisteEmail
    
    //====================================================================
    //NOMBRE FUNCION: existeEmail
    //DESCRIPCION: recorre todos los registros del archivo y verifica
    //             si el email ya existe
    //REGRESA:     True si el email ya existe
    //             False si el emal no existe             
    //====================================================================
    
    public function existeEmailPass($Email, $Pass)
    {//iniciio existeEmailPass
      $ruta = "datos.txt";
      $existeEmail = false;
      $Datos = "";
      $PassSHA1 = sha1($Pass);
      $arrayDatos = array();
      /*
      echo 'Existe Archivo = ' . file_exists($ruta);
      echo '<br>';
      */
      
      if(file_exists($ruta))
       {//1er idf
        //obtner cada linea del archivo en un arrelo
        $alineas = file($ruta);
        foreach ($alineas as $linea)
        {//1er foreach ()
          //La linea, crea un arreglo de los datos que estan separados
          //por las comas
        
          $Datos = explode(",", $linea);
          
                  
          if(($Datos[2] == $Email) && (strcmp(trim($Datos[3]),$PassSHA1)== 0))
          {//2do if
              $arrayDatos = array($Datos[0], $Datos[1]);
              $existeEmail = true;

              break;//sale del foreach
          }//fin del 2do if
          else
          {//else del 2do if
              $arrayDatos = array();
          }//fin del else del 2do if
          
        }//fin del 1er foreach
        
       }//fin del 11er if   
       else 
       {//inicio del else del 1er if
         $this->Estatus = "Error: No Existe el archivo. ExisteEmail()";
       } //fini del else del 1er if
        
        return $arrayDatos;
    }//fin de eexisteEmailPass    
    
        //====================================================================
    //NOMBRE FUNCION: existeEmail
    //DESCRIPCION: recorre todos los registros del archivo y verifica
    //             si el email ya existe
    //REGRESA:     True si el email ya existe
    //             False si el emal no existe             
    //====================================================================
    
    public function existeNombre($Nombre)
    {//iniciio existeNombre
      $ruta = "datos.txt";
      $existeEmail = false;
      $Datos = "";

      $arrayDatos = array();
      
      $Nombre = strtoupper(trim($Nombre));
      
     
      if(file_exists($ruta))
       {//1er idf
        //obtner cada linea del archivo en un arrelo
        $alineas = file($ruta);
        foreach ($alineas as $linea)
        {//1er foreach ()
          //La linea, crea un arreglo de los datos que estan separados
          //por las comas
        
          $Datos = explode(",", $linea);
         

          //if((trim($Datos[0]) == $Nombre) )
          if(strcmp($Datos[0], $Nombre) == 0)
          {//2do if
              
               
              array_push($arrayDatos, $Datos[0]. "," . $Datos[1]);

              //break;//sale del foreach
          }//fin del 2do if
          else
          {//else del 2do if
              //-$arrayDatos = array();
          }//fin del else del 2do if
          
        }//fin del 1er foreach
        
       }//fin del 11er if   
       else 
       {//inicio del else del 1er if
         $this->Estatus = "Error: No Existe el archivo. ExisteEmail()";
       } //fini del else del 1er if
       
       //echo empty($arrayDatos);
        
        return $arrayDatos;
    }//fin de eexisteNombre    
    
    
    //====================================================================
    //NOMBRE FUNCION: agregaRegistro
    //DESCRIPCION: agrega el registro de datos del formulario al archivo
    //REGRESA:     True si el email ya existe
    //             False si el emal no existe             
    //====================================================================
    
     public function agregaRegistro($Nombre, $Apellido, $Email, $Password)
     {//inicio agregaRegistro
         //$directorio = opendir("./modelo/");
         $ruta = "datos.txt";
         $sSHA1 = sha1($Password);
         $linea = trim($Nombre) . "," . trim($Apellido) . "," . trim($Email) . "," . trim($sSHA1) . PHP_EOL;
      
 
         //valida que el archivo exista
         if(file_exists($ruta))
         {//1er if
             
             //abre el archivo en modo escritura. Colocando elpunero al  final
             //del mismo
              $this->archivo = fopen($ruta, "a");
              fwrite($this->archivo, $linea);
              fclose($this->archivo);
              
              $this->Estatus = "Exito al agregar el registro al archivo";
              
         }//fin del 1er if
         else
         {//else del 1er if
             $this->Estatus = "Error: No Existe el archivo. agregarRegistro()";
         }//fin del else del 1er if
         
     }//fin de agregaRegistro
     
     public function getEstatus()
     {//getEstatus
         return  $this->Estatus;
     }//fin de getEstatus
    
    
}//fin de la clase archivo
