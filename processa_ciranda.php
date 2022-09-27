<?php 

include 'db.php';

$id_voluntario = $_POST['escolha_voluntario'];
$id_entidade = $_POST['escolha_entidade'];

$query = "INSERT INTO ciranda(id_voluntario, id_entidade) VALUES($id_voluntario, $id_entidade)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=ciranda');