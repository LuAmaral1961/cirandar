<?php 

include 'db.php';

$id_ciranda = $_GET['id_ciranda'];

$query = "DELETE FROM ciranda WHERE id_ciranda = $id_ciranda";

mysqli_query($conexao, $query);

header('location:index.php?pagina=ciranda');
