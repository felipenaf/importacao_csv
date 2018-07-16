<?php

	function leitura_csv(){

		//A função fopen abre o arquivo
		//o "r" é de read = leitura
		$arquivo = fopen("clientes.csv", "r");

		// O fgetcsv serve para quebrar a informação no ";"
		//Ex: felipe;felipe@felipe;rua pontal;11/07/2016
		//felipe felipe@felipe rua pontal 11/07/2016
		$row = 0;
		while ($line = fgetcsv($arquivo, null, ";")) {
			
			$pessoa[] = [
				'nome' => $line[0], // nome => felipe
				'email' => $line[1], // email => felipe@felipe
				'endereco' => $line[2], // endereco => rua pontal
				'datacadastro' => $line[3] // datacadastro => 11/07/2016
			];
    }
    
		return $pessoa;
		
		fclose($arquivo);
	}
?>