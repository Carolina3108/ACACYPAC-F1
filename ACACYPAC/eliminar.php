<?php 
include('conexion.php');

$id=$_GET['id'];
$consulta = "Delete from asociado where id=".$id;

$resultado=$con->query($consulta);

header("Location:index.php");

?>
