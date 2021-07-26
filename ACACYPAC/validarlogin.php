<?php 
include('conexion.php');

$nombre = $_POST["username"];
$pass = $_POST["pwd"];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE nombre = '".$nombre."' and pwd = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    header("location: listado.php");
}
else if ($nr == 0) 
{
	echo "<script> alert('Error! Verifique su nombre de usuario y contraseña');window.location= 'index.php' </script>";
}
	
?>