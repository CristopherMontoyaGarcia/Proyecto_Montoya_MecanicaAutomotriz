<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM vehiculo WHERE idmatricula='$id'";
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
                    
                                
                                <input type="text" class="form-control mb-3" name="idmatricula" placeholder="Matricula" value="<?php echo $row['idmatricula']  ?>">
                                <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo" value="<?php echo $row['modelo']  ?>">
                                <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?>"> 
                                <input type="text" class="form-control mb-3" name="fecha_entre" placeholder="Fecha de Entrega" value="<?php echo $row['fecha_entre']  ?>"> 
                                <input type="text" class="form-control mb-3" name="hora_entre" placeholder="Hora de Entrega" value="<?php echo $row['hora_entre']  ?>"> 
                                <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario" value="<?php echo $row['propietario']  ?>">
                                <input type="text" class="form-control mb-3" name="cliente" placeholder="Cliente" value="<?php echo $row['cliente']  ?>"> 
                                   
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>