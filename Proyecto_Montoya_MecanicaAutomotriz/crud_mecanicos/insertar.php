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

$sql="INSERT INTO mecanicos VALUES('$idmecanico','$nombres','$apellidos','$direccion','$telefono','$correo','$categoria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: mecanicos.php");
}else {
    echo "hay un problema";
}
?>

