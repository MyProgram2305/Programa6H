<?php
   include('funciones.php');
   $conexion=BaseDatos();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Consultar Alumno</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/dashboard.rtl.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="table-responsive">
        <table class="table table-striped table-md">
        <thead>
            <tr>
            <th>Numero de Control</th> 
              <th>CURP</th>
              <th>IdAlumno</th> 
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Grado</th>
              <th>Grupo</th>
          </thead>
          <tbody>
          <?php 
            $sql="SELECT * FROM `alumnos`";
            $result=mysqli_query($conexion,$sql);
					  while ($mostrar=mysqli_fetch_array($result)) {
              ?>
          <tr>
              <td><?php echo $mostrar['NumeroDeControl']?></td>
              <td><?php echo $mostrar['CURP']?></td>
              <td><?php echo $mostrar['IdAlumno']?></td>
              <td><?php echo $mostrar['Nombre']?></td>
              <td><?php echo $mostrar['ApellidoPaterno']?></td>
              <td><?php echo $mostrar['ApellidoMaterno']?></td>
              <td><?php echo $mostrar['Grado']?></td>
              <td><?php echo $mostrar['Grupo']?></td>
             <?php 	
                  }
              ?>
               </tr>
            </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>