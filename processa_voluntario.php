<?php 

include 'db.php';

$email_voluntario = $_POST['email_voluntario'];
$senha = $_POST['senha'];
$nome_voluntario = $_POST['nome_voluntario'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO voluntarios(email_voluntario, senha, nome_voluntario, data_nascimento) VALUES('$email_voluntario', '$senha', '$nome_voluntario', '$data_nascimento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=voluntarios');