<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tipo_rep WHERE idrepuesto='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                
                                <input type="text" class="form-control mb-3" name="idrepuesto" placeholder="Codigo del Repuesto" value="<?php echo $row['idrepuesto']  ?>">
                                <input type="text" class="form-control mb-3" name="repuesto" placeholder="Repuesto" value="<?php echo $row['repuesto']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>"> 
                                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>"> 
                                <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['marca']  ?>"> 
                                <input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor" value="<?php echo $row['proveedor']  ?>">
                                <input type="text" class="form-control mb-3" name="existencias" placeholder="Numero de Existencias" value="<?php echo $row['existencias']  ?>"> 
                                   
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>