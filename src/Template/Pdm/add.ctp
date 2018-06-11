<!-- Pdm/add-->
<h2 class="title2 text-center">Planes de Mejoramiento</h2>


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
<?php echo $this->Form->create('xxx', ['url' => ['action' => 'add', 'controller' => 'Pdm']]); ?>
	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<fieldset>
			<legend>Encuesta</legend>
			<div class="form-group">
				<label>Nombre Centro Infantil</label>
				<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil']);?>
			</div>
			<div class="form-group">
				<label>¿Tiene Plan de Mejoramiento?</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	 echo $this->Form->select('tiene_pdm', $options, ['class'=>'form-control']);?>
			</div>
			<div class="form-group">
				<label>¿Está aprobado por la comunidad?</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	 echo $this->Form->select('pdm_aprobado', $options, ['class'=>'form-control']);?>
			</div>
			<div class="form-group">
				<label>¿Qué indicadores fueron priorizados en el Plan de Mejoramiento?</label>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">Ámbito</th>
							<th class="text-center" colspan="5">Número de Indicador Priorizado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Institucional</td>
							<td><?php echo $this->Form->input('ind_institucional.0', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_institucional.1', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_institucional.2', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_institucional.3', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_institucional.4', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
						</tr>
						<tr>
							<td>Pedagógico</td>
							<td><?php echo $this->Form->input('ind_pedagogico.0', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_pedagogico.1', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_pedagogico.2', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_pedagogico.3', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_pedagogico.4', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>

						</tr>
						<tr>
							<td>Comunidad</td>
							<td><?php echo $this->Form->input('ind_comunidad.0', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_comunidad.1', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_comunidad.2', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_comunidad.3', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>
							<td><?php echo $this->Form->input('ind_comunidad.0', ['label' => false, 'class'=>'form-control', 'type' => 'number','min'=>'0'] );?></td>

						</tr>
					</tbody>
				</table>
			</div>
		</fieldset>
	</div>
	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="form-group">
			<label>¿Cuenta con propuestas para todos los indicadores priorizados del Plan?</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	 echo $this->Form->select('propuestas_indicadores', $options, ['class'=>'form-control']);?>
		</div>
		<div class="form-group">
			<label>Si la respuesta es No, explique el porqué</label>
			<?php echo $this->Form->input('detale_propuestas', ['label' => false, 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group">
			<label>¿Qué instancia apoyo en la elaboración de la propuesta?</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Comité de Calidad y Protección Infantil y su Facilitadora', 'value' => 'Comite de Calidad y Protección Infantil y su Facilitadora' ],[ 'text' => 'Equipo Técnico Manitos', 'value' => 'Equipo Tecnico Manitos'],[ 'text' => 'Asesoramiento especializado de una instancia interna del GM', 'value' => 'Asesoramiento especializado de una instancia interna del GM'],[ 'text' => 'Asesoramiento especializado de una instancia externa al GM', 'value' => 'Asesoramiento especializado de una instancia externa al GM']]; echo $this->Form->select('apoyo', $options, ['class'=>'form-control']);?>
		</div>
		<div class="form-group">
			<label>Mencione el nombre de la Propuesta por Indicador priorizado</label>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">Ámbito</th>
							<th class="text-center" colspan="5">Nombre de la propuesta por Indicador Priorizado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Institucional</td>
							<td><?php echo $this->Form->input('prop_institucional.0', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_institucional.1', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_institucional.2', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_institucional.3', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_institucional.4', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
						</tr>
						<tr>
							<td>Pedagógico</td>
							<td><?php echo $this->Form->input('prop_pedagogico.0', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_pedagogico.1', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_pedagogico.2', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_pedagogico.3', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_pedagogico.4', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>

						</tr>
						<tr>
							<td>Comunidad</td>
							<td><?php echo $this->Form->input('prop_comunidad.0', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_comunidad.1', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_comunidad.2', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_comunidad.3', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>
							<td><?php echo $this->Form->input('prop_comunidad.0', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'2'] );?></td>

						</tr>
					</tbody>
				</table>
		</div>
	<div class="text-center">
		<?php echo $this->Form->button('Guardar Información', ['class'=>'btn btn-save btn-lg']);?>
	</div>
	</div>
</div>
