<?php
function BaseDatos(){
   if(!$conexion= mysqli_connect('localhost','root','','programa6h')){
      $errores[]="No fue posible conectar con la BD";
    }
    if($conexion){ return $conexion; }else{ return false; } exit();
}

?>
