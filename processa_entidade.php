<?php 

include 'db.php';

$nome_entidade = $_POST['nome_entidade'];
$area_entidade = $_POST['area_entidade'];
$descricao = $_POST['descricao'];

$query = "INSERT INTO entidades(nome_entidade, area_entidade, descricao) VALUES('$nome_entidade', '$area_entidade', '$descricao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=entidades');