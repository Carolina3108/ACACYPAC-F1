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
					<a class="nav-link" href="index.php">Listado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="nuevo.php">Nuevo asociado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="auditoria.php">Auditoria</a>
				</li>
			</div>
		</nav>


		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header display-4">
							Registro de nuevo asociado
						</div>
						<div class="card-body">
							
                        <form action="guardar.php" method="post">
								
                            <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">DUI</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="dui" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">NIT</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="nit" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Nombre</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="nombre" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Direccion</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="direccion" required>
									</div>
								</div>

							   <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Tel??fono</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="telefono" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Edad</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="edad" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Profesion</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="profesion" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Agencia</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="" name="agencia" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Fecha</label>
									<div class="col-sm-10">
										<input type="date" class="form-control" id="" name="fecha" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="" class="col-sm-2 form-control-label">Estado</label>
									<div class="col-sm-10">
										<select class="form-select" id="validationCustom04" name="cboEstado" required>
      										<option selected disabled value="">Estado...</option>
      											<option>Habilitado</option>
												<option>Deshabilitado</option>
    											</select>
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary btn-lg">Registrar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>