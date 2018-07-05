<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
include("conexao/conexao.php");
$cpf		= $_POST['cpf'];
$nome 		= $_POST['nome'];
$tel 		= $_POST['tel'];
$telcelular = $_POST['telcelular'];

$verifica_cpf = mysqli_query($con,"SELECT * FROM paciente WHERE cpf = '$cpf'");



if(mysqli_num_rows($verifica_cpf)>=1){
	echo "<h1>CPF já cadastrador<br>Falha no cadastro!</h1>";
} else {
	$sql ="insert into paciente(cpf,nome,tel,telcelular) values ('$cpf','$nome','$tel','$telcelular')";
	$qry = mysqli_query($con,$sql);
	echo "<a class = 'btn btn-success' href='menu.php'>Menu Principal</a>";
}
?>
	</body>
	</html>