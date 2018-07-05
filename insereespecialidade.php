<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
include("conexao/conexao.php");
$especial = $_POST['especial'];

//$con = mysqli_connect("$especial");

$sql ="insert into tblespecialidades (especial) values ('$especial')";

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