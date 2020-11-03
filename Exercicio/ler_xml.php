<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="2">
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>Email</td>
				<td>CPF</td>
				<td>RG</td>
			</tr>
			<?php
				$xml = simplexml_load_file("contatos.xml");
				foreach($xml->contato as $registro){
					echo "<tr>
							<td>".$registro->id."</td>
							<td>".$registro->nome."</td>
							<td>".$registro->email."</td>
							<td>".$registro->cpf."</td>
							<td>".$registro->rg."</td>
						</tr>";
				}
			?>
		</table>
	</body>
</html>