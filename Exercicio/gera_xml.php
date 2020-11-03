<?php
	$conn = new PDO('mysql:host=localhost:3307;dbname=demo', "root", "vertrigo");

	$date = $conn->query('SELECT * FROM pessoa');

	$dom = new DOMDocument("1.0", "ISO-8859-1");

	$dom->preserveWhiteSpace = false;

	$dom->formatOutput = true;

	$root = $dom->createElement("agenda");

	foreach ($date as $row){
		$contato = $dom->createElement("contato");

		$id = $dom->createElement("id", $row['id']);
		$nome = $dom->createElement("nome", $row['nome']);
		$email = $dom->createElement("email", $row['email']);
		$cpf = $dom->createElement("cpf", $row['cpf']);
		$rg = $dom->createElement("rg", $row['rg']);

		$contato->appendChild($id);
		$contato->appendChild($nome);
		$contato->appendChild($email);
		$contato->appendChild($cpf);
		$contato->appendChild($rg);

		$root->appendChild($contato);
	}

	$dom->appendChild($root);

	$dom->save("contatos.xml");
?>