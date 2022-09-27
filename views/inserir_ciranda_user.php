<h1>Inserir ciranda</h1>


<form method="post" action="processa_ciranda_user.php">
	<br>

	<p class="badge badge-secondary">Selecione o voluntário</p>
	<select class="form-control" name="escolha_voluntario">
		<option>Selecione um voluntário</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_voluntarios)){
			if ($linha['EMAIL_VOLUNTARIO'] == $_SESSION['usuario']){
				echo '<option value="'.$linha['ID_VOLUNTARIO'].'">'.$linha['NOME_VOLUNTARIO'].'</option>';
			}
		}
		?>
	</select>

	<br><br>

	<p class="badge badge-secondary">Selecione a entidade</p>
	<select class="form-control" name="escolha_entidade">
		<option>Selecione uma entidade</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_entidades)){
			echo '<option value="'.$linha['ID_ENTIDADE'].'">'.$linha['NOME_ENTIDADE'].'</option>';
		}
		?>
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Conectar ciranda!">
</form>