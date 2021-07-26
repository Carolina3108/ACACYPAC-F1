<?php 
include('conexion.php');

$consulta = "Select * from asociado";

$resultado=$con->query($consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Listado de asociados</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
	



	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">ADMINISTRACION DE ASOCIADOS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExample03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="listado.php">Listado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="nuevo.php">Nuevo asociado</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="auditoria.php">Auditoria</a>
				</li>
			</div>
		</nav>


		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">

					
					<div class="card">
						<div class="card-header display-4">
							Listado de asociados registrados
						</div>
						<div class="card-body">
							<table class="table table-hover">
								<thead>
									<tr>
										
                                        <th>N° DUI</th>
										<th>N° NIT</th>
										<th>Nombre</th>
										<th>Direccion</th> 
										<th>N° Telefono</th>                    
										<th>Edad</th>  
										<th>Profesion</th>
										<th>Agencia</th>
										<th>Estado</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									
									<?php $datos=$resultado->fetch_all(); ?>
									
									<?php foreach ($datos as $key => $value): ?>
										<tr>
                                            <td><?php echo utf8_encode($value[1]) ?></td>
											<td><?php echo $value[2] ?></td>
											<td><?php echo $value[3] ?></td>
											<td><?php echo $value[4] ?></td>
											<td><?php echo $value[5] ?></td>
											<td><?php echo $value[6] ?></td>
											<td><?php echo $value[7] ?></td>
											<td><?php echo $value[8] ?></td>
											<td><?php echo $value[10] ?></td>
											
											<td>
		<a href="editar.php?id=<?php echo $value[0] ?>" class="btn btn-primary">Editar</a>
		<a href="eliminar.php?id=<?php echo $value[0] ?>" 
			class="btn btn-danger" 
			onClick="return confirm('Esta seguro de eliminar este registro?')">
		Eliminar</a>
											</td>
										</tr>
									<?php endforeach ?>

									
								</tbody>
							</table>
						</div>
					</div>


				</div>
			</div>
		</div>
	</body>
	</html>