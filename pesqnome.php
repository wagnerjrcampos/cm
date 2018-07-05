<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php include('menu.php') ?>
	<div class="container-fluid">
	<form action="listarpaciente.php" method="post">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
			<br>
				<label>Paciente</label>
				<input type="text" class="form-control" name="paciente" placeholder="Digite o nome do paciente">
			</div>
		</div>
	</div>
<input type="submit" class="btn btn-danger" value="Pesquisa">
</form>