<?php include_once '../config/conexao.php'; ?>

<?php

if (isset($_POST['register'])) {
	$cnpj = $_POST['cnpj'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];	
	$qtdegel = $_POST['qtdegel'];
	$valorgel = $_POST['valorgel'];
	$senha = $_POST['senha'];

	$sql_insert = mysqli_query($con, "INSERT INTO empresa(cnpj,nome,endereco,qtdegel,valorgel,senha) VALUES('$cnpj','$nome','$endereco','$qtdegel',$valorgel, $senha)");
	if ($sql_insert) {
		header('location: ../views/inicio-empresa.php');
	} else {
		echo mysqli_error($con);
	}
}


?>

<header>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../img/icon.png">
	<title>Alcool+ - Registro de Empresa</title>
	<img src="../img/Alcool.png" class="logo">

	<script>
	$(document).ready(function() {
		$(':submit').prop("disabled", true)
		validar();
	$('#cpnj, #nome, #endereco, #senha').keyup(validar);
});

function validar(){
    if ($('#cnpj').val().length   >   0   &&
        $('#nome').val().length  >   0   &&
		$('#endereco').val().length    >   0)  {
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
			<h3>Registro de Empresa</h3>
			<form method="post">
				<div>
					<label>CNPJ</label>
					<input type="text" class="form-control" id="cnpj" name="cnpj" maxlength="20">
				</div>
				<div>
					<label>Nome</label>
					<input type="text" class="form-control" id="nome" name="nome">
				</div>
				<div>
					<label>Endereco</label>
					<input type="text" id="endereco" name="endereco">
				</div>

				<div>
					<label>Quantidade de Alcool Gel em estoque</label>
					<input type="text" id="qtdegel" name="qtdegel" required>
				</div>

				<div>
					<label>Valor unitario de Alcool Gel</label>
					<input type="text" id="valorgel" name="valorgel" required>
				</div>

				<div>
					<label>Senha</label>
					<input type="password" id="senha" name="senha" required>
				</div>
		</div>
	</div>
</div>	


<button type="submit" id ="sbtn" name="register">Enviar</button>