<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM tipo_rep";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Repuestos</title> 
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-3">
                <h1>Repuestos</h1>
               <form action="insertar.php" method="POST">
               
                                    <input type="text" class="form-control mb-3" name="idrepuesto" placeholder="Codigo del Repuesto">     
                                    <input type="text" class="form-control mb-3" name="repuesto" placeholder="Repuesto">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor">
                                    <input type="text" class="form-control mb-3" name="existencias" placeholder="Existencias">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Montoya_MecanicaAutomotriz/index.php" class="btn btn-primary">Inicio</a></li>
               </form>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th> 
                                        <th>Repuesto</th> 
                                        <th>Descripcion</th> 
                                        <th>Precio</th> 
                                        <th>Marca</th>
                                        <th>Proveedor</th> 
                                        <th>Existencias</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idrepuesto']?></th> 
                                                <th><?php  echo $row['repuesto']?></th> 
                                                <th><?php  echo $row['descripcion']?></th> 
                                                <th><?php  echo $row['precio']?></th> 
                                                <th><?php  echo $row['marca']?></th> 
                                                <th><?php  echo $row['proveedor']?></th>
                                                <th><?php  echo $row['existencias']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idrepuesto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idrepuesto'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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