<?php 

include 'db.php';

$id_voluntario = $_GET['id_voluntario'];

$query = "DELETE FROM voluntarios WHERE ID_VOLUNTARIO = $id_voluntario";

mysqli_query($conexao, $query);

header('location:index.php?pagina=voluntario');
