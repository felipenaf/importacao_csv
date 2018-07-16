# importacao_csv
Nesse script fiz a importação de um arquivo .csv que contém diversas informações como nome, email, endereço e data de cadastro, todos os registros com um padrão em sua separação, o ";", sendo assim foi criado um array para receber todos os dados separados e em seguida serem salvos no banco de dados.

## Estrutura
O repositório contém 5 arquivos, sendo eles:
* clientes.csv - Contém a lista de registros a serem inseridos no banco
* conexão.php - Contém o método de conexão com o banco de dados
* importacao_banco.php - Responsável por armazenar as informações no banco
* leitura_csv.php - Possui a função responsável por fazer a leitura do arquivo csv e enviar para o importacao_banco.php
* sql.sql - Contém os scripts a serem rodados no banco de dados

## Instruções
1º Passo - Clonar repositório na pasta do servidor  <br/>
2º Passo - Executar os scripts do arquivo sql.sql em seu MYSQL  <br/>
3° Passo - Executar o arquivo importação_banco.php  <br/>

## Versão
* Linux Ubuntu 16.04.01 LTS
* PHP 7.0.30
* MYSQL 14.14 Distrib 5.7.22
* Apache 2.4.18