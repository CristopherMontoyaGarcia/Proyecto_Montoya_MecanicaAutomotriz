<?php

include("conexion.php");
$con=conectar();

$idmatricula=$_POST['idmatricula']; 
$modelo=$_POST['modelo']; 
$color=$_POST['color'];
$fecha_entre=$_POST['fecha_entre']; 
$hora_entre=$_POST['hora_entre']; 
$propietario=$_POST['propietario']; 
$cliente=$_POST['cliente']; 


$sql="UPDATE vehiculo SET  modelo='$modelo',color='$color',fecha_entre='$fecha_entre', hora_entre='$hora_entre', propietario='$propietario',cliente='$cliente' WHERE idmatricula='$idmatricula'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vehiculo.php"); 
    }
?>