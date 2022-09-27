<a class="btn btn-success" href="?pagina=inserir_ciranda">Quero engajar!</a>

<table class="table table-hover table-striped" id="ciranda">
	<thead>
		<tr>
			<th>Nome voluntário</th>
			<th>Nome entidade</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			while($linha = mysqli_fetch_array($consulta_ciranda)){
				echo '<tr><td >'.$linha['NOME_VOLUNTARIO'].'</td>';
				echo '<td>'.$linha['NOME_ENTIDADE'].'</td>';
		?>
			<td><a href="deleta_ciranda.php?id_ciranda=<?php echo $linha['ID_CIRANDA']; ?>">Deletar</a></td></tr>
		<?php		
			}

		?>
	</tbody>
</table>
