<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir nova entidade</h1>
<form method="post" action="processa_entidade.php">
	<br>
	<label class="badge badge-secondary">Nome entidade:</label><br>
	<input class="form-control" type="text" name="nome_entidade" placeholder="Insira o nome da entidade">
	<br><br>
	<label class="badge badge-secondary">Área de atuação</label><br>
	<input class="form-control"  type="text" name="area_entidade" placeholder="Insira a área de atuação"><br><br>
    <label class="badge badge-secondary">Descrição</label><br>
	<input class="form-control"  type="text" name="descricao" placeholder="Insira uma descrição"><br><br>

	<input type="submit" class="btn btn-success" value="Inserir entidade">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_entidades)){ ?>
		<?php if($linha['ID_ENTIDADE'] == $_GET['editar']){ ?>

			<h1>Editar entidade</h1>
			<form method="post" action="edita_entidade.php">
				<input type="hidden" name="id_entidade" value="<?php echo $linha['ID_ENTIDADE']; ?>">
				<br>
				<label class="badge badge-secondary">Nome entidade:</label><br>
				<input class="form-control" type="text" name="nome_entidade" placeholder="Insira o nome da entidade" value="<?php echo $linha['NOME_ENTIDADE']; ?>">
				<br><br>
				<label class="badge badge-secondary">Área de atuação</label><br>
				<input class="form-control" type="text" name="area_entidade" placeholder="Insira a área de atuação"  value="<?php echo $linha['AREA_ENTIDADE']; ?>"><br><br>
                <br><br>
				<label class="badge badge-secondary">Descrição</label><br>
				<input class="form-control" type="text" name="descricao" placeholder="Insira uma descrição"  value="<?php echo $linha['DESCRICAO']; ?>"><br><br>
				<input class="btn btn-success" type="submit" value="Editar entidade">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
