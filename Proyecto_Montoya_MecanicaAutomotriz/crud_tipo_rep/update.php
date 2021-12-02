<?php

include("conexion.php");
$con=conectar();

$idrepuesto=$_POST['idrepuesto']; 
$repuesto=$_POST['repuesto']; 
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio']; 
$marca=$_POST['marca']; 
$proveedor=$_POST['proveedor']; 
$existencias=$_POST['existencias']; 


$sql="UPDATE tipo_rep SET  repuesto='$repuesto',descripcion='$descripcion',precio='$precio', marca='$marca', proveedor='$proveedor',existencias='$existencias' WHERE idrepuesto='$idrepuesto'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tipo_rep.php"); 
    }
?>