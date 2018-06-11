<h3 class="title2 text-center"> Edicion de datos del Personal </h3>

<?php 
	$options = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];
	foreach ($cims as $key => $cim) {
		$options[$key+1]['text'] = $cim->nombre ;
		$options[$key+1]['value'] = $cim->id_cim;
	}
?>

<br>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

<?php echo $this->Form->create($personal); ?>

<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInLeft">
	<fieldset>
		<legend>Datos generales</legend>
		<div class="form-group">
			<label>Centro Infantil</label>
			<?php echo $this->Form->select('id_cim', $options, ['class'=>'form-control', 'id'=>'id-centro-infantil']);
			echo $this->Form->hidden('id', ['value'=>$personal->id]);
			?>

		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<label>Cargo <br>&nbsp;</label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Responsable', 'value' => 'Responsable'],[ 'text' => 'Educadora', 'value' => 'Educadora'],[ 'text' => 'Manipuladora', 'value' => 'Manipuladora'] ];
			echo $this->Form->select('cargo', $options, ['class'=>'form-control', 'id'=>'cargo']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<label>¿ Con qué grupo etáreo está trabajando?</label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Lactantes', 'value' => 'Lactantes'],[ 'text' => 'Pre infantes', 'value' => 'Pre infantes'],[ 'text' => 'Infantes', 'value' => 'Infantes'] ];
			echo $this->Form->select('grupo_etareo', $options, ['class'=>'form-control', 'id'=>'grupo-etareo']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<label>Categoría</label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Nueva', 'value' => 'Nueva'],[ 'text' => 'Antigua', 'value' => 'Antigua'] ];
			echo $this->Form->select('categoria', $options, ['class'=>'form-control', 'id'=>'categoria']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php echo $this->Form->input('fecha_ingreso', ['label' => ['text' => 'Fecha de ingreso'], 'class'=>'form-control', 'type' => 'date'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php echo $this->Form->input('antiguedad', ['label' => ['text' => 'Años de antiguedad'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<label>Resultados Evaluación de Desempeño</label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Bueno', 'value' => 'Bueno'],[ 'text' => 'Regular', 'value' => 'Regular'],[ 'text' => 'Mal', 'value' => 'Mal'] ];
			echo $this->Form->select('evaluacion', $options, ['class'=>'form-control', 'id'=>'evaluacion']);?>
		</div>
	</fieldset><br>
	<fieldset>
		<legend>Identificación</legend>
		<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php echo $this->Form->input('nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<?php echo $this->Form->input('paterno', ['label' => ['text' => 'Ap. Paterno'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<?php echo $this->Form->input('materno', ['label' => ['text' => 'Ap. Materno'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php echo $this->Form->input('fecha_nacimiento', ['label' => 'Fecha de nacimiento', 'minYear' => date('Y') - 75,'maxYear' => date('Y') - 18, 'class'=>'form-control', 'type' => 'date',] );?>
		</div>
		<div class="form-group col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<?php echo $this->Form->input('ci', ['label' => ['text' => 'Num. CI'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<label>Exp.</label>
			<?php $dep = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'La Paz', 'value' => 'lp' ],[ 'text' => 'Oruro', 'value' => 'or'],[ 'text' => 'Potosí', 'value' => 'pt'],[ 'text' => 'Cochabamba', 'value' => 'cb'],[ 'text' => 'Chuquisaca', 'value' => 'ch'],[ 'text' => 'Tarija', 'value' => 'tj'],[ 'text' => 'Pando', 'value' => 'pa'],[ 'text' => 'Beni', 'value' => 'bn'],[ 'text' => 'Santa Cruz', 'value' => 'sc']];	?>
			<?php echo $this->Form->select('ci_expedido', $dep, ['class'=>'form-control', 'id'=>'ci-expedido']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<label>Estado civil</label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Soltera', 'value' => 'Soltera'],[ 'text' => 'Casada', 'value' => 'Casada'],[ 'text' => 'Conviviente', 'value' => 'Conviviente'],[ 'text' => 'Divorciada', 'value' => 'Divorciada'],[ 'text' => 'Viuda', 'value' => 'Viuda'] ];
			echo $this->Form->select('estado_civil', $options, ['class'=>'form-control', 'id'=>'estado-civil']);?>
		</div>

		<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php echo $this->Form->input('num_hijos', ['label' => ['text' => 'Cantidad de hijos'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('hijos_cim', ['label' => ['text' => 'Cantidad de hijos en CIM'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label>¿Becados? </label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No'] ];
			echo $this->Form->select('hijos_becados', $options, ['class'=>'form-control', 'id'=>'hijos-becados']);?>
		</div>
	</fieldset>

</div> <!--END GROUP 1-->

<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInRight">
	<fieldset>
		<legend>Ubicación del domicilio</legend>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('distrito', ['label' => ['text' => 'Distrito Nro.'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('zona', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type'=>'text', 'list' => 'options'] ); ?>
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
		<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo $this->Form->input('direccion', ['label' => ['text' => 'Dirección'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('fono', ['label' => ['text' => 'Num. Teléfono'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('num_cel', ['label' => ['text' => 'Num. Celular'], 'class'=>'form-control', 'type' => 'text'] );?>
		</div>
	</fieldset><br>
	<fieldset>
		<legend>Información general</legend>
		<?php $idiomas = (!empty($personal->idiomas))? explode(', ', $personal->idiomas):array(); ?>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label>Idiomas</label>
			<?//php $options = ['Castellano' => 'Castellano', 'Quechua' => 'Quechua','Aymara' => 'Aymara','Ingles' => 'Inglés', 'Otro' => 'Otro' ];
			//echo $this->Form->select( 'idiomas', $options, ['multiple' => 'checkbox'] ); ?>

			<div class="checkbox">
					<label for="idiomas-castellano">
						<input type="checkbox" <?php echo (in_array("Castellano", $idiomas, true))? 'checked="checked"' :'' ; ?>  name="idiomas[]" value="Castellano" id="idiomas-castellano">Castellano
					</label>
				</div>

				<div class="checkbox">
					<label for="idiomas-quechua">
						<input type="checkbox" <?php echo (in_array("Quechua", $idiomas, true))? 'checked="checked"' :'' ; ?> name="idiomas[]" value="Quechua" id="idiomas-quechua">Quechua
					</label>
				</div>

				<div class="checkbox">
					<label for="idiomas-aymara">
						<input type="checkbox" <?php echo (in_array("Aymara", $idiomas, true))? 'checked="checked"' :'' ; ?> name="idiomas[]" value="Aymara" id="idiomas-aymara">Aymara
					</label>
				</div>

				<div class="checkbox">
					<label for="idiomas-guarani">
						<input type="checkbox" <?php echo (in_array("Ingles", $idiomas, true))? 'checked="checked"' :'' ; ?> name="idiomas[]" value="Ingles" id="idiomas-ingles">Ingles
					</label>
				</div>
				<div class="checkbox">
					<label for="idiomas-guarani">
						<input type="checkbox" <?php echo (in_array("Otro", $idiomas, true))? 'checked="checked"' :'' ; ?> name="idiomas[]" value="Otro" id="idiomas-otro">Otro
					</label>
				</div>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('otro_idioma', ['label' => ['text' => 'Otro idioma'], 'class'=>'form-control', 'type' => 'text'] ); ?>
		</div>

		<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Grado de instrucción</label>
				<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Ninguno', 'value' => 'Ninguno'],['text' => 'Primaria', 'value' => 'Primaria'],['text' => 'Secundaria', 'value' => 'Secundaria'],['text' => 'Bachiller', 'value' => 'Bachiller'],['text' => 'Estudiante Univ', 'value' => 'Estudiante univ'],['text' => 'Técnico superior', 'value' => 'Tecnico superior'],['text' => 'Egresado', 'value' => 'Egresado'],['text' => 'Licenciatura', 'value' => 'Licenciatura'] ];
				echo $this->Form->select('grado_instruccion', $options, ['class'=>'form-control', 'id'=>'grado-instruccion']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('grado_instruccion_detalle', ['label' => ['text' => '
				Especificar'], 'class'=>'form-control', 'type' => 'text'] ); ?>
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<?php echo $this->Form->input('experiencia_laboral', ['label' => ['text' => '
				Tiempo de experiencia laboral'], 'class'=>'form-control', 'type' => 'text'] ); ?>
		</div>
		<div class="form-group col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<label>¿Participó en los cursos de formación continua? </label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No'] ];
			echo $this->Form->select('form_continua', $options, ['class'=>'form-control', 'id'=>'form-continua']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<?php echo $this->Form->input('form_continua_anio', ['label' => ['text' => '
				¿Qué año?'."\n"." "], 'class'=>'form-control', 'type' => 'text'] ); ?>
		</div>
		<div class="form-group col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<label>¿Participó en los de la red municipal? </label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No'] ];
			echo $this->Form->select('red_municipal', $options, ['class'=>'form-control', 'id'=>'red-municipal']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<?php echo $this->Form->input('red_municipal_anio', ['label' => ['text' => '
				¿Qué año?'."\n"." "], 'class'=>'form-control', 'type' => 'text'] ); ?>
		</div>
		<div class="form-group col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<label>¿Participó en los de alimentación y nutrición? </label>
			<?php $options = [ [ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No'] ];
			echo $this->Form->select('nut_alim', $options, ['class'=>'form-control', 'id'=>'nut-alim']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<?php echo $this->Form->input('nut_alim_anio', ['label' => ['text' => '
				¿Qué año?'."\n"." "], 'class'=>'form-control', 'type' => 'text'] ); ?>
		</div>
	</fieldset>
	<br/>
	
	<div class="pull-right">
		<?php echo  $this->Form->button('Guardar datos', ['class' => 'btn btn-save btn-lg']);?>
	</div>
	<div class="pull-left">
		<?php echo  $this->Html->link('Cancelar', ['controller'=>'users', 'action'=>'index'], ['class' => 'btn btn-danger btn-lg']);?>
	</div>
</div><!--END GROUP 2-->
<?php 
echo $this->Form->end();?>
</div>
<!--

id, id_cim, cargo, grupo_etareo, categoria, fecha_ingreso, antiguedad, evaluacion, fecha_nacimiento, ci, ci_expedido, estado_civil, num_hijos, hijos_cim, hijos_becados, distrito, zona, direccion, fono, num_cel, idiomas, otro_idioma, grado_instruccion, grado_instruccion_detalle,
   experiencia_laboral, 
form_continua, form_continua_anio,
red_municipal, red_municipal_anio, 
nut_alim, nut_alim_anio






-->