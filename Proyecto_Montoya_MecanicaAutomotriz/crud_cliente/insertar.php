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

$sql="INSERT INTO cliente VALUES('$idcliente','$nombres','$apellidos','$telefono','$correo','$direccion','$num_licencia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: cliente.php");
}else {
    echo "hay un problema";
}
?>

