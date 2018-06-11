
<!-- <?//php echo $this->Html->link('Nuevo registro', ['action' => 'add']); echo '<br>';?>
<?//php echo $this->Html->link('Reportes', ['controller' => 'Cim', 'action' => 'reports' ]);echo '<br>'; ?> -->
<!--<div class="text-left">
	<?//php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text']).' Nuevo registro ', ['controller' => 'Cim', 'action' => 'add'], array('escape'=>false, 'class' => 'alert-warning') ); ?>&nbsp;&nbsp;&nbsp;&nbsp;
	<?//php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-list']).' Reportes ', ['controller' => 'Cim','action' => 'reports'], array('escape'=>false, 'class' => 'alert-warning') ); ?>
</div>
<hr>-->
<h3 class="title2 text-center">Centros Infantiles Municipales (CIM) registrados</h3><br/>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<table class="table-hover table">
		<tr class='text-center'>
			<th>Código</th>
			<th>Nombre</th>
			<th>Responsable</th>
			<th>Dirección</th>
			<th>Operaciones</th>
			<!--<th>Cantidad de educadoras</th>
			<th>Cantidad de manipuladoras</th>-->

		</tr>

		<?php if($cims){ foreach ($cims as $cim): ?>
			<tr>
				<td><?php echo $cim->id_cim; ?></td>
				<td><?php echo $cim->nombre; ?></td>
				<td><?php echo $cim->responsable; ?></td>
				<td><?php echo "Distrito " .$cim->distrito.', Zona '.$cim->zona.', Calle '.$cim->calle.', # '.$cim->numero; ?></td>
				
				<td>
					<?= $this->Html->link('Editar datos',['controller' => 'Cim', 'action' => 'edit', $cim->id_cim]) ?>
				</td>
					
			</tr>
		<?php endforeach; } ?>
	</table>
</div>


<!--

id_cim, nombre, responsable, fecha_inauguracion, distrito, zona, calle, numero, telf, email, numero_ninos, aportes_ppff, administracion, infraestructura_pertenece, cocina, bano, patio, muro_perimetral, almacen, comedor, sala_psicomotricidad, otro_ambiente, aulas_independientes, cantidad_aulas, aulas_detalle, agua, agua_detalle, electricidad, electricidad_detalle, alcantarillado, alcantarillado_detalle, gas, gas_detalle, familias_beneficiadas, ninos_becados, cantidad_educadoras, cantidad_manipuladoras-->