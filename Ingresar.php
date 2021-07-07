<?php
   include('funciones.php');
   $conexion=BaseDatos();
   $errores=0;
    
    if(empty($_POST['NumeroControl'])){ 
        $errores=$errores+1; 
        $NumeroControl=NULL;
    }else{
        $NumeroControl=$_REQUEST['NumeroControl'];
    }
    if(empty($_POST['CURP'])){ 
        $errores=$errores+1; 
        $CURP=NULL;
    }else{
        $CURP=$_REQUEST['CURP'];
    }
    if ($errores==0) {
      $sql="SELECT `NumeroDeControl`, `CURP`, `Nombre` FROM `alumnos` WHERE `NumeroDeControl`='$NumeroControl' AND `CURP`='$CURP';";
      $result=mysqli_query($conexion,$sql);
          if($mostrar=mysqli_fetch_array($result)){
            echo $mostrar['Nombre'];
          }else{
          echo 'Acceso Denegado';
      }
    }
?>