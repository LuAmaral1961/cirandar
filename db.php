<?php 
// Conexão com banco de dados
// Banco de dados Mysql criado com os comandos a seguir:
// CREATE DATABASE CIRANDAR
// 
// CREATE TABLE VOLUNTARIOS (
//     ID_VOLUNTARIO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     EMAIL_VOLUNTARIO VARCHAR(255) NOT NULL UNIQUE,
//     SENHA VARCHAR(255) NOT NULL,
//     NOME_VOLUNTARIO VARCHAR(255) NOT NULL,
//     DATA_NASCIMENTO VARCHAR(10)	
//     )

// CREATE TABLE ENTIDADES (
// 		ID_ENTIDADE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//		AREA_ENTIDADE VARCHAR(255) NOT NULL,
//		NOME_ENTIDADE VARCHAR(255) NOT NULL,
//		DESCRICAO VARCHAR(255)
//		) 

// CREATE TABLE CIRANDA (
//		ID_CIRANDA INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//		ID_VOLUNTARIO INT NOT NULL,
//		ID_ENTIDADE INT NOT NULL
//		)
//


$servidor = "localhost";
$usuario = "root";
$senha = "AdaLovelace";
$db = "cirandar";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM entidades";
$consulta_entidades = mysqli_query($conexao, $query);

$query = "SELECT * FROM voluntarios";
$consulta_voluntarios = mysqli_query($conexao, $query);

$query = "SELECT ciranda.ID_CIRANDA, voluntarios.NOME_VOLUNTARIO, entidades.NOME_ENTIDADE 
			FROM voluntarios, entidades, ciranda
			WHERE ciranda.ID_VOLUNTARIO = voluntarios.ID_VOLUNTARIO
			AND ciranda.ID_ENTIDADE = entidades.ID_ENTIDADE";
			
$consulta_ciranda = mysqli_query($conexao, $query);

$query = "SELECT *
			FROM voluntarios
			WHERE EMAIL_VOLUNTARIO = '$usuario'";

$consulta_voluntarios_user = mysqli_query($conexao, $query);

