<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$xml = simplexml_load_file("contatos.xml");
			$contatos = null;

			foreach($xml->contato as $registro){
				$contato['id'] = $registro->id;
				$contato['nome'] = $registro->nome;
				$contato['email'] = $registro->email;
				$contato['cpf'] = $registro->cpf;
				$contato['rg'] = $registro->rg;

				$contatos[] = $contato;
			}
			echo json_encode($contatos);
		?>
	</body>
</html>