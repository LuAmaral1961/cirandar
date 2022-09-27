<?php 

include 'db.php';

$id_entidade = $_POST['id_entidade'];
$nome_entidade = $_POST['nome_entidade'];
$area_entidade = $_POST['area_entidade'];
$descricao = $_POST['descricao'];


$query = "UPDATE entidades SET NOME_ENTIDADE='$nome_entidade', AREA_ENTIDADE='$area_entidade', DESCRICAO='$descricao' 
WHERE ID_ENTIDADE = $id_entidade";

mysqli_query($conexao, $query);

header('location:index.php?pagina=entidades');
