<?php

include("conexion.php");
$con=conectar();

$idrepuesto=$_GET['id'];

$sql="DELETE FROM tipo_rep WHERE idrepuesto='$idrepuesto'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tipo_rep.php"); 
    }
?>