<?php

include("conexion.php");
$con=conectar();

$idmecanico=$_POST['idmecanico']; 
$nombres=$_POST['nombres']; 
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion']; 
$telefono=$_POST['telefono']; 
$correo=$_POST['correo']; 
$categoria=$_POST['categoria']; 


$sql="UPDATE mecanicos SET  nombres='$nombres',apellidos='$apellidos',direccion='$direccion', telefono='$telefono', correo='$correo',categoria='$categoria' WHERE idmecanico='$idmecanico'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mecanicos.php"); 
    }
?>