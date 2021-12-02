<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM cliente";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Cliente</title> 
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-3">
                <h1>Clientes</h1>
               <form action="insertar.php" method="POST">
               
                                    <input type="text" class="form-control mb-3" name="idcliente" placeholder="Codigo del Cliente">     
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="num_licencia" placeholder="Numero de Licencia">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Montoya_MecanicaAutomotriz/index.php" class="btn btn-primary">Inicio</a></li>
               </form>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th> 
                                        <th>Nombres</th> 
                                        <th>Apellidos</th> 
                                        <th>Telefono</th> 
                                        <th>Correo</th>
                                        <th>Direccion</th> 
                                        <th>N. Licencia</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idcliente']?></th> 
                                                <th><?php  echo $row['nombres']?></th> 
                                                <th><?php  echo $row['apellidos']?></th> 
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['num_licencia']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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