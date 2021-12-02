<?php

include("conexion.php");
$con=conectar();

$idcliente=$_POST['idcliente']; 
$nombres=$_POST['nombres']; 
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono']; 
$correo=$_POST['correo']; 
$direccion=$_POST['direccion']; 
$num_licencia=$_POST['num_licencia']; 


$sql="UPDATE cliente SET  nombres='$nombres',apellidos='$apellidos',telefono='$telefono', correo='$correo', direccion='$direccion',num_licencia='$num_licencia' WHERE idcliente='$idcliente'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php"); 
    }
?>