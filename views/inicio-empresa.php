<?php include_once '../config/conexao.php' ?>

<html>

<header>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../img/icon.png">
	<title>Alcool+ - Inicio</title>
	<img src="../img/Alcool.png" class="logo">
	<script>

    </script>
</header>

<body>

	<div class="container">
		<div class="row">
			<a href="../views/registrar-empresa.php"><button class="btn btn-success btn-md mt-5">Adiconar</button></a>
		</div>
		<div class="row">
			<table class="table mt-3">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Id</th>
						<th scope="col" class="cnpj">CNPJ</th>
						<th scope="col">Nome</th>
						<th scope="col">Endereco</th>
						<th scope="col">Quantidade de Alcool em Gel disponivel</th>
						<th scope="col">Valor Unitario de Alcool em Gel</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$count = 1;
					$sql_total = mysqli_query($con, "SELECT * FROM empresa ORDER BY id DESC");

					if (mysqli_num_rows($sql_total) > 0) {

						while ($total_result = mysqli_fetch_assoc($sql_total)) {
							echo "<tr>";
							echo "<td>" . $total_result['id'] . "</td>";
							echo "<td>" . $total_result['cnpj'] . "</td>";
							echo "<td>" . $total_result['nome'] . "</td>";
							echo "<td>" . $total_result['endereco'] . "</td>";
							echo "<td>" . $total_result['qtdegel'] . "</td>";
							echo "<td>" . $total_result['valorgel'] . "</td>";

							echo "</tr>";
						}
					} else {
						echo "<tr><td>
			  	 	<p class='text-danger'>Nenhuma empresa cadastrada.</p>
			  	 	</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

</body>

</html>