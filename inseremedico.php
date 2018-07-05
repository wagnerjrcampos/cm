<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
include("conexao/conexao.php");
$medico 	= $_POST['medico'];
$especialidade 	= $_POST['especialidade'];

//$con = mysqli_connect("$paciente","$dtcon","$hora","$especiali","$forma","$valor","$unidade");
$sql ="insert into tblmedico (medico,especialidade) values ('$medico','$especialidade')";

$qry = mysqli_query($con,$sql);

if(!$qry){
	echo "<h1>Não Cadastrou</h1>";
} else {
	echo "<a class = 'btn btn-success' href='menu.php'>Menu Principal</a>";
	mysqli_close($con);
}
?>
	</body>
	</html>