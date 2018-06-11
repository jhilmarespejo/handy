
<?php  if( $cite ) { ?>
<br/>
<div class="alert-danger" > Este número de CITE ya existe </div>
<?php } elseif( empty($staff) ) { ?>
<div class="alert-danger" > No existen datos relacionados con ésta cédula de identidad </div>
<?php } else { ?>
<?//php pr($records); ?>
<div id="history" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th colspan="3" class="text-center"> Historial </th>
			</tr>
			<tr>
				<th>#</th>
				<th>Sanción</th>
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; foreach ($records as $record) {  ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $record->fecha->i18nFormat('yyyy-MM-dd'); ?></td>
				<td><?php echo $record->sancion ;?></td>
			</tr>
		<?php $i++; } ?>
		</tbody>
	</table>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<!-- <?//php pr($staff); ?>
	<?//php pr($cite);  ?>
	<?//php echo $this->Form->hidden('id', ['value'=>null] );?>--> 
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('fecha', ['label' => ['text' => 'Fecha del memorándum'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('paterno', ['label' => ['text' => 'Apellido paterno'], 'class'=>'form-control', 'type' => 'text', 'value' => $staff['paterno'] ] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('materno', ['label' => ['text' => 'Apellido materno'], 'class'=>'form-control', 'type' => 'text', 'value' => $staff['materno']] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type' => 'text', 'required', 'value' => $staff['nombres']] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label>Cargo</label>
			<?php $options = [[ 'text' => $staff['cargo'], 'value' => $staff['cargo'], 'selected', 'disabled'],[ 'text' => 'Secretaria', 'value' => 'Secretaria'],[ 'text' => 'Técnico', 'value' => 'Técnico'],[ 'text' => 'Facilitador/a', 'value' => 'Facilitador/a'],[ 'text' => 'Educadora', 'value' => 'Educadora'],[ 'text' => 'Manipuladora de alimentos', 'value' => 'Manipuladora de alimentos']]; echo $this->Form->select('cargo', $options, ['class'=>'form-control', 'id' => 'cargo']);?>
		</div>

		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label>Motivo del memorandum</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],['text' => 'Incumplimiento a instructivo', 'value' => 'Incumplimiento a instructivo'], ['text' => 'Incumplimiento del horario de trabajo', 'value' => 'Incumplimiento del horario de trabajo'],['text' => 'Desorden y descuido en el manejo de documentos, materiales y útiles de trabajo', 'value' => 'Desorden y descuido en el manejo de documentos, materiales y útiles de trabajo'],['text' => 'Por realizar actividades ajenas a sus funciones en horarios de trabajo', 'value' => 'Por realizar actividades ajenas a sus funciones en horarios de trabajo'],['text' => 'Por incurrir en retrasos continuos a su fuente de trabajo', 'value' => 'Por incurrir en retrasos continuos a su fuente de trabajo'],['text' => 'Reincidencia por más de tres veces en las faltas señaladas anteriormente', 'value' => 'Reincidencia por más de tres veces en las faltas señaladas anteriormente'],['text' => 'Incumplimiento de las órdenes superiores u obligaciones funcionarias', 'value' => 'Incumplimiento de las órdenes superiores u obligaciones funcionarias'],['text' => 'Abandono de la fuente laboral en horas de trabajo', 'value' => 'Abandono de la fuente laboral en horas de trabajo'],['text' => 'Reincidencia en incumplimiento del horario de trabajo, por más de 2 veces en la misma semana', 'value' => 'Reincidencia en incumplimiento del horario de trabajo, por más de 2 veces en la misma semana']]; echo $this->Form->select('motivo', $options, ['class'=>'form-control', 'id' => 'motivo', 'required']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label>Sancion</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],['text' => '1ra. Llamada de atención', 'value' => '1ra Llamada de atención'],['text' => '2da. Llamada de atención', 'value' => '2da. Llamada de atención'], ['text' => '3ra. Llamada de atención', 'value' => '3ra Llamada de atención'], ['text' => 'Severa llamada de atención', 'value' => 'Severa llamada de atención'], ['text' => 'Severa llamada de atención con descuento de 1 día de haber', 'value' => 'Severa llamada de atención con descuento de 1 día de haber'], ['text' => 'Descuento de 1 día de haber', 'value' => 'Descuento de 1 día de haber'],['text' => 'Descuento de 2 días de haber', 'value' => 'Descuento de 2 días de haber'],['text' => 'Descuento de 3 días de haber', 'value' => 'Descuento de 3 días de haber']]; echo $this->Form->select('sancion', $options, ['class'=>'form-control', 'id' => 'sancion', 'required']);	?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('obs', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control', 'type' => 'textarea'] );?>
		</div>
		<div class="text-center">
			<?php echo  $this->Form->button('Guardar', ['class' => 'btn btn-save btn-lg']);?>
		</div>
</div>
<?php } ?>



<script type="text/javascript" charset="utf-8" async defer>
	$('#fecha').datepicker({
        	format: 'yyyy-mm-dd',
			autoclose: true,
			endDate: 'now',
			startView: 2
    });
</script>


	
