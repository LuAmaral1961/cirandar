<?php 

include 'db.php';

//$usuario = addslashes($_POST['usuario']);

//$senha = md5($_POST['senha']);

$usuario = $_POST['usuario'];

$senha = $_POST['senha'];


$query = "SELECT * FROM voluntarios WHERE EMAIL_VOLUNTARIO = '$usuario' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);


if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');
}
else{
    $_SESSION['login'] = false;

	header('location:index.php?erro');
}
