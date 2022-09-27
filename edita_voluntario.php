<?php 

include 'db.php';

$id_voluntario = $_POST['id_voluntario'];
$email_voluntario = $_POST['email_voluntario'];
$email_voluntario = $_POST['senha'];
$nome_voluntario = $_POST['nome_voluntario'];
$data_nascimento = $_POST['data_nascimento'];


$query = "UPDATE voluntarios SET NOME_VOLUNTARIO='$nome_voluntario',DATA_NASCIMENTO='$data_nascimento' 
WHERE ID_VOLUNTARIO = $id_voluntario";

mysqli_query($conexao, $query);

header('location:index.php?pagina=voluntarios');
