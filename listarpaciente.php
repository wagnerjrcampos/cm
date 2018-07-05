<?php //arquivo: listrpaciente.php

include("conexao/conexao.php");

@$paciente = $_POST['paciente'];
if (!isset($paciente)){
	echo "Sem conteúdo para pesquisa...";
} else{
	$sql = "select * from tblconsultas where paciente like '%$paciente%'";

	$qry = mysqli_query($con,$sql);
//inicio da tabela
echo "<table border='1'>";
		echo "<tr>";
			echo "<td>ID</td><td>Paciente</td><td>Especialidade</td><td>Data</td><td>Hora</td><td colspan='2'>Opções</td>";
		echo "</tr>";
while ($linha = mysqli_fetch_array($qry))
{
		echo "<tr>";
			echo "<td> {$linha['idcon']}</td>";
			echo "<td> {$linha['paciente']}</td>";
			echo "<td> {$linha['especiali']}</td>";
			echo "<td> {$linha['dtcon']}  </td>"; 
			echo "<td> {$linha['hora']}   </td>";
			echo "<td><a href='editarpaciente.php?idcon={$linha['idcon']}'><img src='img/edit.png'></a></td>";
			echo "<td><a href='#'><img src='img/garbage.png'></a></td>";
		echo "</tr>";
}
}
 echo "</table>";