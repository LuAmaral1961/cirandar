<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo voluntário</h1>
<form method="post" action="processa_voluntario.php">
	<br>
	<label class="badge badge-secondary">e-mail:</label><br>
	<input class="form-control" type="text" name="email_voluntario" placeholder="Insira o e-mail do voluntário">
	<br><br>
	<label class="badge badge-secondary">Senha voluntário:</label><br>
	<input class="form-control" type="text" name="senha" placeholder="Insira a senha do voluntário">
	<br><br>
	<label class="badge badge-secondary">Nome voluntário:</label><br>
	<input class="form-control" type="text" name="nome_voluntario" placeholder="Insira o nome do voluntário">
	<br><br>
	<label class="badge badge-secondary"></label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento"><br><br>
	<input type="submit" class="btn btn-success" value="Inserir voluntário">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_voluntarios)){ ?>
		<?php if($linha['ID_VOLUNTARIO'] == $_GET['editar']){ ?>
			<h1>Editar voluntario</h1>
				<form method="post" action="edita_voluntario.php">
					<input type="hidden" name="id_voluntario" value="<?php echo $linha['ID_VOLUNTARIO']; ?>">
					<br>
					<label class="badge badge-secondary">e-mail:</label><br>
					<input class="form-control" type="text" name="email_voluntario" placeholder="Insira o e-mail" value="<?php echo $linha['EMAIL_VOLUNTARIO']; ?>">
					<br><br>
					<label class="badge badge-secondary">senha:</label><br>
					<input class="form-control" type="text" name="senha" placeholder="Insira a senha" value="<?php echo $linha['SENHA']; ?>">
					<br><br>
					<label class="badge badge-secondary">Nome voluntário:</label><br>
					<input class="form-control" type="text" name="nome_voluntario" placeholder="Insira o nome do voluntário" value="<?php echo $linha['NOME_VOLUNTARIO']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data de nascimento:</label><br>
					<input class="form-control"  type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['DATA_NASCIMENTO']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar voluntário">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>