
<?php

if( !isset($memos) ){
	$options_name = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	$options_id = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
		foreach ($cims as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->nombre;
		}?>

<h3 class="title2 text-center"> Registro datos de evaluación</h3>

<?php echo $this->Form->create($datosEv, ['url' => ['action' => 'add']] ); ?>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp">
		<fieldset>
			<legend>Datos personales</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('nro_folder', ['label' => ['text' => 'Número de folder'], 'class'=>'form-control', 'type' => 'number', 'max'=> '600', 'min' => '0','required'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Cargo al que postula</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Educadora', 'value' => 'Educadora'],[ 'text' => 'Manipuladora de alimentos', 'value' => 'Manipuladora de alimentos']]; echo $this->Form->select('cargo', $options, ['class'=>'form-control', 'id' => 'cargo', 'required']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('ci', ['label' => ['text' => 'Cédula de identidad (sólo número)'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('paterno', ['label' => ['text' => 'Apellido Paterno'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>	
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('materno', ['label' => ['text' => 'Apellido materno'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
			</div>	
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('fecha_nacimiento', ['label' => ['text' => 'Fecha de nacimiento'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('edad', ['label' => ['text' => 'Edad'], 'class'=>'form-control', 'type' => 'text', 'readonly'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('nro_hijos', ['label' => ['text' => 'Nro. de Hijos'], 'class'=>'form-control', 'type' => 'number','required', 'min' => '0', 'max' => '15', ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<label class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">Números de contacto</label>
				<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo '1. '.$this->Form->input('telf.0', ['label' => false, 'class'=>'form-control', 'type' => 'number', 'min'=>'0', 'required'] );?>
				</div>
				<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo '2. '.$this->Form->input('telf.1', ['label' => false, 'class'=>'form-control', 'type' => 'number', 'min'=>'0'] );?>
				</div>
				<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo '3. '.$this->Form->input('telf.2', ['label' => false, 'class'=>'form-control', 'type' => 'number', 'min'=>'0'] );?>
				</div>
				
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('direccion', ['label' => ['text' => 'Dirección (distrito, zona, calle, #)'], 'class'=>'form-control', 'type' => 'text','required'] );?>
			</div>

		</fieldset>
		<fieldset>
			<legend>Grado de instrucción</legend>
			<!-- Para educadoras -->
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 hidden" id='educadoras'>
				<label>Último grado de instricción alcanzado</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],['text'=>'Licenciatura', 'value'=>'Licenciatura'],['text'=>'Egresados de Universidad', 'value'=>'Egresados de Universidad'],['text'=>'De 6to a 10mo semestre de Univ.', 'value'=>'De 6to a 10mo semestre de Univ.'],['text'=>'De 1ro a 5to semestre de Univ.', 'value'=>'De 1ro a 5to semestre de Univ.'],['text'=>'Técnico superior, medio, básico', 'value'=>'Técnico superior, medio, básico'],['text'=>'Otros (Secretarias, Contadoras,  Tec. En aplicaciones)', 'value'=>'Otros'],['text'=>'Bachiller', 'value'=>'Bachiller'],['text'=>'Estudiante de nivel secundario', 'value'=>'Estudiante de nivel secundario']]; echo $this->Form->select('ult_grado_inst', $options, ['class'=>'form-control', 'id' => 'ult-grado-inst-educadoras']);?>
			</div>
			<!-- Para manipuladoras -->
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 hidden" id='manipuladoras'>
				<label>Último grado de instricción alcanzado</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],['text' => 'Estudios en Nutrición', 'value'=>'Estudios en Nutrición'],['text' => 'Estudios en Gastronomía', 'value'=>'Estudios en Gastronomía'],['text' => 'Cursos cortos (panadería, repostería, etc)', 'value'=>'Cursos cortos (panadería, repostería, etc)'],['text' => 'Bachiller', 'value'=>'Bachiller'],['text' => 'Estudiante de nivel secundario', 'value'=>'Estudiante de nivel secundario'],['text' => 'Estudiante de nivel primario', 'value'=>'Estudiante de nivel primario']]; echo $this->Form->select('ult_grado_inst', $options, ['class'=>'form-control', 'id' => 'ult-grado-inst-manipuladoras']);?>
			</div>
			<!-- Educadoras -->
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 u-grado-inst-carrera hidden">
				<?php echo $this->Form->input('ult_grado_inst_carrera', ['label' => ['text' => 'Último grado de instricción alcanzado (Carrera)'], 'class'=>'form-control', 'type' => 'text', 'list' => 'options'] );?>
				<datalist id="options">
	    			<option value="Ciencias de la educación">Ciencias de la educación</option>
	    			<option value="Parvulario">Parvulario</option>
	    			<option value="Trabajo social">Trabajo social</option>
	    			<option value="Psicología">Psicología</option>
	    			<option value="Aux. Enfermería">Aux. Enfermería</option>
				</datalist>
			</div>



			<!-- Manipuladoras -->
			<!-- <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Último grado de instricción alcanzado (Carrera)</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Parvulario', 'value' => 'Parvulario'],[ 'text' => 'xx', 'value' => 'xx'],[ 'text' => '', 'value' => ''],[ 'text' => '', 'value' => '']]; echo $this->Form->select('ult_grado_inst_carrera', $options, ['class'=>'form-control', 'id' => 'ult-grado-inst-carrera']);?>
			</div>
 -->
 			<!-- Educadoras -->
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 u-grado-inst-carrera hidden">
				<?php echo $this->Form->input('ult_grado_inst_lugar', ['label' => ['text' => 'Último grado de instricción alcanzado(Institución)'], 'class'=>'form-control', 'type' => 'text', 'list' => 'options2'] );?>
				<datalist id="options2">
	    			<option value="UMSA">UMSA</option>
	    			<option value="UPEA">UPEA</option>
	    			<option value="Inst. TBS">Inst. TBS</option>
	    			<option value="Inst. ZIBIATH">Inst. ZIBIATH</option>
	    			<option value="Escuela Normal Superior">Escuela Normal Superior</option>
				</datalist>
			</div>


			
		</fieldset>
	</div>

	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInDown">
		<fieldset>
			<legend>Experiencia laboral</legend>
 			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('exp_lab_gen_tiempo', ['label' => ['text' => 'General (En gestiones)'], 'class'=>'form-control', 'type' => 'number', 'min'=>'0', 'required'] );?>
			</div>
		<!-- 	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('exp_lab_gen_lugar', ['label' => ['text' => 'General (Lugar)'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
			</div> -->

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('exp_lab_esp_tiempo', ['label' => ['text' => 'Específica (En gestiones)'], 'class'=>'form-control', 'type' => 'number', 'min'=>'0', 'required'] );?>
			</div>
			<!-- <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('exp_lab_esp_lugar', ['label' => ['text' => 'Específica (Lugar)'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
			</div> -->

			<!-- <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<label>Experiencia laboral</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Menor a 3 gestiones de experiencia ', 'value' => 'Menor a 3 gestiones de experiencia '],[ 'text' => 'MAYOR a 3 gestiones de experiencia', 'value' => 'MAYOR a 3 gestiones de experiencia']]; echo $this->Form->select('experiencia_laboral', $options, ['class'=>'form-control', 'id' => 'experiencia-laboral', 'required']);?>
			</div> -->
		</fieldset>
		<fieldset>
			<legend>Datos adicionales</legend>
			
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('memos_contra', ['label' => ['text' => 'Memorándums en contra'], 'class'=>'form-control', 'type' => 'text', 'readonly'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Centro Infantil al que postula </label>
				<?php echo $this->Form->select('x', $options_name, ['class'=>'form-control', 'id'=>'cims']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('cim_postulacion.0', ['label' =>['text'=>' 1.'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('cim_postulacion.1', ['label' =>['text'=>' 2.'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('cim_postulacion.2', ['label' =>['text'=>' 3.'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
		</fieldset>
		<fieldset>
			<legend>Evaluación de desempeño</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Resultado</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Aprobado', 'value' => 'Aprobado'],[ 'text' => 'Reprobado', 'value' => 'Reprobado']]; echo $this->Form->select('ev_desempeno', $options, ['class'=>'form-control', 'id' => 'ev-desempeno', 'required']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('ev_desempeno_nota', ['label' => ['text' => 'Puntaje'], 'class'=>'form-control', 'type' => 'text', 'maxlength'=>'3', 'required'] );?>
			</div>
		</fieldset>
		<fieldset>
			<legend>DX</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('hab_soc', ['label' => ['text' => 'Habilidad social'], 'class'=>'form-control', 'type' => 'text', 'maxlength'=>'4', 'required'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('mot_lab', ['label' => ['text' => 'Motivación laboral'], 'class'=>'form-control', 'type' => 'text', 'maxlength'=>'4', 'required'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Comunicación</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Pasiva', 'value' => 'Pasiva'],[ 'text' => 'Agresiva', 'value' => 'Agresiva'], [ 'text' => 'Asertiva', 'value' => 'Asertiva']]; echo $this->Form->select('comunicacion', $options, ['class'=>'form-control', 'id' => 'comunicacion', 'required']);?>
			</div>
		</fieldset>
	</div>
	<br/><br/>
	<div class="text-center  animated ">
		<?php echo  $this->Form->button('Guardar', ['class' => 'btn btn-save btn-lg']); ?>
	</div>
</div>

<?php echo $this->Form->end(); ?>



<script type="text/javascript" charset="utf-8" async defer>
	$('#fecha-nacimiento').datepicker({
        	format: 'yyyy-mm-dd',
			autoclose: true,
			endDate: 'now',
			startView: 2
    });

	$('#ci').focusout(function(event) {
		//var ci = $(this).val();
		var data = [$(this).val()];
		$.ajax({
		    type: "POST",
		    url: "verifymemos",
		    data: { data },
		    beforeSend: function( data )
		    {
		        $('#loading').removeClass('hidden')                    
		    },
		    success:  function( data )
		    {
		        $('#msg-success').removeClass('hidden')
		    	$('#loading').addClass('hidden')
		    	$('#memos-contra').val(data);
		    	//$('#memos-contra').html(data);
		    	//$('#memos-contra').text(data);
		    },
		});
		return false;
	});

    $('#fecha-nacimiento').change(function(){
		var fecha_nacimiento = $(this).val();
		var hoy = fecha_actual('onlyDate');
		var edad_fam = edad( fecha_nacimiento, hoy );
		var edad_fam = edad_fam.split(".");
		//console.log(edad_fam[0]);
		$('#edad').val(edad_fam[0]); 
		//alert(edad_nino);

	});

    $('#cims').change(function(event) {
    	if($('#cim-postulacion-0').val() == ""){
    		$('#cim-postulacion-0').val($(this).val());
    	} else if($('#cim-postulacion-1').val() == ""){
    		$('#cim-postulacion-1').val($(this).val());
    	} else if($('#cim-postulacion-2').val() == ""){
    		$('#cim-postulacion-2').val($(this).val());
    	}
    });

    $('#cargo').change(function(event) {
    	if($(this).val() == "Educadora"){
    		$('div#educadoras').removeClass('hidden');
    		$('div#manipuladoras').addClass('hidden');
    		$('div.u-grado-inst-lugar').removeClass('hidden');
    		$('div.u-grado-inst-carrera').removeClass('hidden');

    	} else if($(this).val() == "Manipuladora de alimentos"){
    		$('div#manipuladoras').removeClass('hidden');
    		$('div#educadoras').addClass('hidden');
    		$('div.u-grado-inst-lugar').addClass('hidden');
    		$('div.u-grado-inst-carrera').addClass('hidden');
    	}
    });


     $('#hab-soc, #mot-lab, #ev-desempeno-nota').keyup(function(e) {
	 	var key = e.which ? e.which : event.keyCode;
         var value = $(this).val(); 
         if( (key >= 48 && key <= 57) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 110 || key == 188 || key == 190) ){
           e.preventDefault();
           $(this).val(value.replace(".",","));
         }else if(key >= 37 && key <= 40 || key == 8 || key == 46){
         	return false;
         }else {
         	$(this).val(value.replace(/[A-Za-z_~\-!@#\$%\^&\*\(\)]+$/gim,""));
         }
	 });
</script>
<?php }   ?>