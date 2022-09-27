<a class="btn btn-success" href="?pagina=inserir_voluntario">Inserir novo voluntario</a>

<table class="table table-hover table-striped" id="voluntarios">
	<thead>
		<tr>
			<th>e-mail</th>
			<th>senha</th>
			<th>Nome voluntario</th>
			<th>data de nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_voluntarios)){
				echo '<tr><td >'.$linha['EMAIL_VOLUNTARIO'].'</td>';
                echo '<td>'.$linha['SENHA'].'</td>';
				echo '<td>'.$linha['NOME_VOLUNTARIO'].'</td>';
				echo '<td>'.$linha['DATA_NASCIMENTO'].'</td>';


		?>

			<td><a href="?pagina=inserir_voluntario&editar=<?php echo $linha['ID_VOLUNTARIO']; ?>">Editar</a></td>
			<td><a href="deleta_voluntario.php?id_voluntario=<?php echo $linha['ID_VOLUNTARIO']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>