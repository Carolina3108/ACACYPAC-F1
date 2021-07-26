<?php 
include('conexion.php');

$id=$_GET['id'];
$consulta = "Delete from asociado where id_asociado=".$id;

$resultado=$con->query($consulta);

header("Location:listado.php");

?>
