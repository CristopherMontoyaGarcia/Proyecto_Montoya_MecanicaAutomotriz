<?php

include("conexion.php");
$con=conectar();

$idmecanico=$_GET['id'];

$sql="DELETE FROM mecanicos WHERE idmecanico='$idmecanico'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mecanicos.php"); 
    }
?>