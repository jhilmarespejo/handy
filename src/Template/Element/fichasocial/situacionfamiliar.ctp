
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
	<!--<form novalidate name="userForm">-->
	<div class="alert alert-success hidden" role="alert"id="msg-success" >
		<i class="fa fa-check-circle-o" aria-hidden="true"></i> &nbsp;&nbsp; Correcto.
	</div>		

	<div class="group3 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInDown">
		<!-- <?php echo $this->Form->create($sitFam, ['url' => ['action' => 'saveSituacionFamiliar'], 'id' => 'frm-sit-fam']);?> -->
		<fieldset>
			<legend>Situación familiar</legend>

			<?php echo $this->Form->hidden('id_nino', ['id'=>'id-nino']);?>
			<div class="form-group">
				<label for="">Actualmente el niñ@ vive con:</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Madre', 'value' => 'Madre' ],[ 'text' => 'Padre', 'value' => 'Padre'],[ 'text' => 'Ambos', 'value' => 'Ambos'],[ 'text' => 'Hermano(a)', 'value' => 'Hermano(a)'],[ 'text' => 'Abuelo(a)', 'value' => 'Abuelo(a)'],[ 'text' => 'Tio(a)', 'value' => 'Tio(a)'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('nino_vive_con', $options, ['class'=>'form-control', 'id'=>'nino-vive-con']);?>
			</div>
			<?php echo $this->Form->hidden('valor_nino_vive_con', ['id'=>'valor-nino-vive-con']);?>
			<?php echo $this->Form->input('nino_vive_con_otro', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text', 'id' => 'nino-vive-con-otro', 'disabled'] );?>
			<div class="form-group">
				<label for="">Razones de la ausencia de la madre</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Estudio', 'value' => 'Estudio'],[ 'text' => 'Trabaja en otra ciudad', 'value' => 'Trabaja en otra ciudad'],[ 'text' => 'Trabaja en el extranjero', 'value' => 'Trabaja en el extranjero'],[ 'text' => 'Abandono', 'value' => 'Abandono'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('fausencia_madre', $options, ['class'=>'form-control', 'id'=>'ausencia-madre']);?>
			</div>

			<?php echo $this->Form->input('ausencia_madre_otro', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text','id' => 'ausencia-madre-otro', 'disabled'] );?>
			<?php echo $this->Form->hidden('valor_ausencia_madre', ['id'=>'valor-ausencia-madre']);?>


			<div class="form-group">
				<label for="">Razones de la ausencia del padre</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Estudio', 'value' => 'Estudio'],[ 'text' => 'Trabaja en otra ciudad', 'value' => 'Trabaja en otra ciudad'],[ 'text' => 'Trabaja en el extranjero', 'value' => 'Trabaja en el extranjero'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Abandono', 'value' => 'Abandono'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('ausencia_padre', $options, ['class'=>'form-control', 'id'=>'ausencia-padre']);?>
			</div>
			<?php echo $this->Form->hidden('valor_ausencia_padre', ['id'=>'valor-ausencia-padre']);?>

			<?php echo $this->Form->input('ausencia_padre_otro', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text','id' => 'ausencia-padre-otro', 'disabled'] );?>

			<div class="form-group">
				<label for="">Razones de la ausencia de ambos progenitores</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Estudio', 'value' => 'Estudio'],[ 'text' => 'Trabaja en otra ciudad', 'value' => 'Trabaja en otra ciudad'],[ 'text' => 'Trabaja en el extranjero', 'value' => 'Trabaja en el extranjero'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('ausencia_ambos', $options, ['class'=>'form-control', 'id'=>'ausencia-ambos']);?>
			</div>

			<?php echo $this->Form->hidden('valor_ausencia_ambos', ['id'=>'valor-ausencia-ambos']);echo $this->Form->input('ausencia_ambos_otro', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text','id' => 'ausencia-ambos-otro', 'disabled'] );?>

			<div class="form-group">
				<label>Situación conyugal actual</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Casados', 'value' => 'Casados'],[ 'text' => 'Convivientes', 'value' => 'Convivientes'],[ 'text' => 'Separados', 'value' => 'Separados'],[ 'text' => 'Solteros', 'value' => 'Solteros'],[ 'text' => 'Viud@', 'value' => 'Viudo']];	echo $this->Form->select('situacion_conyugal', $options, ['class'=>'form-control']);?>

				<label for="">Ambiente familiar</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Armonioso', 'value' => 'Armonioso'],[ 'text' => 'Conflictivo', 'value' => 'Conflictivo'],[ 'text' => 'Indiferente', 'value' => 'Indiferente']];	echo $this->Form->select('ambiente_familiar', $options, ['class'=>'form-control', 'id'=>'ambiente-familiar']);?>
				<?php echo $this->Form->hidden('valor_ambiente_familiar', ['id'=>'valor-ambiente-familiar']);?>
			</div>



			<fieldset>
				<legend>Tipo de familia</legend>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<?php echo $this->Form->input('numero_hijos', ['label' => ['text' => 'Número de hijos/as'], 'class'=>'form-control', 'type' => 'number','id' => 'numero-hijos', 'max' => '20', 'min' => '0'] ); echo $this->Form->hidden('valor_anumero_hijos', ['id'=>'valor-numero-hijos']);?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Tipo de familia</label> 
					<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Nuclear', 'value' => 'Nuclear'], [ 'text' => 'Monoparental', 'value' => 'Monoparental'],[ 'text' => 'Extendida', 'value' => 'Extendida'], [ 'text' => 'Reconstituida', 'value' => 'Reconstituida']]; echo $this->Form->select('tipo_familia', $options, ['class'=>'form-control', 'id'=>'tipo-familia']);echo $this->Form->hidden('valor_tipo_familia', ['id'=>'valor-tipo-familia']); ?>
				</div>


			</fieldset><br>

			<div class="text-center">
				<!-- <?php echo $this->Form->button(__('Siguiente >>>'), ['class'=>'btn btn-save btn-lg']);
				echo $this->form->end(); ?> -->
			</div>
		</fieldset>
	</div> <!-- end div.group3-->

	<!----------- FAMILIARES  ---------->
	<div class="group4 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInDown">
		<fieldset>
			<legend>Familiares</legend>
			<?php 
			echo $this->Form->hidden('id_nino', ['id'=>'id-nino']);

			echo $this->Form->input('parentesco', ['label' => ['text' => 'Relación de parentesco'], 'class'=>'form-control', 'type'=>'text', 'list' => 'opts'] ); ?>
			<datalist id="opts">
				<option value="Padre">Padre</option>
				<option value="Madre">Madre</option>
				<option value="Hermano(a)">Hermano(a)</option>
				<option value="Abuelo(a)">Abuelo(a)</option>
				<option value="Tio(a)">Tio(a)</option>
			</datalist>


			<?php 
			echo $this->Form->input('nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type'=>'text'] ); ?>
			<div class="form-group col-xs-9 col-sm-5 col-md-6 col-lg-6">
				<?php echo $this->Form->input('paterno', ['label' => ['text' => 'Apellido Paterno'], 'class'=>'form-control', 'type'=>'text'] ); ?>
			</div>
			<div class="form-group col-xs-9 col-sm-5 col-md-6 col-lg-6">
				<?php echo $this->Form->input('materno', ['label' => ['text' => 'Apellido Materno'], 'class'=>'form-control', 'type'=>'text'] );  ?>
			</div>
			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-6">
				<?php echo $this->Form->input('ci', ['label' => ['text' => 'Cédula de Identidad'], 'class'=>'form-control ', 'type'=>'text'] );?>
			</div>
			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-6">
				<label for="">Lugar de expedición</label>
				<?php $dep = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'La Paz', 'value' => 'lp' ],[ 'text' => 'Oruro', 'value' => 'or'],[ 'text' => 'Potosí', 'value' => 'pt'],[ 'text' => 'Cochabamba', 'value' => 'cb'],[ 'text' => 'Chuquisaca', 'value' => 'ch'],[ 'text' => 'Tarija', 'value' => 'tj'],[ 'text' => 'Pando', 'value' => 'pa'],[ 'text' => 'Beni', 'value' => 'bn'],[ 'text' => 'Santa Cruz', 'value' => 'sc']];
					echo $this->Form->select('ci_expedido', $dep, ['class'=>'form-control']);?>
			</div>
			
			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-6">
				<?php echo $this->Form->input('fecha_nacimiento', ['label' => ['text' => 'Fecha nacimiento'], 'class'=>'form-control fecha_nacimiento', 'type'=>'text'] );
				?>									
			</div>
			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-3">
				<?php echo $this->Form->input('xxxxx.edad', ['label' => ['text' => 'Edad'], 'class'=>'form-control edad_familiar', 'type'=>'text'] );
				echo $this->Form->hidden('valor_edad', ['id'=>'valor-edad']);
				?>									
			</div>
			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-3">
				<label for="">Sexo</label>
				<?php 
				$options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Femenino', 'value' => 'f'], [ 'text' => 'Masculino', 'value' => 'm']];	
				echo $this->Form->select('sexo', $options, ['class'=>'form-control', 'id'=>'sexo']);
				?>
			</div>

			<?php echo $this->Form->input('direccion', ['label' => ['text' => 'Dirección [ Zona, Calle, # ]'], 'class'=>'form-control', 'type'=>'text'] ); ?>

			<div class="form-group col-xs-9 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('telefono', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type'=>'phone'] );
				?>									
			</div>
			<div class="form-group col-xs-9 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('celular', ['label' => ['text' => 'Celular'], 'class'=>'form-control', 'type'=>'phone'] );
				?>									
			</div>
			<?php echo $this->Form->input('ocupacion', ['label' => ['text' => 'Profesión u ocupación'], 'class'=>'form-control', 'type'=>'text'] );
			echo $this->Form->input('lugar_trabajo', ['label' => ['text' => 'Lugar de trabajo'], 'class'=>'form-control', 'type'=>'text'] );?>
			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-6">
				<label for="">Grado de instruci&oacute;n</label>

				<?php 
				$options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Sin Educacion', 'value' => 'Sin Educacion'], [ 'text' => 'Primaria', 'value' => 'Primaria'], [ 'text' => 'Secundaria', 'value' => 'Secundaria'], [ 'text' => 'Técnico', 'value' => 'Tecnico'], [ 'text' => 'Universitario/superior', 'value' => 'Universitario/superior']];	
				echo $this->Form->select('grado_instruccion', $options, ['class'=>'form-control', 'id'=>'grado-instruccion']);
				echo $this->Form->hidden('valor_grado_instruccion', ['id'=>'valor-grado-instruccion']);
				?>
			</div>

			<div class="form-group col-xs-9 col-sm-5 col-md-5 col-lg-6">
				<label for="">Tipo de Trabajo</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'], [ 'text' => 'Permanente', 'value' => 'Permanente'], [ 'text' => 'Eventual', 'value' => 'Eventual'], [ 'text' => 'Desempleado', 'value' => 'Desempleado'], [ 'text' => 'Independiente formal', 'value' => 'Independiente/formal'], [ 'text' => 'Independiente/informal', 'value' => 'Independiente/informal']];	
				echo $this->Form->select('trabajo', $options, ['class'=>'form-control', 'id'=>'ocupacion']); ?>
			</div>
			<?php ?>

			<?php echo $this->Form->input('ingresos', ['label' => ['text' => 'Ingresos'], 'class'=>'form-control', 'type'=>'text'] ); 
			echo $this->Form->hidden('valor_ingresos', ['id'=>'valor-ingresos']);

			echo $this->Form->input('caracteristicas_trabajo_colegio', ['label' => ['text' => '	Características del trabajo/colegio'], 'class'=>'form-control', 'type'=>'text'] ); 
			?><br>
			<div class="text-center" >
				<?php echo $this->Form->button('Adicionar familiar', ['class'=>'btn btn-warning btn-sm']);
				//echo $this->form->end();?>		
				<br>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="result"></div>
				<br>
			</div>
		</fieldset>
	</div><!-- end ggroup 4-->
	<div class="text-center">
		<?php echo $this->Html->tag('label','Siguiente >>>', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-sit-familiar'] ); ?>
	</div>
</div>

<script type="text/javascript">

jQuery(document).ready(function ($) {

	$('#submit-sit-familiar').click(function(event) {
		if( true /*campos correctos*/ ){
			$('#msg-box-danger').addClass('hidden');
			$('.sit_familiar').removeClass('active');
			$('#sit_familiar').removeClass('active');
			$('.vivienda').addClass('active');
			$('#vivienda').addClass('active');
			/*$('#sit_familiar *').removeAttr('disabled');*/
		}else{
			$('#msg-box-danger').addClass('hidden');
			$('#msg-box-danger').removeClass('hidden');
		}
	});

 	$('.fecha_nacimiento').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        endDate: 'now',
        startView: 2
    });
    $('.fecha_nacimiento').change(function(){
		var fecha_nacimiento = $('.fecha_nacimiento').val();
		var hoy = fecha_actual('onlyDate');
		var edad_familiar = edad( fecha_nacimiento, hoy, 'anios' );
		console.log(edad_familiar);
		$('.edad_familiar').val(edad_familiar);
		//alert(edad_nino);
	});

	$('#parentesco').focusout(function(){
		console.log($(this).val());
		if( $(this).val() == 'Padre' ){
			$('#sexo > option[value="m"]').attr('selected', 'selected');
		}else if( $(this).val() == 'Madre' ){
			$('#sexo > option[value="f"]').attr('selected', 'selected');
		} 
	});
});
</script>