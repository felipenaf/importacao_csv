<?php

  include_once 'conexao.php';
  include_once 'leitura_csv.php';

  $con = conexao();
  $pessoa = leitura_csv();

  try{

    foreach ($pessoa as $registro) {

      $nome = $registro['nome'];
      $email = $registro['email'];
      $endereco = $registro['endereco'];
      $dataCadastro = $registro['datacadastro'];

      $Statement = $con->query("INSERT INTO cliente (nome, email, endereco, dataCadastro) VALUES ('$nome', '$email', '$endereco', '$dataCadastro');");
    }

  }catch(Exception $e){
      
    echo "Erro: {$e->getMessage()}";
    echo "<br>";
    echo "Linha: {$e->getLine()}";
    
  }

?>