<?php
// Incluir conexao.php

include_once 'conexao.php';

// Recebendo as variáveis vindas do formulário

$variavel = $_POST['name_input'];

// Abaixo variáveis vindas do conexao.php

$connect = mysqli_connect(HOST.','.USER.','.PASSWD.','.DBASE) or die ('Erro ao Conectar');

// Query para cadastrar no banco

$sql = "INSERT INTO vagas (`empresa`, `cnpj`, `cargo`, `area`, `salario`, `beneficios`, `requisitos`, `funcao`, `cidade`, `estado`, `nome`, `fone`, `email`, `criacao`) 
VALUES ('$empresa','$cnpj','$cargo','$area','$salario','$beneficios','$requisitos','$funcao','$cidade','$estado','$nome','$fone','$email', now())";

// Conecta no banco e executa a query

mysqli_query($connect, $sql) or die (print_r($connect));

// Fecha a conexão com o banco

mysqli_close($connect);

// Exibe a mensagem abaixo caso todas as instruções acima tenham sido executadas

echo "<h4 style='font-family: arial; font-weight: bold; color: green'>Vaga Cadastrada com sucesso!<br><br><h4>";
echo "<p style='font-family: arial'>Muito obrigado por cadastrar sua vaga conosco,<br>em breve ela será publicada.<br>Quando ela for preenchida, por gentileza, nos avise através do formulário de contato.</p><br>";
echo "<a href='../empresa.php'><button>VOLTAR</button>";