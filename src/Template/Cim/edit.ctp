<h3>Edicion de datos del Centro infantil <?php echo $cim['nombre']; ?></h3><br>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php echo $this->Form->create($cim , ['novalidate']); ?>
	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInDown">
		<fieldset>
			<legend>Identificación del Centro Infantil</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('id_cim', ['label' => ['text' => 'Código del Centro Infantil'], 'class'=>'form-control', 'type' => 'text', 'readonly'=>'readonly'] );?>
			</div>	
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('nombre', ['label' => ['text' => 'Nombre'], 'class'=>'form-control', 'type' => 'text'] );	?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('responsable', ['label' => ['text' => 'Responsable'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('fecha_inauguracion', ['label' => ['text' => 'Fecha de inauguracion'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
		</fieldset>
		<fieldset>
			<legend>Dirección del Centro Infantil</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php //echo $this->Form->input('distrito', ['label' => ['text' => 'Distrito'], 'class'=>'form-control', 'type' => 'text'] );
					  echo $this->Form->input('distrito', ['label' => ['text' => 'Distrito'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max'=>'14'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<!-- <?//php echo $this->Form->input('zona', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type' => 'text'] );?> -->
				<?php echo $this->Form->input('zona', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type' => 'text', 'list' => 'options'] );?>
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
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('calle', ['label' => ['text' => 'Calle'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('numero', ['label' => ['text' => 'Número'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('telf', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('email', ['label' => ['text' => 'E-mail'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
		</fieldset>
		<fieldset>
			<legend>Datos del Centro Infantil</legend>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('numero_ninos', ['label' => ['text' => 'Cobertura, (Nro. de niños)'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>
			<div class="form-group col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<label>&nbsp;</label><br><label>Bs.: </label>
			</div>
			<div class="form-group col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<?php echo $this->Form->input('aportes_ppff', ['label' => ['text' => 'Aporte económico establecido para los padres de familia'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Administración/convenio</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Administración directa', 'value' => 'Directa'],[ 'text' => 'Aldeas S.O.S.', 'value' => 'Aldeas S.O.S.'],[ 'text' => 'Obispado', 'value' => 'Obispado'],[ 'text' => 'Otro', 'value' => 'Otro']]; echo $this->Form->select('administracion', $options, ['class'=>'form-control', 'id' => 'administracion']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('administracion_otro', ['label' => ['text' => 'Otra administración'], 'class'=>'form-control', 'type' => 'text', 'disabled'] );?>
			</div>
		</fieldset>
		
		<fieldset>
			<legend>Otros datos</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familias_beneficiadas', ['label' => ['text' => 'Cant. familias beneficiadas'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('ninos_becados', ['label' => ['text' => 'Cantidad de niños becados       '], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('cantidad_educadoras', ['label' => ['text' => 'Cantidad educadoras'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('cantidad_manipuladoras', ['label' => ['text' => 'Cantidad de manipuladoras'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>
		</fieldset>
		<fieldset>
			<legend>Infraestructura</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>La infraestructura pertenece a:</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Ajunta Vecinal', 'value' => 'Junta Vecinal'],[ 'text' => 'ONG', 'value' => 'ONG'],[ 'text' => 'GAMEA', 'value' => 'GAMEA'],[ 'text' => 'Iglesia', 'value' => 'Iglesia'],[ 'text' => 'Otro', 'value' => 'Otro']]; echo $this->Form->select('infraestructura_pertenece', $options, ['class'=>'form-control', 'id' => 'infraestructura-pertenece']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('infraestructura_otro', ['label' => ['text' => 'Iglesia / Otro '], 'class'=>'form-control', 'type' => 'text', 'disabled'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('obs_infraestructura', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
		</fieldset>
	</div>
	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp">
		
		<fieldset>
			<legend>Ambientes</legend>
			<p>Ingrese cantidades, (por ejemplo Cocina: 1 | Alamacén: 0) </p>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('cocina', ['label' => ['text' => 'Cocina'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '5'] ); ?> 
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('bano', ['label' => ['text' => 'Baño'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '5'] ); ?> 
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('patio', ['label' => ['text' => 'Patio'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '5'] ); ?> 
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label>Muro perimetral</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('muro_perimetral', $options, ['class'=>'form-control', 'id'=>'muro-perimetral']);?> 
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('almacen', ['label' => ['text' => 'Almacén'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '5'] ); ?> 
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('comedor', ['label' => ['text' => 'Comedor'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '5'] ); ?> 
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('sala_psicomotricidad', ['label' => ['text' => 'Sala psicomotricidad'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '5'] ); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php echo $this->Form->input('otro_ambiente', ['label' => ['text' => 'Otro ambiente (especifique)'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group">
				<label>El Centro cuenta con aulas independientes</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('aulas_independientes', $options, ['class'=>'form-control', 'id'=>'aulas-independientes']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php
			echo $this->Form->input('cantidad_aulas', ['label' => ['text' => 'Cantidad aulas'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'number', 'min' => '0', 'max' => '15'] );
			?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6"><?php
				echo $this->Form->input('aulas_detalle', ['label' => ['text' => 'Especifique'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php
				echo $this->Form->input('obs_ambientes', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control col-xs-12 col-sm-6 col-md-6 col-lg-6', 'type' => 'text'] );?>
			</div>
		</fieldset>

		<fieldset>
			<legend>Servicios básicos</legend>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label>Agua potable</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('agua', $options, ['class'=>'form-control', 'id'=>'agua']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php echo $this->Form->input('agua_detalle', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label>Energía eléctrica</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('electricidad', $options, ['class'=>'form-control', 'id'=>'electricidad']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php echo $this->Form->input('electricidad_detalle', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label>Alcantarillado</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('alcantarillado', $options, ['class'=>'form-control', 'id'=>'alcantarillado']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php echo $this->Form->input('alcantarillado_detalle', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label>Gas domiciliario</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('gas', $options, ['class'=>'form-control', 'id'=>'gas']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php echo $this->Form->input('gas_detalle', ['label' => ['text' => 'Especifique'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('obs_servicios_basicos', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>


			<!-- agua, agua_detalle, electricidad, electricidad_detalle, alcantarillado, alcantarillado_detalle, gas, gas_detalle, familias_beneficiadas, ninos_becados, cantidad_educadoras, cantidad_manipuladoras-->
		</fieldset>
		<fieldset>
			<legend>Datos complementarios</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('centro_salud_ref', ['label' => ['text' => 'Centro de salud de referencia'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('nucleo_escolar_ref', ['label' => ['text' => 'Núcleo escolar de referencia'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('defensoria_ref', ['label' => ['text' => 'Defensoria de referencia'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('centro_educacion_especial_cercano', ['label' => ['text' => 'Centro de educación especial cercano'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('linea_bus_minibus', ['label' => ['text' => 'Línea de bus o minibus'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('obs_datos_comp', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
		</fieldset>
		<fieldset>
			<legend>Cierre del Centro Infantil</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('fecha_cierre', ['label' => ['text' => 'Fecha de cierre'], 'class'=>'form-control', 'type' => 'text', 'value'=> ( !empty($cim->fecha_cierre) )? $cim->fecha_cierre->i18nFormat('yyyy-MM-dd') : '' ]) ;?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>¿Se recogío todo el equipamiento del centro cerrado?</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('se_recojio_material', $options, ['class'=>'form-control', 'id'=>'se_recojio_material']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Motivo de cierre</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Baja cobertura', 'value' => 'Baja cobertura'],[ 'text' => 'Incumplimiento de convenio', 'value' => 'Incumplimiento de convenio'],[ 'text' => 'Otro', 'value' => 'Otro']]; echo $this->Form->select('motivo_cierre', $options, ['class'=>'form-control', 'id'=>'motivo_cierre']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('otro_motivo_cierre', ['label' => ['text' => 'Otro motivo de cierre'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>	
			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('obs_cierre', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
		</fieldset>
		<div class="pull-left">
				<?php echo  $this->Form->button('Guardar datos', ['class' => 'btn btn-save btn-lg']);?>
			</div>
			<div class="pull-right">
				<?php echo  $this->Html->link('Cancelar', ['controller'=>'Cim', 'action'=>'index'], ['class' => 'btn btn-danger btn-lg']);?>
			</div>
		</div>

	<?php echo $this->Form->end(); ?>

</div>




<script type="text/javascript" charset="utf-8" async defer>
	$('#fecha-cierre, #fecha-inauguracion').datepicker({
    	format: 'yyyy-mm-dd',
		autoclose: true,
		endDate: 'now',
		startView: 2
    });
     $('#administracion').change(function(){
		if ($('#administracion').val() == 'Otro') {
			$("#administracion-otro").removeAttr('disabled');
		} else{
			$("#administracion-otro").attr('disabled', 'disabled');
		}
	});
	$('#infraestructura-pertenece').change(function(){
		if ($('#infraestructura-pertenece').val() == 'Otro' || $('#infraestructura-pertenece').val() == 'Iglesia') {
			$("#infraestructura-otro").removeAttr('disabled');
		} else{
			$("#infraestructura-otro").attr('disabled', 'disabled');
		}
	});
</script>





<!--
id_cim, nombre, responsable, fecha_inauguracion, distrito, zona, calle, numero, telf, email, numero_ninos, aportes_ppff, administracion, infraestructura_pertenece, cocina, bano, patio, muro_perimetral, almacen, comedor, sala_psicomotricidad, otro_ambiente, aulas_independientes, cantidad_aulas, aulas_detalle, agua, agua_detalle, electricidad, electricidad_detalle, alcantarillado, alcantarillado_detalle, gas, gas_detalle, familias_beneficiadas, ninos_becados, cantidad_educadoras, cantidad_manipuladoras
-->