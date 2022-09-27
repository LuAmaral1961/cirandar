<h2 style="text-align:center">Bem-vindo à Ciranda</h2>
<h4 style="text-align:center">Faça o seu cadastro</h4>

<form method="post" action="processa_voluntario.php">

	<label class="badge badge-secondary">Email:</label>
	<input type="text" name="email_voluntario" placeholder="email" class="form-control">
	<br>
	<label class="badge badge-secondary">Senha:</label>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control">
    <br>
	<label class="badge badge-secondary">Nome:</label>
	<input type="text" name="nome_voluntario" placeholder="Digite o seu nome" class="form-control">
    <br>
	<label class="badge badge-secondary">Data_nascimento:</label>
	<input type="text" name="data_nascimento" placeholder="Digite a data de nascimento" class="form-control">

	<br>

	<input type="submit" value="Enviar" class="btn btn-success">

</form>

<br>
<?php if(isset($_GET['erro'])){ ?>

	<div class="alert alert-danger" role="alert">
		Usuário já cadastrado.
	</div>

<?php } ?>