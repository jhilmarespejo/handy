<h1>Articles index</h1>

<h1>Artículos</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>edit</th>
	</tr>
	<!-- Aquí es donde iteramos nuestro objeto de consulta $articles, mostrando en pantalla-->
	<?php foreach ($cims as $cim): ?>
		<tr>
			<td><?= $cim->id ?></td>
			<td>
				<?= $this->Html->link($cim->title,
				['controller' => 'Articles', 'action' => 'view', $cim->id]) ?>
			</td>
			<td><?= $cim->created->format(DATE_RFC850) ?></td>
			<td>
				<?= $this->Html->link($cim->title,
				['controller' => 'Articles', 'action' => 'edit', $cim->id]) ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>