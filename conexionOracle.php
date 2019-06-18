<?php
class conexion{
    
public function conectar(){
   $conexion = oci_connect("root", "root", "localhost/xe"); 
 
if (!$conexion) {    
  $m = oci_error();    
  echo $m['message'], "n";    
  exit; 
} else {    
  echo "Conexión con éxito a Oracle!"; } 

   // crear conexion con oracle


}


}

