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
    if(empty($_POST['Nombre'])){ 
        $errores=$errores+1; 
        $Nombre=NULL;
    }else{
        $Nombre=$_REQUEST['Nombre'];
    }
    if(empty($_POST['ApellidoPaterno'])){ 
        $errores=$errores+1; 
        $ApellidoPaterno=NULL;
    }else{
        $ApellidoPaterno=$_REQUEST['ApellidoPaterno'];
    }
    if(empty($_POST['ApellidoMaterno'])){ 
        $errores=$errores+1; 
        $ApellidoMaterno=NULL;
    }else{
        $ApellidoMaterno=$_REQUEST['ApellidoMaterno'];
    }
    if(empty($_POST['Grado'])){ 
        $errores=$errores+1; 
        $Grado=NULL;
    }else{
        $Grado=$_REQUEST['Grado'];
    }
    if(empty($_POST['Grupo'])){ 
        $errores=$errores+1; 
        $Grupo=NULL;
    }else{
        $Grupo=$_REQUEST['Grupo'];
    }
    if ($errores==0) {
        $sql = "INSERT INTO `alumnos`(`NumeroDeControl`, `CURP`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Grado`, `Grupo`) VALUES ('$NumeroControl','$CURP','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Grado ','$Grupo')";
		if(mysqli_query($conexion,$sql)){ // Si los datos son guardados.
            echo 'Guardado correctamente';
		}else{
		    echo 'Algo salio mal intentelo despues';
		}
    }
    ?>