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

$sql="INSERT INTO vehiculo VALUES('$idmatricula','$modelo','$color','$fecha_entre','$hora_entre','$propietario','$cliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: vehiculo.php");
}else {
    echo "hay un problema";
}
?>

