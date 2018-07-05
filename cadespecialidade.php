<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php include('menu.php');	?>
	<div class="container-fluid">
	<h3>Cadastro para Especialidade</h3>
	</div>
	<div class="container-fluid">
	<form action="insereespecialidade.php" method="post">
		<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Especialidade</label>
				<input type="text" class="form-control" name="especial" placeholder="Digite Especialidade">
			</div>
		</div>
		</div>
	<button type="submit" class="btn btn-danger">Cadastrar</button>
	</form>
	</div>
</body>
</html>