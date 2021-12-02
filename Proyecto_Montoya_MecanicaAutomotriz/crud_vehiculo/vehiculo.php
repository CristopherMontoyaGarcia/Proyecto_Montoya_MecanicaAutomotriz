<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM vehiculo";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Vehiculo</title> 
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-3">
                <h1>Vehiculos</h1>
               <form action="insertar.php" method="POST">
               
                                    <input type="text" class="form-control mb-3" name="idmatricula" placeholder="Matricula">     
                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                                    <input type="text" class="form-control mb-3" name="fecha_entre" placeholder="Fecha de Entrega">
                                    <input type="text" class="form-control mb-3" name="hora_entre" placeholder="Fora de Entrega">
                                    <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario">
                                    <input type="text" class="form-control mb-3" name="cliente" placeholder="Cliente">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Montoya_MecanicaAutomotriz/index.php" class="btn btn-primary">Inicio</a></li>
               </form>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Matricula</th> 
                                        <th>Modelo</th> 
                                        <th>Color</th> 
                                        <th>Fecha de Entrega</th> 
                                        <th>Hora de Entrega</th>
                                        <th>Propietario</th> 
                                        <th>Cliente</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idmatricula']?></th> 
                                                <th><?php  echo $row['modelo']?></th> 
                                                <th><?php  echo $row['color']?></th> 
                                                <th><?php  echo $row['fecha_entre']?></th> 
                                                <th><?php  echo $row['hora_entre']?></th> 
                                                <th><?php  echo $row['propietario']?></th>
                                                <th><?php  echo $row['cliente']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idmatricula'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idmatricula'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
               </table>
               </div>
          </div>
     </div>
     
</body>
</html>