<?php include_once '../config/conexao.php'; ?>

<?php

if (isset($_POST['register'])) {
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$idade = $_POST['idade'];
	$senha = $_POST['senha'];
	$hipertenso = $_POST['hipertenso'];
	$fumante = $_POST['fumante'];
	$diabetico = $_POST['diabetico'];
	$asmatico = $_POST['asmatico'];

	$sql_insert = mysqli_query($con, "INSERT INTO cliente(nome,cpf,idade,senha,hipertenso,fumante,diabetico,asmatico) VALUES('$nome','$cpf','$idade','$senha',$hipertenso, $fumante,$diabetico,$asmatico)");
	if ($sql_insert) {
		header('location: ../views/inicio-pessoa.php');
	} else {
		echo mysqli_error($con);
	}
}


?>

<header>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../img/icon.png">
	<title>Alcool+ - Registro de Pessoa</title>
	<img src="../img/Alcool.png" class="logo">

	<script>
	$(document).ready(function() {
		$(':submit').prop("disabled", true)
		validar();
	$('#nome, #cpf, #idade, #senha').keyup(validar);
});

function validar(){
    if ($('#nome').val().length   >   0   &&
        $('#cpf').val().length  >   0   &&
		$('#idade').val().length    >   0)  {
        $(":submit").prop("disabled", false);
    }
    else {
        $(":submit").prop("disabled", true);
    }
}
	</script>
	
</header>

<div class="container mt-5">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h3>Registro de Clientes</h3>
			<form method="post">
				<div>
					<label>Nome</label>
					<input type="text" class="form-control" id="nome" name="nome">
				</div>
				<div>
					<label>CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" maxlength="14">
				</div>
				<div>
					<label>Idade</label>
					<input type="text" id="idade" name="idade">
				</div>

				<div>
					<label>Senha</label>
					<input type="password" id="senha" name="senha" required>
				</div>

				<h3>Grupos de Risco</h3>

				<div>
					<p>Você é Hipertenso?</p>
					<input type="radio" name="hipertenso" value=TRUE>
					<label>Sim</label><br>
					<input type="radio" name="hipertenso" value=FALSE checked>
					<label>Não</label><br>
				</div>

				<div>
					<p>Você fuma?</p>
					<input type="radio" name="fumante" value=TRUE>
					<label>Sim</label><br>
					<input type="radio" name="fumante" value=FALSE checked>
					<label>Não</label><br>
				</div>
		</div>

		<div>
			<p>Você é diabético?</p>
			<input type="radio" name="diabetico" value=TRUE>
			<label>Sim</label><br>
			<input type="radio" name="diabetico" value=FALSE checked>
			<label>Não</label><br>
		</div>
	</div>

	<div>
		<p>Você possui Asma?</p>
		<input type="radio" name="asmatico" value=TRUE>
		<label>Sim</label><br>
		<input type="radio" name="asmatico" value=FALSE checked>
		<label>Não</label><br>
	</div>
</div>

<button type="submit" id ="sbtn" name="register">Enviar</button>