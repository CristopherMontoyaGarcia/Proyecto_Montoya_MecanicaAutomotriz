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

$sql="INSERT INTO tipo_rep VALUES('$idrepuesto','$repuesto','$descripcion','$precio','$marca','$proveedor','$existencias')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: tipo_rep.php");
}else {
    echo "hay un problema";
}
?>

