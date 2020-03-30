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
			<a href="../views/registrar-pessoa.php"><button class="btn btn-success btn-md mt-5">Adiconar</button></a>
		</div>
		<div class="row">
			<table class="table mt-3">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Nome</th>
						<th scope="col" class="cpf">CPF</th>
						<th scope="col">Idade</th>
						<th scope="col">Nivel de Risco</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$count = 1;
					$sql_total = mysqli_query($con, "SELECT * FROM cliente ORDER BY id DESC");

					if (mysqli_num_rows($sql_total) > 0) {

						while ($total_result = mysqli_fetch_assoc($sql_total)) {
							echo "<tr>";
							echo "<td>" . $total_result['id'] . "</td>";
							echo "<td>" . $total_result['nome'] . "</td>";
							echo "<td>" . $total_result['cpf'] . "</td>";
							echo "<td>" . $total_result['idade'] . "</td>";
							echo "<td class=exemplo1>" . ((int) $total_result['fumante'] + (int) $total_result['hipertenso'] + (int) $total_result['asmatico'] + (int) $total_result['diabetico'])
							 . "</td>";

							echo "</tr>";
						}
					} else {
						echo "<tr><td>
			  	 	<p class='text-danger'>Nenhum cliente cadastrado.</p>
			  	 	</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

</body>

</html>