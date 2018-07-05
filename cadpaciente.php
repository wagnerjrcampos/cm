<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php include('menu.php');	?>
	<div class="container-fluid">
	<h3>Cadastro para Paciente</h3>
	</div>
	<div class="container-fluid">
	<form action="inserepaciente.php" method="post">
		<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>NOME</label>
				<input type="text" class="form-control" name="nome" placeholder="Digite Nome">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>CPF</label>
				<input type="number" class="form-control" name="cpf" placeholder="Digite CPF">
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label>Telefone</label>
				<input type="number" class="form-control" name="tel" placeholder="Digite Telefone">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Telefone Celular</label>
				<input type="number" class="form-control" name="telcelular" placeholder="Digite Telefone Celular">
			</div>
		</div>
		</div>	
	<button type="submit" class="btn btn-danger">Cadastrar</button>
	</form>
	</div>

</body>
</html>