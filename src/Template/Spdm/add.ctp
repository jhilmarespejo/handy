<!-- Spdm/add-->
<h2 class="title2 text-center">Seguimiento a los Planes de Mejoramiento</h2>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<br>
<?php
	$options_name = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	$options_id = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
		foreach ($data[1] as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
			$options_id[$key+1]['text'] = $cim->id_cim;
			$options_id[$key+1]['value'] = $cim->id_cim;
		}?>
<?php echo $this->Form->create($data[0], ['url' => ['action' => 'add', 'controller' => 'Spdm']]); ?>
<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<fieldset>
	<legend>Encuesta</legend>
		<div class="form-group">
			<label>Nombre Centro Infantil</label>
			<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil']);?>
		</div><br>
		<div class="form-group">
		<label>¿Qué instancias apoyaron en la elaboración de propuestas del plan de mejoramiento? - Asistencia técnica</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Del facilitador', 'value' => 'Del facilitador' ],[ 'text' => 'Del equipo técnico', 'value' => 'Del equipo tecnico'],[ 'text' => 'Otras instancias Internas del GAMEA', 'value' => 'Otras instancias Internas del GAMEA'],[ 'text' => 'Otras instancias externas al GAMEA', 'value' => 'Otras instancias externas al GAMEA']];	 echo $this->Form->select('apoyo_instancias', $options, ['class'=>'form-control']);?>
		</div><br>
		<div class="form-group">
			<label>¿En qué nivel de aprobación se encuentran las propuestas del plan de mejoramiento?</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Comunidad Educativa CIM', 'value' => 'Comunidad Educativa CIM' ],[ 'text' => 'Manitos', 'value' => 'Manitos'],[ 'text' => 'DS', 'value' => 'DS']];	 echo $this->Form->select('nivel_aprobacion', $options, ['class'=>'form-control']);?>
		</div><br>
		<div class="form-group">
			<label>¿Cada cuánto tiempo se reúne el Comité para ver el cumplimiento del plan de mejoramiento?</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Mensual', 'value' => 'Mensual' ],[ 'text' => 'Bimensual', 'value' => 'Bimensual'],[ 'text' => 'Trimestral', 'value' => 'Trimestral'],[ 'text' => 'Semestral', 'value' => 'Semestral'],[ 'text' => 'Anual', 'value' => 'Anual']];	 echo $this->Form->select('periodo_reunion_verificacion', $options, ['class'=>'form-control']);?>
		</div><br>
		<div class="form-group">
			<label>¿Cuántos miembros del Comité asisten regularmente a las reuniones para ver el cumplimiento del Plan de Mejoramiento?</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => '4', 'value' => '4' ],[ 'text' => '6', 'value' => '6'],[ 'text' => '8', 'value' => '8'],[ 'text' => '10', 'value' => '10']];	 echo $this->Form->select('cantidad_miembros', $options, ['class'=>'form-control']);?>
		</div><br>
	</fieldset>
</div>


<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6"><br><br>
	<div class="form-group">
		<label>¿Qué reporta el Comité sobre sus actividades?</label>
		<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Realiza su autoevaluación y elabora su Plan de Mejoramiento', 'value' => 'Realiza su autoevaluacion y elabora su Plan de Mejoramiento' ],[ 'text' => 'Todavía no ha comenzado a ejecutar su Plan de Mejoramiento', 'value' => 'Todavía no ha comenzado a ejecutar su Plan de Mejoramiento'],[ 'text' => 'Socializa y aprueba sus Planes de Mejoramiento con la comunidad', 'value' => 'Socializa y aprueba sus Planes de Mejoramiento con la comunidad'],[ 'text' => 'Avances y dificultades que se presentan en la implementación en el Plan de Mejoramiento', 'value' => 'Avances y dificultades que se presentan en la implementacion en el Plan de Mejoramiento'],[ 'text' => 'Se aprueba las propuestas por instancias superiores', 'value' => 'Se aprueba las propuestas por instancias superiores']];	 echo $this->Form->select('reporte_comite', $options, ['class'=>'form-control']);?>
	</div><br>
	<div class="form-group">
		<label>¿Cómo se realiza el seguimiento al cumplimiento de los Planes de Mejoramiento?</label>
		<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Las facilitadoras acompañan y apoyan este proceso de forma permanente', 'value' => 'Las facilitadoras acompañan y apoyan este proceso de forma permanente' ],[ 'text' => 'El Comité de Calidad reporta informes permanentes de avance', 'value' => 'El Comite de Calidad reporta informes permanentes de avance'],[ 'text' => 'Se ha creado un archivo documental donde se guarda toda la documentación del avance del Plan de Mejoramiento', 'value' => 'Se ha creado un archivo documental donde se guarda toda la documentacion del avance del Plan de Mejoramiento'],[ 'text' => 'Existe un registro en el cuaderno de actas de forma recurrente sobre el avance del Plan de Mejoramiento', 'value' => 'Existe un registro en el cuaderno de actas de forma recurrente sobre el avance del Plan de Mejoramiento']];	 echo $this->Form->select('como_realiza_seguimiento', $options, ['class'=>'form-control']);?>
	</div><br>
	<div class="form-group">
		<label>¿Quiénes son las personas del comité que más han trabajo durante el periodo de implementación del Plan de Mejoramiento?</label>
		<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Facilitadora', 'value' => 'Facilitadora' ],[ 'text' => 'Responsable', 'value' => 'Responsable'],[ 'text' => 'Educadora', 'value' => 'Educadora'],[ 'text' => 'Madres de familia', 'value' => 'Madres de familia'],[ 'text' => 'otros', 'value' => 'otros']];	 echo $this->Form->select('trabajo_destacado', $options, ['class'=>'form-control']);?>
	</div><br>
	<div class="form-group">
		<label>¿Qué dificultades ha enfrentado el Comité para ejecutar las propuestas del Plan de Mejoramiento?</label>
		<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Falta de apoyo de la facilitadora', 'value' => 'Falta de apoyo de la facilitadora' ],[ 'text' => 'Falta de apoyo y compromiso de las madres y padres de familia', 'value' => 'Falta de apoyo y compromiso de las madres y padres de familia'],[ 'text' => 'Falta de compromiso del personal del centro', 'value' => 'Falta de compromiso del personal del centro'],[ 'text' => 'Falta de asistencia técnica en la elaboración y aprobación de propuestas', 'value' => 'Falta de asistencia tecnica en la elaboracion y aprobacion de propuestas']];	 echo $this->Form->select('dificultades', $options, ['class'=>'form-control']);?>
	</div><br>
	<div class="form-group">
		<label>¿Cómo ha solucionado las dificultades para ejecutar las propuestas del Plan de Mejoramiento?</label>
		<?php echo $this->Form->input('solucion_dificultades', ['label' => false, 'class'=>'form-control', 'type' => 'textarea','rows'=>'3'] );?>
	</div><br>
	<div class="text-center">
		<?php echo $this->Form->button('Guardar Información', ['class'=>'btn btn-save btn-lg']);?>
	</div>
</div>
</div>



