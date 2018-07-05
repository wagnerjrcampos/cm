<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php include('menu.php');	?>
	<div class="container-fluid">
	<h3>Cadastro para Consulta</h3>
	</div>
	<div class="container-fluid">
	<form action="insereconsulta.php" method="post">
		<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Paciente</label>
				<input type="text" class="form-control" name="paciente" placeholder="Digite o nome do paciente">
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Data da Consulta</label>
				<input type="date" class="form-control" name="dtcon" placeholder="Data da consulta">
		</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Hora</label>
				<input type="time" class="form-control" name="hora" placeholder="Hora da Consulta">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Especialidade</label> | <button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#exampleModal">Incluir</button>
				<select class="form-control" name="especialidade" >
					<?php //arquivo: cadconsulta.php
						include("conexao/conexao.php");
						$sql = "select * from tblespecialidades order by especial";
						$qry = mysqli_query($con,$sql);
						while ($linha = mysqli_fetch_array($qry)){
							?>
								<option value="<?php echo $linha['idespeciali'];?>">
									<?php echo $linha['especial']; ?>
								</option>	
					<?php
						}
					?>
		</select>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="form-group">
			<label>Tipo da consulta</label>
			<input type="text" class="form-control" name="forma" placeholder="Tipo da Consulta">
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="form-group">
			<label>Valor da consulta</label>
			<input type="float" class="form-control" name="valor" placeholder="R$">
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="form-group">
			<label>Unidade</label>
			<input type="text" class="form-control" name="unidade" placeholder="Unidade">
		</div>
		</div>
		</div>
		<button type="submit" class="btn btn-danger">Cadastrar</button>
</form>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
	        			<h5 class="modal-title" id="exampleModalLabel">Cadastrar Especialidade</h5>
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">×</span>
	        			</button>
      				</div>
      				<div class="modal-body">
        			<form action="insereespecialidade.php" method="POST">
						<div class="container mt-4">
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<label>Especialidade</label>
										<input type="text" class="form-control" name="especial" placeholder="Digite a especialidade">
									</div>
								</div>
									<div class="col-md-12 col-12 text-center">
										<button type="submit" class="btn btn-danger">Cadrastar</button>
									</div>
							</div>
						</div>
					</form>
      				</div>
      				<div class="modal-footer">
	        			<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      				</div>
    			</div>
  			</div>
		</div>
</body>
</html>