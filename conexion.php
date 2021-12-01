<?php
$server="localhost";
$user="root";
$pass="";
$db="cbtis253";

$conexion=new mysqli($server,$user,$pass,$db);

if ($conexion->connect_errno) {
	die("la conexión ha fallado.$conexion->connect_errno");
}
$sql="INSERT INTO alumno VALUES('".$_POST['num_control']."','".$_POST['a_paterno']."','".$_POST['a_materno']."','".$_POST['nombre']."','".$_POST['Tel_movil']."','".$_POST['Tel_tutor']."','".$_POST['Carrera']."','".$_POST['Turno']."','".$_POST['Clubs']."')";
$resultado=mysqli_query($conexion,$sql)or die ('Error en el query database'); 
mysqli_close($conexion);
 
?>