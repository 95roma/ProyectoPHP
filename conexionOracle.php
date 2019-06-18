<?php
class conexion{
    // crear conexion con oracle
public function conectar(){
   $conexion = oci_connect("root", "root", "localhost/xe"); 
 
if (!$conexion) {    
  $m = oci_error();    
  echo $m['message'], "n";    
  exit; 
} else {    
  echo "Conexión con éxito a Oracle!"; } 


}

}

