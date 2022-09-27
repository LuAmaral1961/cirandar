<?php 

include 'db.php';

$id_entidade = $_GET['id_entidade'];

$query = "DELETE FROM entidades WHERE ID_ENTIDADE = $id_entidade";

mysqli_query($conexao, $query);

header('location:index.php?pagina=entidades');
