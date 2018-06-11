	<!-- <form method="post" accept-charset="utf-8" action="/cake/fichasocial/saveDatosNino">-->
<?php
$options = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	

	foreach ($cims as $key => $cim) {
		$options[$key+1]['text'] = ''.$cim->nombre.'' ;
		$options[$key+1]['value'] = $cim->id_cim;
	} ?>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp">
		<!-- <?php echo $this->Form->create($datosNino, ['url' => ['action' => 'saveDatosNino']]); ?>  -->
		<fieldset>
			<div class="form-group">
			<label>Centro Infantil</label>
			<?php echo $this->Form->select('id_cim', $options, ['class'=>'form-control', 'id'=>'id-centro-infantil']);?>
			</div>
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('id_nino', ['label' => ['text' => 'Código niña(o)'], 'class'=>'form-control', 'type'=>'text'] );?>
			</div>
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('sala', ['label' => ['text' => 'Sala'], 'class'=>'form-control', 'type'=>'text'] ); ?>
			</div>
			
			<?php 
			echo $this->Form->input('fecha_registro', ['label' => ['text' => 'Fecha de Registro'], 'class'=>'form-control', 'type'=>'text'] );
			echo $this->Form->input('paterno', ['label' => ['text' => 'Apellido Paterno'], 'class'=>'form-control', 'type'=>'text'] );
			echo $this->Form->input('materno', ['label' => ['text' => 'Apellido Materno'], 'class'=>'form-control', 'type'=>'text'] );
			echo $this->Form->input('nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type'=>'text'] );?>		

			<div class="form-group col-xs-12 col-sm-10 col-md-6 col-lg-6">
			<?php echo $this->Form->input('lugar_nacimiento', ['label' => ['text' => 'Lugar de nacimiento'], 'class'=>'form-control', 'type'=>'text', ] ); ?>
			</div>

			<div class="form-group col-xs-12 col-sm-10 col-md-6 col-lg-6">
			<?php echo $this->Form->input('fecha_nacimiento', ['label' => ['text' => 'Fecha de nacimiento'], 'class'=>'form-control', 'type'=>'text', ] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-4 col-md-6 col-lg-6">
				<?php echo $this->Form->input('edad_nino', ['label' => ['text' => 'Edad [años.meses]'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>		
			<div class="form-group col-xs-12 col-sm-4 col-md-6 col-lg-6">
				<?php $sexo = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Femenino', 'value' => 'Femenino' ],[ 'text' => 'Masculino', 'value' => 'Masculino']];	?>
				<label for="">Sexo</label> 
				<?php echo $this->Form->select('sexo', $sexo, ['class'=>'form-control', 'id'=>'sexo']);?>
			</div>	
		</fieldset>

		<!-- fieldset para la direccion de la vivienda-->
		<fieldset class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<legend>Ubicaci&oacute;n de la vivienda</legend>
			<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
				<?php echo $this->Form->input('municipio', ['label' => ['text' => 'Municipio'], 'class'=>'form-control', 'type' => 'text', 'value'=>'El Alto'] ); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
				<?php echo $this->Form->input('macrodistrito', ['label' => ['text' => 'Distrito'], 'class'=>'form-control', 'type' => 'number', 'max'=>'14', 'min'=>'0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-4">
				<?php echo $this->Form->input('zona_barrio', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type'=>'text', 'list' => 'options'] ); ?>
				<datalist id="options">
	    			<option value="1ro de Mayo">1ro de Mayo</option>
	    			<option value="16 de Julio">16 de Julio</option>
	    			<option value="Alto Lima">Alto Lima</option>
	    			<option value="Ballivian">Ballivián</option>
	    			<option value="Complejo">Complejo</option>
	    			<option value="Convifag">Convifag</option>
	    			<option value="Ciudad Satelite">Ciudad Satélite</option>
	    			<option value="El Kenko">El Kenko</option>
	    			<option value="German Busch">Germán Busch</option>
	    			<option value="Kollpani">Kollpani</option>
	    			<option value="Mercedario">Mercedario</option>
	    			<option value="Nuevos Horizontes">Nuevos Horizontes</option>
	    			<option value="Cupilupaca">Cupilupaca</option>
	    			<option value="Rio Seco">Río Seco</option>
	    			<option value="Senkata">Senkata</option>
	    			<option value="Santiago I">Santiago I</option>
	    			<option value="Santiago II">Santiago II</option>
	    			<option value="Villa Adela">Villa Adela</option>
	    			<option value="Villa Alemania,">Villa Alemania,</option>
	    			<option value="Villa Exaltacion">Villa Exaltación</option>
	    			<option value="Villa Dolores">Villa Dolores</option>
	    			<option value="Villa Ingavi">Villa Ingavi</option>
	    			<option value="Villa Bolivar A">Villa Bolívar A</option>
	    			<option value="Villa Bolivar B">Villa Bolívar B</option>
	    			<option value="Villa Bolivar C">Villa Bolívar C</option>
	    			<option value="Villa Bolivar D">Villa Bolívar D</option>
	    			<option value="Villa Bolivar E">Villa Bolívar E</option>
				</datalist>


			</div>
			<div class="form-group ">
				<?php echo $this->Form->input('calle_avenida', ['label' => ['text' => 'Calle/avenida/#'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<!--<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-6">
				<?//php echo $this->Form->input('num_vivienda', ['label' => ['text' => 'Número de la vivienda'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>-->
		</fieldset>
	</div><!-- end class group 1  -->

	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInLeft">
		<fieldset>
			<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-6" >
			<label for="">Certificado de Nacimiento</label> 
			<?php $certificado = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si preseta', 'value' => 's' ],[ 'text' => 'No preseta', 'value' => 'n']];	?>
			<?php echo $this->Form->select('certificado_nacimiento', $certificado, ['class'=>'form-control', 'id'=>'certificado-nacimiento']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-6" >
				<label for="">C&eacute;dula de identidad</label> 
				<?php $ci = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si preseta', 'value' => 's' ],[ 'text' => 'No preseta', 'value' => 'n']];	?>
				<?php echo $this->Form->select('ci', $ci, ['class'=>'form-control', 'id'=>'ci']);?>
				
			</div>	
			<div class="form-group  col-xs-12 col-sm-10 col-md-4 col-lg-6">
				<?php echo $this->Form->input('num_ci', ['label' => ['text' => 'Número de cédula de indentidad'], 'class'=>'form-control', 'type' => 'text', 'disabled'] );?>
			</div>
			<div class="form-group  col-xs-12 col-sm-10 col-md-4 col-lg-6">
				<label for="">Expedido en:</label>
				
				<?php $dep = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'La Paz', 'value' => 'lp' ],[ 'text' => 'Oruro', 'value' => 'or'],[ 'text' => 'Potosí', 'value' => 'pt'],[ 'text' => 'Cochabamba', 'value' => 'cb'],[ 'text' => 'Chuquisaca', 'value' => 'ch'],[ 'text' => 'Tarija', 'value' => 'tj'],[ 'text' => 'Pando', 'value' => 'pa'],[ 'text' => 'Beni', 'value' => 'bn'],[ 'text' => 'Santa Cruz', 'value' => 'sc']];	?>
				<?php echo $this->Form->select('ci_expedido', $dep, ['class'=>'form-control', 'disabled', 'id'=>'ci-expedido']);?>

			</div>	
			<div class="form-group" >
				<label for="">Seguro de salud</label> 
				<!--<select class="form-control" id="tipo_seguro_salud" name="tipo_seguro_salud">
					<option value="" selected disabled></option>
					<option value="Caja Nacional">Caja Nacional</option>
					<option value="Seguro Universitario">Seguro Universitario</option>
					<option value="Caja Petrolera">Caja Petrolera</option>
					<option value="Seguro Ganadero">Seguro Ganadero</option>
					<option value="Seguro Publico (SUMI)">Seguro Publico (SUMI)</option>
					<option value="Otro">Otro</option>
				</select>-->
				<?php $seg = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Caja Nacional', 'value' => 'Caja Nacional' ],[ 'text' => 'Seguro Universitario', 'value' => 'Seguro Universitario'],[ 'text' => 'Caja Petrolera', 'value' => 'Caja Petrolera'],[ 'text' => 'Seguro Ganadero', 'value' => 'Seguro Ganadero'],[ 'text' => 'Seguro Publico (SUMI)', 'value' => 'Seguro Publico (SUMI)'],[ 'text' => 'Otro', 'value' => 'Otro']];	?>
				<?php echo $this->Form->select('tipo_seguro_salud', $seg, ['class'=>'form-control', 'id'=>'tipo-seguro-salud']);?>

			</div>
			<div class="form-group">
				<!--<label for="">Otro seguro de salud</label> 
				<input class="form-control" type="text" id="otro_tipo_seguro_salud" name="otro_tipo_seguro_salud" disabled />-->
				<?php echo $this->Form->input('otro_tipo_seguro_salud', ['label' => ['text' => 'Otro seguro de salud'], 'class'=>'form-control', 'type' => 'text', 'disabled'] );?>
			</div>
			<!--<input type="hidden" value="" id="valor_tipo_seguro_salud" name="valor_tipo_seguro_salud" />-->
			<?php echo $this->Form->hidden('valor_tipo_seguro_salud', ['id'=>'valor-tipo-seguro-salud']);?>

			<!--<input type="hidden" value="" id="valor_carnet_vacunas" name="valor_carnet_vacunas" />-->
			<?php echo $this->Form->hidden('valor_carnet_vacunas', ['id'=>'valor-carnet-vacunas']);?>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-6">
				<label for="">Carnet de vacunas</label> 
				<?php $seg = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si presenta', 'value' => 'Si' ],[ 'text' => 'No presenta', 'value' => 'No']];	?>
				<?php echo $this->Form->select('carnet_vacunas', $seg, ['class'=>'form-control', 'id'=>'carnet-vacunas']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-4 col-lg-3">
				<!--<label for="">Peso</label> 
				<input class="form-control" type="text" id="peso" name="peso"  />-->
				<?php echo $this->Form->input('peso', ['label' => ['text' => 'Peso'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>	
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-3">
				<!--<label for="">Talla</label> 
				<input class="form-control" type="text" id="talla" name="talla"/>-->
				<?php echo $this->Form->input('talla', ['label' => ['text' => 'Talla'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>	

			<!--<div class="form-group">
				<label for="">DX?</label> 
				<input class="form-control" type="text" id="dk" name="dk"/>
			</div>	-->
			<?php echo $this->Form->input('dk', ['label' => ['text' => 'DK?'], 'class'=>'form-control', 'type' => 'text'] );?>
			<!--<input type="hidden" value="" id="valor_vacunacion_completa" name="valor_vacunacion_completa" />-->
			<?php echo $this->Form->hidden('valor_vacunacion_completa', ['id'=>'valor-vacunacion-completa']);?>


			<div class="form-group">
				<label for="">Esquema de vacunas completo</label> 
				<!--<select class="form-control" id="vacunacion_completa" name="vacunacion_completa">
					<option value="" selcted disabled ></option>
					<option value="Si">Si</option>
					<option value="No">No</option>
				</select> -->
				<?php $esq = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	
				echo $this->Form->select('vacunacion_completa', $esq, ['class'=>'form-control', 'id'=>'vacunacion-completa']);?>
			</div>

			<!--<input type="hidden" value="" id="valor_tipo_discapacidad" name="valor_tipo_discapacidad" />-->
			<?php echo $this->Form->hidden('valor_tipo_discapacidad', ['id'=>'valor-tipo-discapacidad']);?>
			<div class="form-group">
				<label for="">El niño presenta algun grado de discapacidad</label> 
				<!--<select class="form-control" id="tipo_discapacidad" name="tipo_discapacidad">
					<option value="" selected disabled></option>
					<option value="Si">Si presenta</option>
					<option value="No">No presenta</option>
				</select> -->
				<?php $dis = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si presenta', 'value' => 'Si' ],[ 'text' => 'No presenta', 'value' => 'No']];	
				echo $this->Form->select('tipo_discapacidad', $dis, ['class'=>'form-control', 'id'=>'tipo-discapacidad']);?>
			</div>
			<!--<div class="form-group">-->
				<!--<label for="">Especifique</label> 
				<input class="form-control" type="text" id="discapacidad" name="discapacidad" disabled />-->
				<?php echo $this->Form->input('discapacidad', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text','disabled'] );?>
			<!--</div>-->
			<br>
		</fieldset>
	</div> <!-- end class group 2  -->
</div>

<div class="text-center">
	<?php echo $this->Html->tag('label','Siguiente >>>', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-datos-nino'] ); ?>
</div>
	<!-- <input type="hidden" data-ng-model='tempUser.id'>  -->

<script type="text/javascript">
jQuery(document).ready(function ($) {

	$('#submit-datos-nino').click(function(event) {
		if( true /*campos correctos*/ ){
			$('#msg-box-danger').addClass('hidden');
			$('.datos_nino').removeClass('active');
			$('#datos_nino').removeClass('active');
			$('.sit_familiar').addClass('active');
			$('#sit_familiar').addClass('active');
			/*$('#sit_familiar *').removeAttr('disabled');*/
		}else{
			$('#msg-box-danger').addClass('hidden');
			$('#msg-box-danger').removeClass('hidden');
		}
	});

	var hoy = fecha_actual('complete');
    $('#fecha-registro').val(hoy);

    $('#fecha-nacimiento').datepicker({
    	format: 'yyyy-mm-dd',
    	autoclose: true,
		startView: 2,
		endDate: 'now'
    });

	$('#fecha-nacimiento').change(function(){
		var fecha_nacimiento = $('#fecha-nacimiento').val();
		var hoy = fecha_actual('onlyDate');
		var edad_nino = edad( fecha_nacimiento, hoy );
		$('#edad-nino').val(edad_nino);
	});

	$('#ci').change(function(){
		if ( $("#ci").val() == 's' ) {
			$("#num-ci").removeAttr('disabled');
			$("#ci-expedido").removeAttr('disabled');
		}
		else {
			$("#num-ci").attr('disabled', 'disabled');
			$("#ci-expedido").attr('disabled', 'disabled');
		}
	});

	$('#tipo-seguro-salud').change(function(){
		if($('#tipo-seguro-salud').val() == 'Otro'){
			$("#otro-tipo-seguro-salud").removeAttr('disabled');
		} else{
			$("#otro-tipo-seguro-salud").attr('disabled', 'disabled');
		}
	});

	$('#tipo-discapacidad').change(function(){
		if ($('#tipo-discapacidad').val() == 'si') {
			$("#discapacidad").removeAttr('disabled');
		} else{
			$("#discapacidad").attr('disabled', 'disabled');
		}

	});
		

});
</script>  