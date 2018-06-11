<?//php pr($familia);?>
<h4>Familiares agregados</h4>

<div class="table-responsive">
  <table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Parentesco</th>
		<th>Nombres</th>
		<th>Edad</th>
		<th>Sexo</th>
		<!--<th>G. Instrucción</th>
		<th>Ocupación</th>-->
	</tr>
	<!-- Aquí es donde iteramos nuestro objeto de consulta $articles, mostrando en pantalla-->
	<?php 
		$count = 1; 
		foreach ($familiares as $familiar): ?>
		<tr>
			<td><?php echo $count?></td>
			<td><?php echo $familiar['parentesco']; ?></td>
			<td>
				<!-- <?//php echo $this->Html->link($familiar->title,['controller' => 'Articles', 'action' => 'view', $familiar->id]) ?> -->
				<?php echo $familiar['nombres'].' '.$familiar['paterno'].' '.$familiar['materno']; ?>
			</td>
			<td><?php echo $familiar['edad']; ?></td>
			<td><?php echo $familiar['id_nino']; ?></td>
			<!--<td><?//php echo $familiar['grado_instruccion']; ?></td>
			<td><?//php echo $familiar['ocupacion']; ?></td>-->
		</tr>
	<?php $count+=1; endforeach; ?>
</table>
</div>