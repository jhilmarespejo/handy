<!-- CdC/add-->
<h2 class="title2 text-center">Comité de Calidad</h2>


<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php
	$options_name = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	$options_id = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
		foreach ($data[1] as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
			$options_id[$key+1]['text'] = $cim->id_cim;
			$options_id[$key+1]['value'] = $cim->id_cim;
		}?>
<?php echo $this->Form->create('xxx', ['url' => ['action' => 'add', 'controller' => 'Cdc']]); ?>
	<div class="group1 col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<fieldset>
			<legend>Encuesta</legend>
			<div class="form-group">
				<label>Nombre Centro Infantil</label>
				<?php echo $this->Form->select('cdc.id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil']);?>
			</div>
			<div class="form-group">
				<label>¿Se ha realizado la reunión donde se ha elegido a los representantes del Comité de Calidad y Protección Infantil?</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	 echo $this->Form->select('cdc.reunion_eleccion_cdc', $options, ['class'=>'form-control', 'id'=>'reunion-eleccion-cdc']);?>
			</div>
			<div class="form-group">
				<label>Si la respuesta es No, explique el porqué</label>
				<?php echo $this->Form->input('cdc.detalle_reunion', ['label' => false, 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group">
				<label>¿Se ha conformado el Comité de Calidad y Protección Infantil? Según instructivo?</label>
				<?php $options = [[ 'text' => '', 'value' => 'reunion_eleccion_cdc', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	 echo $this->Form->select('cdc.cdc_conformado_instructivo', $options, ['class'=>'form-control', 'id'=>'reunion-eleccion-cdc']);?>
			</div>
			<div class="form-group">
				<label>Fecha de conformación del Comité de Calidad y Protección Infantil</label>
				<?php echo $this->Form->input('cdc.fecha_conformacion_cdc', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'fecha-conformacion-cdc'] );?>
			</div>
		</fieldset>
	</div>
	<div class="group2 col-xs-12 col-sm-8 col-md-8 col-lg-8">
		<fieldset>
			<legend>Relación de personas que forman parte del<br>Comité de Calidad y Protección Infantil</legend>
			<table  class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>CI.</th>
						<th>CI. Exp.</th>
						<th>Edad</th>
						<th>Ocupación</th>
						<th>A que Gr.Eta. pertenece su hijo en el CI?</th>
						<th>Nuevo/Antiguo</th>
						<th>Año de Participación</th>

					</tr>
				</thead>
				<tbody>
				<?php for ($i=0; $i < 3; $i++) { ?>
					<tr>
						<td><?php echo $i+1; ?></td>
						<td><?php echo $this->Form->input("nominacdc.$i.nombres", ['label' => false, 'class'=>'form-control strech', 'type' => 'text'] );?></td>
						<td><?php echo $this->Form->input("nominacdc.$i.apellidos", ['label' => false, 'class'=>'form-control strech', 'type' => 'text'] );?></td>
						<td><?php echo $this->Form->input("nominacdc.$i.ci", ['label' => false, 'class'=>'form-control strech', 'type' => 'number', 'min' => '0' ] );?></td>
						<td>
						<?php $dep = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'La Paz', 'value' => 'lp' ],[ 'text' => 'Oruro', 'value' => 'or'],[ 'text' => 'Potosí', 'value' => 'pt'],[ 'text' => 'Cochabamba', 'value' => 'cb'],[ 'text' => 'Chuquisaca', 'value' => 'ch'],[ 'text' => 'Tarija', 'value' => 'tj'],[ 'text' => 'Pando', 'value' => 'pa'],[ 'text' => 'Beni', 'value' => 'bn'],[ 'text' => 'Santa Cruz', 'value' => 'sc']];	?>
							<?php echo $this->Form->select("nominacdc.$i.ci_expedido", $dep, ['class'=>'form-control strech', 'id'=>'ci-expedido']);?>
						</td>
						<td><?php echo $this->Form->input("nominacdc.$i.edad", ['label' => false, 'class'=>'form-control strech', 'type' => 'number', 'min' => '0'] );?></td>
						<td><?php echo $this->Form->input("nominacdc.$i.ocupacion", ['label' => false, 'class'=>'form-control strech', 'type' => 'text'] );?></td>
						<td>
							<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => '6m - 1año ', 'value' => '6m - 1año ' ],[ 'text' => '1-2 años', 'value' => '1-2 años'],[ 'text' => '2-3 años', 'value' => '2-3 años'],[ 'text' => '3-4 años', 'value' => '3-4 años']];	 echo $this->Form->select("nominacdc.$i.hijo_grupo_etareo", $options, ['class'=>'form-control']);?>
						</td>
						<td><?php $opt = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Nuevo', 'value' => 'Nuevo' ],[ 'text' => 'Antiguo', 'value' => 'Antiguo']];	echo $this->Form->select("nominacdc.$i.nuevo_antiguo", $opt, ['class'=>'form-control strech']);?>
						</td>
						<td><?php echo $this->Form->input("nominacdc.$i.ano_participacion", ['label' => false, 'class'=>'form-control strech', 'type' => 'date', 'minYear' => date('Y')-3, 'maxYear' => date('Y'), 'month'=>false, 'day'=>false] );?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</fieldset>
	</div>
<div class="text-center">
		<?php echo $this->Form->button('Guardar Información', ['class'=>'btn btn-save btn-lg']);?>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('#fecha-conformacion-cdc').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true,
        	startView: 2
    });
});
</script>