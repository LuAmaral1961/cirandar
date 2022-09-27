
<table class="table table-hover table-striped" id="entidades">
	<thead>
		<tr>
			<th>Nome entidade</th>
			<th>Área de atuação</th>
            <th>Descrição</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_entidades)){
				echo '<tr><td >'.$linha['NOME_ENTIDADE'].'</td>';
				echo '<td>'.$linha['AREA_ENTIDADE'].'</td>';
                echo '<td>'.$linha['DESCRICAO'].'</td>';
			?>


		<?php
			}
		?>
	</tbody>

</table>