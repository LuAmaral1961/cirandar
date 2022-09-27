<?php
session_start();
# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

# Acesso a páginas permitido somente para o Administrador do banco de dados

if(isset($_SESSION['login'])){
	if($_SESSION['usuario'] == 'Admin'){

		switch($pagina){
			case 'entidades': include 'views/entidades.php'; break;
			case 'voluntarios': include 'views/voluntarios.php'; break;
			case 'ciranda': include 'views/ciranda.php'; break;
			case 'entrar': include 'views/entrar.php'; break;
			case 'inserir_voluntario': include 'views/inserir_voluntario.php'; break;
			case 'inserir_ciranda': include 'views/inserir_ciranda.php'; break;
			case 'inserir_entidade': include 'views/inserir_entidade.php'; break;
			default: include 'views/home.php'; break;
		}
	}
	else{
		# Acesso permitido para usuários logados
		switch($pagina){
			case 'entidades': include 'views/entidades_user.php'; break;
			case 'voluntarios': include 'views/inserir_ciranda_user.php'; break;
			case 'ciranda': include 'views/inserir_ciranda_user.php'; break;
			case 'inserir_ciranda': include 'views/inserir_ciranda_user.php'; break;
			case 'entrar': include 'views/entrar.php'; break;
			
			default: include 'views/home.php'; break;
		}

	}
}
else{
	# Acesso sem restrição
	switch($pagina){
		case 'entidades': include 'views/entidades_user.php'; break;
		case 'voluntarios': include 'views/cadastrar.php'; break;
		case 'ciranda': include 'views/cadastrar.php'; break;
		case 'inserir_ciranda': include 'views/cadastrar.php'; break;
		case 'entrar': include 'views/entrar.php'; break;
		default: include 'views/home.php'; break;
	}
	
}
# Rodapé
include 'footer.php';

