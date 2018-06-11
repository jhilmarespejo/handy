<h1>Niños registrados</h1>

<table class='table'>
	<tr>
		<th>Código</th>
		<th>Centro infantil</th>
		<th>Fecha de registro</th>
		<th>Nombre completo</th>
		<th>Fecha de nacimiento</th>
		<th>Edad</th>
		<th>Sexo</th>
		<th>CI</th>
		<th>Pes0 (kg)</th>
		<th>Talla (m)</th>
		<th>Discapacidad</th>
		<th>Información completa</th>

	</tr>
	<!-- Aquí es donde iteramos nuestro objeto de consulta $articles, mostrando en pantalla-->
	<?php foreach ($datosnino as $datonino): ?>
		<tr>
			<td><?php echo $datonino->id_nino; ?></td>
			<td><?php echo $datonino->id_cim; ?></td>
			<td><?php echo $datonino->fecha_registro; ?></td>
			<td><?php echo $datonino->nombres.' '.$datonino->paterno.' '.$datonino->paterno; ?></td>
			<td><?php echo $datonino->fecha_nacimiento; ?></td>
			<td><?php echo $datonino->edad_nino; ?></td>
			<td><?php echo $datonino->sexo; ?></td>
			<td><?php echo $datonino->num_ci.' '.$datonino->ci_expedido; ?></td>
			<td><?php echo $datonino->peso; ?></td>
			<td><?php echo $datonino->talla; ?></td>
			<td><?php echo ($datonino->discapacidad)? $datonino->discapacidad: 'Ninguna' ; ?></td>
			<td><?= $this->Html->link('Ver datos completos',
				['controller' => 'Fichasocial', 'action' => 'allInfo', $datonino->id_nino]); ?></td>
		</tr>
	<?php endforeach; ?>
</table>
