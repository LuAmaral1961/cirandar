<a class="btn btn-success" href="?pagina=inserir_entidade">Inserir nova entidade</a>

<table class="table table-hover table-striped" id="entidades">
	<thead>
		<tr>
			<th>Nome entidade</th>
			<th>Área de atuação</th>
            <th>Descrição</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_entidades)){
				echo '<tr><td >'.$linha['NOME_ENTIDADE'].'</td>';
				echo '<td>'.$linha['AREA_ENTIDADE'].'</td>';
                echo '<td>'.$linha['DESCRICAO'].'</td>';
			?>

			<td><a href="?pagina=inserir_entidade&editar=<?php echo $linha['ID_ENTIDADE']; ?>">Editar</a></td>
			<td><a href="deleta_entidade.php?id_entidade=<?php echo $linha['ID_ENTIDADE']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>