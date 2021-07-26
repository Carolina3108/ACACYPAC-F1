<?php 
include('conexion.php');

	//Recibiendo los datos del formulario
	//utf8_decode() permite guardar tildes y ñ correctamente
	//utf8_encode() lo inverso del decode
$id= isset($_POST['id'])?$_POST['id']:0;

$dui=utf8_decode($_POST['dui']);
$nit=utf8_decode($_POST['nit']);
$nombre=utf8_decode($_POST['nombre']);
$direccion=utf8_decode($_POST['direccion']);
$telefono=utf8_decode($_POST['telefono']);
$edad=utf8_decode($_POST['edad']);
$profesion=utf8_decode($_POST['profesion']);
$agencia=utf8_decode($_POST['agencia']);
$fecha=utf8_decode($_POST['fecha']);
$estado=utf8_decode($_POST['cboEstado']);


if ($id==0) {

	$sql="Insert into asociado(dui,nit,nombre,direccion,telefono,edad,profesion,agencia,fecha,estado) values(?,?,?,?,?,?,?,?,?,?)";

	$stmt= $con->prepare($sql);

	$stmt->bind_param("sssssissss",$dui,$nit,$nombre,$direccion,$telefono,$edad,$profesion,$agencia,$fecha,$estado);
	$stmt->execute();

}else{
	$sql="Update asociado set 
            dui=?,
            nit=?,
			nombre=?,
            direccion=?,
            telefono=?,
			edad=?,
			profesion=?,
            agencia=?,
			fecha=?,
			estado=?
			where id_asociado=?";
	$stmt= $con->prepare($sql);

	$stmt->bind_param("sssssissssi",$dui,$nit,$nombre,$direccion,$telefono,$edad,$profesion,$agencia,$fecha,$estado,$id);
	$stmt->execute();
}

header("Location:listado.php");

?>