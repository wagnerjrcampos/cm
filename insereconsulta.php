<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
include("conexao/conexao.php");
$paciente 	= $_POST['paciente'];
$dtcon 		= $_POST['dtcon'];
$hora		= $_POST['hora'];
$especiali 	= $_POST['especiali'];
$forma 		= $_POST['forma'];
$valor		= $_POST['valor'];
$unidade 	= $_POST['unidade'];


//$con = mysqli_connect("$paciente","$dtcon","$hora","$especiali","$forma","$valor","$unidade");
$sql ="insert into tblconsultas (paciente,dtcon,hora,especiali,forma,valor,unidade) values ('$paciente','$dtcon','$hora','$especiali','$forma','$valor','$unidade')";

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