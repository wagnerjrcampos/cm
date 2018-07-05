<html>
<head>
	<title>..::SIS CONSULTA..::</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<a name="topo"></a>
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="menu.php"><img src='img/hospital.png'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
	<li class="nav-item">
        <a class="nav-link" href="pesqnome.php">Pesquisa</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadespecialidade.php"><img src='img/innovation.png'>          Especialidade</a>
          <a class="dropdown-item" href="cadmedico.php"><img src='img/doctor-stethoscope.png'>         Médico</a>
          <a class="dropdown-item" href="cadconsulta.php"><img src='img/consulting.png'>               Consulta</a>
		  <a class="dropdown-item" href="cadpaciente.php"><img src='img/junior.png'>                   Paciente</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>