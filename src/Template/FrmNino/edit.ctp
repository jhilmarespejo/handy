<?php 
error_reporting(0);
echo $this->Form->create('', ['url' => ['action' => 'edit', 'controller' => 'FrmNino', $datosnino->id_nino]]); ?>
<h2 class="title2 text-center"> Registro de la Ficha Social </h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<!-- <form method="post" accept-charset="utf-8" action="/cake/fichasocial/saveDatosNino">-->
	<?php

	$options_name = [[ 'text' => $cimActual['nombre'], 'value' => $cimActual['id_cim'], 'selected']];	
	//$options_id = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
	foreach ($cims as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
		/*$options_id[$key+1]['text'] = $cim->id_cim;
		$options_id[$key+1]['value'] = $cim->id_cim;*/
	}?>
	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<fieldset>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Nombre Centro Infantil</label>
				<?php echo $this->Form->select('datosnino.id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil',  'required']);?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.fecha_registro', ['label' => ['text' => 'Fecha de Ingreso'], 'class'=>'form-control', 'type'=>'text', 'id' => 'fecha-registro', 'required', 'value' => ($datosnino->fecha_registro)? date_format($datosnino->fecha_registro, 'Y-m-d'): '' ] );?> 
			</div>	
			
		</fieldset>
		<fieldset>
			<legend>I. Datos de la niña-niño</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.id_nino', ['label' => ['text' => 'Código del niña(o)'], 'class'=>'form-control', 'type'=>'text', 'required', 'value' => $datosnino->id_nino] );  ?>
			</div>
		
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.paterno', ['label' => ['text' => 'Apellido Paterno'], 'class'=>'form-control', 'type'=>'text', 'value' => $datosnino->paterno] ); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.materno', ['label' => ['text' => 'Apellido Materno'], 'class'=>'form-control', 'type'=>'text', 'required', 'value' => $datosnino->materno] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type'=>'text', 'required', 'value' => $datosnino->nombres ] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">			
				<?php echo $this->Form->input('datosnino.fecha_nacimiento', ['label' => ['text' => 'Fecha de nacimiento'], 'class'=>'form-control', 'type'=>'text', 'required', 'value' =>  ($datosnino->fecha_nacimiento)? $datosnino->fecha_nacimiento->i18nFormat('yyyy-MM-dd') :'']  );  ?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php $sexo = [[ 'text' => $datosnino->sexo, 'value' => $datosnino->sexo],[ 'text' => 'Femenino', 'value' => 'Femenino' ],[ 'text' => 'Masculino', 'value' => 'Masculino']];?>
				<label for="">Sexo</label> 
				<?php echo $this->Form->select('datosnino.sexo', $sexo, ['class'=>'form-control', 'id'=>'sexo', 'required']);?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php $admision	 = [[ 'text' => ( isset($datosnino->admision) )? $datosnino->admision : '', 'value' => ( isset($datosnino->admision) )? $datosnino->admision : ''],[ 'text' => 'Admitido', 'value' => 'Admitido' ],[ 'text' => 'Rechazado', 'value' => 'Rechazado'],[ 'text' => 'En espera', 'value' => 'En espera']];	?>
				<label for="">Si la niña-o es admitido</label> 
				<?php echo $this->Form->select('datosnino.admision', $admision, ['class'=>'form-control', 'id'=>'admision', 'required']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php $antiguedad	 = [[ 'text' => ( isset($datosnino->antiguedad) )? $datosnino->antiguedad : '' , 'value' => ( isset($datosnino->antiguedad) )? $datosnino->antiguedad : ''],[ 'text' => 'Nuevo', 'value' => 'Nuevo' ],[ 'text' => 'Reingreso', 'value' => 'Reingreso']];	?>
				<label for="">Antiguedad</label> 
				<?php echo $this->Form->select('datosnino.antiguedad', $antiguedad, ['class'=>'form-control', 'id'=>'antiguedad	', 'required']);?>
			</div>
			<hr/>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Cert. de Nacimiento</label> 
				<?php $certificado = [[ 'text' => ( isset($datosnino->certificado_nacimiento) )? $datosnino->certificado_nacimiento : '', 'value' => ( isset($datosnino->certificado_nacimiento) )? $datosnino->certificado_nacimiento : ''],[ 'text' => 'Si presenta', 'value' => 'Si' ],[ 'text' => 'No presenta', 'value' => 'No']];	?>
				<?php echo $this->Form->select('datosnino.certificado_nacimiento', $certificado, ['class'=>'form-control', 'id'=>'certificado-nacimiento', 'required']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" >
				<label for="">C&eacute;dula de identidad</label> 
				<?php $ci = [[ 'text' => ( isset($datosnino->ci) )? $datosnino->ci : '', 'value' => ( isset($datosnino->ci) )? $datosnino->ci : ''],[ 'text' => 'Si presenta', 'value' => 'Si presenta' ],[ 'text' => 'No presenta', 'value' => 'No presenta']];	?>
				<?php echo $this->Form->select('datosnino.ci', $ci, ['class'=>'form-control', 'id'=>'ci']);?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.num_ci', ['label' => ['text' => 'Número de C.I.'], 'class'=>'form-control', 'type' => 'text', 'disabled', 'id' => 'num-ci', 'value' => ( isset($datosnino->num_ci) )? $datosnino->num_ci : ''] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Expedido en:</label>
				<?php $dep = [ 
					['text' => ( isset($datosnino->ci_expedido) )? $datosnino->ci_expedido: '', 'value' => ( isset($datosnino->ci_expedido) )? $datosnino->ci_expedido: '', 'selected'],
					['text' => 'La Paz', 'value' => 'La Paz' ],
					['text' => 'Oruro', 'value' => 'Oruro'],
					['text' => 'Potosí', 'value' => 'Potosí'],
					['text' => 'Cochabamba', 'value' => 'Cochabamba'],
					['text' => 'Chuquisaca', 'value' => 'Chuquisaca'],
					['text' => 'Tarija', 'value' => 'Tarija'],
					['text' => 'Pando', 'value' => 'Pando'],
					['text' => 'Beni', 'value' => 'Beni'],
					['text' => 'Santa Cruz', 'value' => 'Santa Cruz']
				];	?>
				<?php echo $this->Form->select('datosnino.ci_expedido', $dep, ['class'=>'form-control', 'disabled', 'id'=>'ci-expedido']);?>
			</div>	
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Seguro de salud</label> 
				<?php $seg = [[ 'text' => ( isset($datosnino->tipo_seguro_salud) )? $datosnino->tipo_seguro_salud : '' , 'value' => ( isset($datosnino->tipo_seguro_salud) )? $datosnino->tipo_seguro_salud : '' , 'selected'],[ 'text' => 'Pública', 'value' => 'Publica' ], [ 'text' => 'Privada', 'value' => 'Privada']];	?>
				<?php echo $this->Form->select('datosnino.tipo_seguro_salud', $seg, ['class'=>'form-control', 'id'=>'tipo-seguro-salud', 'required']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Carnet de vacunas</label> 
				<?php $seg = [[ 'text' => ( isset($datosnino->carnet_vacunas) )? $datosnino->carnet_vacunas : '', 'value' => ( isset($datosnino->carnet_vacunas) )? $datosnino->carnet_vacunas : ''],[ 'text' => 'Si presenta', 'value' => 'Si' ],[ 'text' => 'No presenta', 'value' => 'No']];	?>
				<?php echo $this->Form->select('datosnino.carnet_vacunas', $seg, ['class'=>'form-control', 'id'=>'carnet-vacunas']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.peso', ['label' => ['text' => 'Peso (k.g)'], 'class'=>'form-control', 'type' => 'text', 'value' => ( isset( $datosnino->peso) )? $datosnino->peso : '0' ] );?>
			</div>	
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.talla', ['label' => ['text' => 'Talla(cm)'], 'class'=>'form-control', 'type' => 'text', 'value' => ( isset($datosnino->talla) )? $datosnino->talla : '' ] );?>
			</div>	
			
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.dx', ['label' => ['text' => 'Dx.'], 'class'=>'form-control', 'type' => 'text', 'value' => ( isset($datosnino->dx) )? $datosnino->dx : '' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Esq. vacunas completo</label> 
				<?php $esq = [[ 'text' => ( isset($datosnino->vacunacion_completa) )? $datosnino->vacunacion_completa : '', 'value' => ( isset($datosnino->vacunacion_completa) )? $datosnino->vacunacion_completa : ''],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];
				echo $this->Form->select('datosnino.vacunacion_completa', $esq, ['class'=>'form-control', 'id'=>'vacunacion-completa']);?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">El niño presenta algun grado de discapacidad</label> 
				<?php $dis = [[ 'text' => ( isset($datosnino->tipo_discapacidad) )? $datosnino->tipo_discapacidad: '', 'value' => ( isset($datosnino->tipo_discapacidad) )? $datosnino->tipo_discapacidad: ''],[ 'text' => 'Si presenta', 'value' => 'Si' ],[ 'text' => 'No presenta', 'value' => 'No']];	
				echo $this->Form->select('datosnino.tipo_discapacidad', $dis, ['class'=>'form-control', 'id'=>'tipo-discapacidad']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.discapacidad', ['label' => ['text' => 'Cual'], 'class'=>'form-control', 'type' => 'text','disabled', 'id' => 'discapacidad', 'value' => ( isset($datosnino->discapacidad) )? $datosnino->discapacidad : ''] );?>
			</div>
		</fieldset><br>

		<fieldset>
			<legend>II. Situación familiar</legend>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Actualmente el niñ@ está a cargo de:</label> 
				<?php $options = [[ 'text' => ( isset($situacionfamiliar->nino_vive_con) )? $situacionfamiliar->nino_vive_con : '', 'value' => (isset($situacionfamiliar->nino_vive_con))? $situacionfamiliar->nino_vive_con : '', 'selected'],[ 'text' => 'Madre', 'value' => 'Madre' ],[ 'text' => 'Padre', 'value' => 'Padre'],[ 'text' => 'Ambos', 'value' => 'Ambos'],[ 'text' => 'Hermano(a) mayor', 'value' => 'Hermano(a) mayor'],[ 'text' => 'Abuelos', 'value' => 'Abuelos'],[ 'text' => 'Tios', 'value' => 'Tios'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('situacionfamiliar.nino_vive_con', $options, ['class'=>'form-control', 'id'=>'nino-vive-con']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Razones de la ausencia de la madre</label> 
				<?php $options = [[ 'text' => ( isset($situacionfamiliar->ausencia_madre) )? $situacionfamiliar->ausencia_madre : '' , 'value' => ( isset($situacionfamiliar->ausencia_madre) )? $situacionfamiliar->ausencia_madre : '' , 'selected'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Estudio', 'value' => 'Estudio'],[ 'text' => 'Trabaja en otra ciudad', 'value' => 'Trabaja en otra ciudad'],[ 'text' => 'Trabaja en el extranjero', 'value' => 'Trabaja en el extranjero'],[ 'text' => 'Abandono', 'value' => 'Abandono'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('situacionfamiliar.ausencia_madre', $options, ['class'=>'form-control', 'id'=>'ausencia-madre']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Razones de la ausencia del padre</label> 
				<?php $options = [[ 'text' => ( isset($situacionfamiliar->ausencia_padre)? $situacionfamiliar->ausencia_padre : '' ), 'value' => ( isset($situacionfamiliar->ausencia_padre)? $situacionfamiliar->ausencia_padre : '' ), 'selected'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Estudio', 'value' => 'Estudio'],[ 'text' => 'Trabaja en otra ciudad', 'value' => 'Trabaja en otra ciudad'],[ 'text' => 'Trabaja en el extranjero', 'value' => 'Trabaja en el extranjero'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Abandono', 'value' => 'Abandono'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('situacionfamiliar.ausencia_padre', $options, ['class'=>'form-control', 'id'=>'ausencia-padre']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Razones de la ausencia de ambos padres</label> 
				<?php $options = [[ 'text' => ( isset($situacionfamiliar->ausencia_ambos) )? $situacionfamiliar->ausencia_ambos : '', 'value' => ( isset($situacionfamiliar->ausencia_ambos) )? $situacionfamiliar->ausencia_ambos : '', 'selected'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Estudio', 'value' => 'Estudio'],[ 'text' => 'Trabaja en otra ciudad', 'value' => 'Trabaja en otra ciudad'],[ 'text' => 'Trabaja en el extranjero', 'value' => 'Trabaja en el extranjero'],[ 'text' => 'Trabajo', 'value' => 'Trabajo'],[ 'text' => 'Otro', 'value' => 'Otro']];	
				echo $this->Form->select('situacionfamiliar.ausencia_ambos', $options, ['class'=>'form-control', 'id'=>'ausencia-ambos']);?>
			</div>
			<hr>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Ambiente familiar</label>
				<?php $options = [[ 'text' => ( isset($situacionfamiliar->ambiente_familiar) )? $situacionfamiliar->ambiente_familiar : '', 'value' => ( isset($situacionfamiliar->ambiente_familiar) )? $situacionfamiliar->ambiente_familiar : '', 'selected'],[ 'text' => 'Armonioso', 'value' => 'Armonioso'],[ 'text' => 'Conflictivo', 'value' => 'Conflictivo'],[ 'text' => 'Indiferente', 'value' => 'Indiferente']];	echo $this->Form->select('situacionfamiliar.ambiente_familiar', $options, ['class'=>'form-control', 'id'=>'ambiente-familiar']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Tipo de familia</label> 
				<?php $options = [[ 'text' => ( isset($situacionfamiliar->tipo_familia)? $situacionfamiliar->tipo_familia : '' ), 'value' => ( isset($situacionfamiliar->tipo_familia)? $situacionfamiliar->tipo_familia : '' ), 'selected'],[ 'text' => 'Nuclear', 'value' => 'Nuclear'], [ 'text' => 'Monoparental', 'value' => 'Monoparental'],[ 'text' => 'Extendida', 'value' => 'Extendida'], [ 'text' => 'Reconstituida', 'value' => 'Reconstituida'],[ 'text' => 'Otro', 'value' => 'Otro']]; echo $this->Form->select('situacionfamiliar.tipo_familia', $options, ['class'=>'form-control', 'id'=>'tipo-familia']);?>
			</div>




<!--
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.peso', ['label' => ['text' => 'Peso (gramos.)'], 'class'=>'form-control', 'type' => 'number', 'required', 'min' => '0']);
				 ?>

			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.talla', ['label' => ['text' => 'Talla (cm.)'], 'class'=>'form-control', 'type' => 'text', 'required', 'min' => '0'] ); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.estado_nutricional', ['label' => ['text' => 'Estado Nutricional'], 'class'=>'form-control', 'type' => 'text', 'required'] ); ?>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.otro_tipo_seguro_salud', ['label' => ['text' => 'Otro seguro de salud'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.nro_seguro', ['label' => ['text' => 'Nro. de Seguro'], 'class'=>'form-control', 'type' => 'text'] ); ?>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.nro_partida_certf_nac', ['label' => ['text' => 'Número de partida del certficado de Nacimiento'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
			</div>-->
		</fieldset>
		
		<fieldset>
			<legend>III. Vivienda y entorno</legend>
				<legend><h4>Caracter&iacute;sticas de la vivienda</h4></legend>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Paredes</label> 
					<?php $options = [[ 'text' => ( isset($caracteristicasvivienda->paredes)? $caracteristicasvivienda->paredes : '' ), 'value' => ( isset($caracteristicasvivienda->paredes)? $caracteristicasvivienda->paredes : '' )],[ 'text' => 'Ladrillo', 'value' => 'Ladrillo'],[ 'text' => 'Adobe', 'value' => 'Adobe'],[ 'text' => 'Piedra', 'value' => 'Piedra'],[ 'text' => 'Otro', 'value' => 'Otro']];	
						echo $this->Form->select('caracteristicasvivienda.paredes', $options, ['class'=>'form-control', 'id'=>'paredes']);
						?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Piso</label> 
				<?php $options = [[ 'text' => ( isset($caracteristicasvivienda->piso) )? $caracteristicasvivienda->piso : '', 'value' => ( isset($caracteristicasvivienda->piso) )? $caracteristicasvivienda->piso : ''],[ 'text' => 'Tierra', 'value' => 'Tierra'] ,[ 'text' => 'Cemento', 'value' => 'Cemento'],[ 'text' => 'Machimbre', 'value' => 'Machimbre'],[ 'text' => 'Parket', 'value' => 'Parket'],[ 'text' => 'Otro', 'value' => 'Otro']];	echo $this->Form->select('caracteristicasvivienda.piso', $options, ['class'=>'form-control', 'id'=>'piso']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Tipo de vivienda</label> 
					<?php $options = [[ 'text' => ( isset($caracteristicasvivienda->tipo_vivienda) )? $caracteristicasvivienda->tipo_vivienda : '' , 'value' => ( isset($caracteristicasvivienda->tipo_vivienda) )? $caracteristicasvivienda->tipo_vivienda : '' ],[ 'text' => 'Departamento', 'value' => 'Departamento'],[ 'text' => 'Casa independiente', 'value' => 'Casa independiente'],[ 'text' => 'Casa compartida', 'value' => 'Casa compartida'],[ 'text' => 'Cuarto múltiple', 'value' => 'Cuarto multiple']]; echo $this->Form->select('caracteristicasvivienda.tipo_vivienda', $options, ['class'=>'form-control', 'id'=>'tipo-vivienda']);?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">La vivienda es</label> 
					<?php $options = [[ 'text' => ( isset($caracteristicasvivienda->vivienda_es) )? $caracteristicasvivienda->vivienda_es : '', 'value' => ( isset($caracteristicasvivienda->vivienda_es) )? $caracteristicasvivienda->vivienda_es : ''],[ 'text' => 'Propia', 'value' => 'Propia'],[ 'text' => 'Anticrético', 'value' => 'Anticretico'],[ 'text' => 'Alquiler', 'value' => 'Alquiler'],[ 'text' => 'Cedida', 'value' => 'Cedida'],[ 'text' => 'Compartida', 'value' => 'Compartida'],[ 'text' => 'Cuidador/a', 'value' => 'Cuidador']]; echo $this->Form->select('caracteristicasvivienda.vivienda_es', $options, ['class'=>'form-control', 'id'=>'vivienda-es']); ?>
				</div>

				<legend><h4>Número de ambientes</h4></legend>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('caracteristicasvivienda.numero_personas', ['label' => ['text' => 'Número de personas'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '20', 'id' => 'numero_personas', 'value' => ( isset($caracteristicasvivienda->numero_personas) )?  $caracteristicasvivienda->numero_personas : '0' ] );?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<?php echo $this->Form->input('caracteristicasvivienda.numero_dormitorios', ['label' => ['text' => 'Número de dormitorios'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '20', 'id' => 'numero_dormitorios', 'value' => ( isset($caracteristicasvivienda->numero_dormitorios) )? $caracteristicasvivienda->numero_dormitorios : '0' ] );?>
				</div>
				<?php 
					$optionsCo = [[ 'text' => ( isset($caracteristicasvivienda->cocina) )? $caracteristicasvivienda->cocina : '' , 'value' => ( isset($caracteristicasvivienda->cocina) )? $caracteristicasvivienda->cocina : '' ],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']];
					$optionsSa = [[ 'text' => ( isset($caracteristicasvivienda->sala) )? $caracteristicasvivienda->sala : '' , 'value' => ( isset($caracteristicasvivienda->sala) )? $caracteristicasvivienda->sala : '' ],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']];
					$optionsCom = [[ 'text' => ( isset($caracteristicasvivienda->comedor) )? $caracteristicasvivienda->comedor : '' , 'value' => ( isset($caracteristicasvivienda->comedor) )? $caracteristicasvivienda->comedor : '' ],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']];					
					$optionsSa = $optionsCom = $optionsTv = $optionsCompo = $optionsDvd = $optionsEst = $optionsHo = $optionsLa = $optionsRe = $optionsComputadora = $optionsCo; ?>

				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Cocina</label> 
					<?php echo $this->Form->select('caracteristicasvivienda.cocina', $optionsCo, ['class'=>'form-control', 'id'=>'cocina']);?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Sala</label> 
					<?php echo $this->Form->select('caracteristicasvivienda.sala', $optionsSa, ['class'=>'form-control', 'id'=>'sala']);?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Comedor</label> 
					<?php echo $this->Form->select('caracteristicasvivienda.comedor', $optionsCom, ['class'=>'form-control', 'id'=>'comedor']);
					 ?>
				</div>
				<?php $optionsBa = [[ 'text' => ( isset($caracteristicasvivienda->bano) )? $caracteristicasvivienda->bano : '', 'value' => ( isset($caracteristicasvivienda->bano) )? $caracteristicasvivienda->bano : ''],[ 'text' => 'Privado', 'value' => 'Privado'], [ 'text' => 'Compartido', 'value' => 'Compartido']]; ?>

				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Ba&ntilde;o</label> 
					<?php echo $this->Form->select('caracteristicasvivienda.bano', $optionsBa, ['class'=>'form-control', 'id'=>'bano']);?>
				</div>


				
		</fieldset>

	</div><!--/group1-->
	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<fieldset>

			<legend><h4>Su vivienda tiene</h4></legend>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check'>Energía eléctrica</label> 
					<?php  echo $this->Form->checkbox("caracteristicasvivienda.energia_electrica", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->energia_electrica == 'Si' )? 'checked':'' ], ['class'=>'form-control', 'id'=>'energia-electrica']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Agua potable</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.agua_potable", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->agua_potable == 'Si')? 'checked':'' ], ['class'=>'form-control', 'id'=>'agua-potable']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Vertiente</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.vertiente", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->vertiente == 'Si')? 'checked':'' ], ['class'=>'form-control', 'id'=>'vertiente']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Gas domiciliario</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.gas_domiciliario", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->gas_domiciliario == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'gas-domiciliario']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Alcantarillado</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.alcantarillado", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->alcantarillado == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'alcantarillado']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Internet</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.internet", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->internet == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'internet']); ?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >TV por cable</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.tv_cable", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->tv_cable == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'tv-cable']); ?>
				</div>										
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Teléfono fijo</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.telefono_fijo", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->telefono_fijo == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'telefono-fijo']); ?>
				</div>					
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >Vehículo propio</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.vehiculo_propio", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->vehiculo_propio == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'vehiculo-propio']); ?>
				</div>					
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="" class='check' >¿Vehículo medio de trabajo?</label> 
					<?php echo $this->Form->checkbox("caracteristicasvivienda.vehiculo_medio_trabajo", ['value' => 'Si','hiddenField' => 'No', ($caracteristicasvivienda->vehiculo_medio_trabajo == 'Si')? 'checked':''], ['class'=>'form-control', 'id'=>'vehiculo-medio-trabajo']); ?>
				</div>					
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<?php echo $this->Form->input('caracteristicasvivienda.cantidad_vehiculos', ['label' => ['text' => 'Cantidad de vehículos'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '10', 'id' => 'cantidad-vehiculos', 'value' => ($caracteristicasvivienda->cantidad_vehiculos)? $caracteristicasvivienda->cantidad_vehiculos : '0' ] );?>
				</div>	

				<legend><h4>Transporte</h4></legend>				
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Medio de transporte que utiliza para llegar al centro infantil</label>
					<?php $options = [[ 'text' => ( isset($caracteristicasvivienda->transporte_trasladarse_cim) )? $caracteristicasvivienda->transporte_trasladarse_cim :'', 'value' => ( isset($caracteristicasvivienda->transporte_trasladarse_cim) )? $caracteristicasvivienda->transporte_trasladarse_cim :'', 'selected', 'disabled'],[ 'text' => 'A pie', 'value' => 'A pie'], [ 'text' => 'Micro o bus', 'value' => 'Micro o bus'], [ 'text' => 'Minibus', 'value' => 'Minibus'], [ 'text' => 'Otro', 'value' => 'Otro']]; echo $this->Form->select('caracteristicasvivienda.transporte_trasladarse_cim', $options, ['class'=>'form-control', 'id'=>'transporte-trasladarse-cim']);?>
				</div>
				<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<?php echo $this->Form->input('caracteristicasvivienda.tiempo_demora_cim', ['label' => ['text' => 'Tiempo que demora de su hogar al centro infantil (minutos)'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '800','id' => 'tiempo-demora-cim', 'value' => ( isset($caracteristicasvivienda->tiempo_demora_cim) )? $caracteristicasvivienda->tiempo_demora_cim: '' ] );?>
				</div>
		</fieldset>
		<fieldset>
			<legend>V. Aspectos económicos</legend>
			<legend><h4>Egreso mensual</h4></legend>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.alimentacion', ['label' => ['text' => 'Alimentación'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'alimentacion', 'value' => ( isset($aspectoseconomicos->alimentacion) )? $aspectoseconomicos->alimentacion:'0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.vivienda', ['label' => ['text' => 'Vivienda'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'vivienda', 'value' => ( isset($aspectoseconomicos->vivienda) )? $aspectoseconomicos->vivienda : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.luz', ['label' => ['text' => 'Luz'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'luz', 'value' => ( isset($aspectoseconomicos->luz) )? $aspectoseconomicos->luz : '0' ] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.agua', ['label' => ['text' => 'Agua'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'agua', 'value' => ( isset($aspectoseconomicos->agua) )? $aspectoseconomicos->agua : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.vestimenta', ['label' => ['text' => 'Vestimenta'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'vestimenta', 'value' => ( isset($aspectoseconomicos->vestimenta) )? $aspectoseconomicos->vestimenta : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.panales', ['label' => ['text' => 'Pañales'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'panales', 'value' => ( isset($aspectoseconomicos->panales) )? $aspectoseconomicos->panales : '0' ] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.transporte', ['label' => ['text' => 'Transporte'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'transporte', 'value' => ( isset($aspectoseconomicos->transporte) )? $aspectoseconomicos->transporte : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.telefono_fijo', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'telefono-fijo', 'value' => ( isset($aspectoseconomicos->telefono_fijo) )? $aspectoseconomicos->telefono_fijo : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.telefono_movil', ['label' => ['text' => 'Celular'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'telefono-movil', 'value' => ( isset($aspectoseconomicos->telefono_movil) )? $aspectoseconomicos->telefono_movil : '0' ] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.gas', ['label' => ['text' => 'Gas'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'gas', 'value' => ( isset($aspectoseconomicos->gas) )? $aspectoseconomicos->gas : '0'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.educacion', ['label' => ['text' => 'Educación'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'educacion', 'value' => ( isset($aspectoseconomicos->educacion) )? $aspectoseconomicos->educacion : '0'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.salud', ['label' => ['text' => 'Salud'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'salud', 'value' => ( isset($aspectoseconomicos->salud) )? $aspectoseconomicos->salud : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.cable', ['label' => ['text' => 'Cable'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '5000', 'id' => 'cable', 'value' => ( isset($aspectoseconomicos->cable) )? $aspectoseconomicos->cable : '0' ] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php echo $this->Form->input('aspectoseconomicos.total', ['label' => ['text' => 'Total de gastos '], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'id' => 'total-gastos', 'value' => ( isset($aspectoseconomicos->total) )? $aspectoseconomicos->total : '0' , 'readOnly' ] );
				?>
			</div>

			<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<br/>
				<?php echo $this->Html->tag('span', 'Calcular el total', ['class' => 'btn btn-info btn-sm', 'id' => 'make']); ?>
			</div>


			<legend><h5>Deudas del grupo familiar (se corrobora a partir de la documentación que verifica dicha situación)</h5></legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('aspectoseconomicos.monto_adeudado', ['label' => ['text' => 'Monto adeudado (en Bs)'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => ( isset($aspectoseconomicos->monto_adeudado) )? $aspectoseconomicos->monto_adeudado : '' ] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('aspectoseconomicos.tipo_inversion', ['label' => ['text' => 'Tipo inversión'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'value' => ( isset($aspectoseconomicos->tipo_inversion) )? $aspectoseconomicos->tipo_inversion: '' ] );
				?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label>Otros ingresos</label>
				<?php $options = [[ 'text' => ( isset($aspectoseconomicos->otros_ingresos) )? $aspectoseconomicos->otros_ingresos : '', 'value' => ( isset($aspectoseconomicos->otros_ingresos) )? $aspectoseconomicos->otros_ingresos : '', 'selected', 'disabled'],[ 'text' => 'Asistencia familiar', 'value' => 'Asistencia familiar'],[ 'text' => 'Apoyo de otros familiares', 'value' => 'Apoyo de otros familiares'],[ 'text' => 'Otros', 'value' => 'Otros']]; 
					echo $this->Form->select('aspectoseconomicos.otros_ingresos', $options, ['class'=>'form-control', 'id'=>'otros-ingresos']);?>

			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('aspectoseconomicos.detalle_otros_ingresos', ['label' => ['text' => 'Especifíque'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'disabled','value' => ( isset($aspectoseconomicos->detalle_otros_ingresos))? $aspectoseconomicos->detalle_otros_ingresos: '' ] );
				?>
			</div>
			
		</fieldset>
		<fieldset>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('consideraciones.historia_social', ['label' => ['text' => 'Historia social'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'value' => ( isset($consideraciones->historia_social) )? $consideraciones->historia_social : ''] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('consideraciones.diagnostico_social', ['label' => ['text' => 'Diagnóstico social'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'value' => ( isset($consideraciones->diagnostico_social) )? $consideraciones->diagnostico_social : '' ] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('consideraciones.acciones_realizar', ['label' => ['text' => 'Acciones a realizar'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'value' => ( isset($consideraciones->acciones_realizar) )? $consideraciones->acciones_realizar: ''] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('consideraciones.seguimiento_trabajo_social', ['label' => ['text' => 'Seguimiento trabajo social'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'value' => ( isset($consideraciones->seguimiento_trabajo_social) )? $consideraciones->seguimiento_trabajo_social: ''] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('consideraciones.seguimiento_psicologia', ['label' => ['text' => 'Seguimiento psicologia'], 'class'=>'form-control', 'type' => 'textarea', 'rows' => '2', 'value' => (isset($consideraciones->seguimiento_psicologia))? $consideraciones->seguimiento_psicologia : ''] );
				?>
			</div>
		</fieldset>
		<!-- <fieldset>
			<legend>Dirección del trabajo</legend>
			<h4>Madre</h4>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.0.trab_zona', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type'=>'text', 'list' => 'options'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.0.trab_calle', ['label' => ['text' => 'Calle'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.0.trab_nro', ['label' => ['text' => 'N°'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.0.trab_telf', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.0.trab_horarios', ['label' => ['text' => 'Horarios'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.0.trab_institucion', ['label' => ['text' => 'Institución'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<h4>Padre</h4>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.1.trab_zona', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type'=>'text', 'list' => 'options'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.1.trab_calle', ['label' => ['text' => 'Calle'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.1.trab_nro', ['label' => ['text' => 'N°'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.1.trab_telf', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.1.trab_horarios', ['label' => ['text' => 'Horarios'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('familiares.1.trab_institucion', ['label' => ['text' => 'Institución'], 'class'=>'form-control', 'type' => 'text'] );
				?>
			</div>
		</fieldset> -->

		<fieldset>
			<legend>Dirección del domicilio</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.zona_barrio', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type'=>'text', 'list' => 'options', 'value' => $datosnino->zona_barrio] ); ?>
				<datalist id="options">
	    			<option value="1ro de Mayo">1ro de Mayo</option>
	    			<option value="16 de Julio">16 de Julio</option>
	    			<option value="Alto Lima">Alto Lima</option>
	    			<option value="Ballivian">Ballivian</option>
	    			<option value="Ciudad Satelite">Ciudad Satelite</option>
	    			<option value="Complejo">Complejo</option>
	    			<option value="Convifag">Convifag</option>
	    			<option value="Cosmos 79">Cosmos 79</option>
	    			<option value="El Kenko">El Kenko</option>
	    			<option value="German Busch">German Busch</option>
	    			<option value="Kollpani">Kollpani</option>
	    			<option value="Mercedario">Mercedario</option>
	    			<option value="Nuevos Horizontes">Nuevos Horizontes</option>
	    			<option value="Cupilupaca">Cupilupaca</option>
	    			<option value="Rio Seco">Rio Seco</option>
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
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.calle_avenida', ['label' => ['text' => 'Calle/Avenida/#'], 'class'=>'form-control', 'type' => 'text', 'required', 'value' => $datosnino->calle_avenida] );?>
			</div>
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.num_vivienda', ['label' => ['text' => 'N°'], 'class'=>'form-control', 'type' => 'text', 'required', 'value' => $datosnino->num_vivienda] );?>
			</div>
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.fono', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type' => 'number','min' => '0', 'value' => $datosnino->fono] );?>
			</div>
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.punto_referencia', ['label' => ['text' => 'Punto de referencia'], 'class'=>'form-control', 'type' => 'text', 'value' => $datosnino->punto_referencia] );?>
			</div>
		</fieldset>
		
		<fieldset>
			<legend>Retiro</legend>
			<div class="form-group">
				<label for="">Causas del retiro</label> 
				<?php $options = [[ 'text' => ( isset($datosnino->causas_retiro) )? $datosnino->causas_retiro : '' , 'value' => ( isset($datosnino->causas_retiro) )? $datosnino->causas_retiro : ''],[ 'text' => 'Cambio de domicilio', 'value' => 'Cambio de domicilio'],[ 'text' => 'Promoción', 'value' => 'Promocion'],[ 'text' => 'Insatisfacción con el servicio', 'value' => 'Insatisfaccion con el servicio'],[ 'text' => 'Costo alto del servicio', 'value' => 'Costo alto del servicio'],[ 'text' => 'Desinterés de los padres', 'value' => 'Desinteres de los padres'],[ 'text' => 'Inadaptación del niño (problemas de conducta)', 'value' => 'Inadaptacion del niño (problemas de conducta)'],[ 'text' => 'Otras', 'value' => 'Otras']]; 
					echo $this->Form->select('datosnino.causas_retiro', $options, ['class'=>'form-control', 'id'=>'causas-retiro']);?>
			</div>
			<?php echo $this->Form->input('datosnino.detalle_causas_retiro', ['label' => ['text' => 'Especifique las causas del retiro'], 'class'=>'form-control', 'type' => 'text', 'disabled', 'id'=>'detalle-causas-retiro', 'value' => ( isset($datosnino->detalle_causas_retiro) )? $datosnino->detalle_causas_retiro : '' ] );?>
		</fieldset>
	</div><!--/group2-->


	
	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<fieldset>
			<legend>
				Datos del grupo familiar<br>
				<a href="#table-familiares" title="" class="btn btn-warning btn-xsm" id="add-tr-fam"> + Adicionar familiar</a>
			</legend>
			<table class="table table-bordered" id="table-familiares">
				<thead>
					<tr>
						<th colspan="9" class="text-center">DATOS DEL FAMILIAR</th>
						<th colspan="6" class="text-center">DATOS DEL TRABAJO</th>
					</tr>
					<tr>
						<th>Nombre y apellido</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th>Grado de parentesco</th>
						<th>Grado de instruccion</th>
						<th>Ocupación</th>
						<th>CI</th>
						<th>Ingresos</th>
						<th>Caracteristicas del trabajo/colegio</th>

						<th>Zona</th>
						<th>Calle</th>
						<th>N°</th>
						<th>Horarios</th>
						<th>Telf</th>
						<th>Institución</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($familiares as $key => $familiar) { ?>
					<tr>
						<td><?php 
						echo $this->Form->hidden('familiares['.$key.'][id]', ['value' => $familiar->id]);
						echo $this->Form->input('familiares['.$key.'][nombres]', ['label' => false, 'class'=>'form-control strech','style' => 'width: 120px', 'type' => 'text', 'value' => $familiar->nombres] ); ?></td>

						<td><?php echo $this->Form->input('familiares['.$key.'][edad]', ['label' => false, 'class'=>'form-control strech forty', 'type' => 'number', 'min' => '0','value' => $familiar->edad] ); ?> </td>

						<td>
							<?php $sexo = [[ 'text' => $familiar->sexo, 'value' => $familiar->sexo, 'selected', 'disabled'],[ 'text' => 'Femenino', 'value' => 'Femenino' ],[ 'text' => 'Masculino', 'value' => 'Masculino']];?>

						<?php echo $this->Form->select('familiares['.$key.'][sexo]', $sexo, ['class'=>'form-control strech forty'] ); ?> </td>

						<td>
							<datalist id="parent">
								<option value="Madre">Madre</option>
								<option value="Padre">Padre</option>
								<option value="Hermano(a)">Hermano(a)</option>
								<option value="Abuelo(a)">Abuelo(a)</option>
								<option value="Tio(a)">Tio(a)</option>
							</datalist>
						<?php echo $this->Form->input('familiares['.$key.'][parentesco]', ['label' => false, 'class'=>'form-control strech fifty', 'type' => 'text', 'list' => 'parent' , 'value' => $familiar->parentesco] ); ?> </td>

						<td>
							<?php $gradoInstruccion = [ ['text' => $familiar->grado_instruccion, 'value' => $familiar->grado_instruccion, 'selected', 'disabled'], ['text' => 'Sin educacacion', 'value' => 'Sin educacacion'],['text' => 'Pre inicial', 'value' => 'Pre inicial'],['text' => 'Inicial', 'value' => 'Inicial'],['text' => 'Primaria', 'value' => 'Primaria'],['text' => 'Secundaria', 'value' => 'Secundaria'],['text' => 'Bachiller', 'value' => 'Bachiller'],['text' => 'Auxiliar', 'value' => 'Auxiliar'],['text' => 'Tecnico/med/sup', 'value' => 'Técnico/med/sup'],['text' => 'Universitario', 'value' => ' Universitario'],['text' => 'Otro', 'value' => 'Otro'] ];?>
							
							<?php echo $this->Form->select('familiares['.$key.'][grado_instruccion]', $gradoInstruccion, ['label' => false, 'class'=>'form-control strech'] ); ?>
						</td>

						<td><?php echo $this->Form->input('familiares['.$key.'][ocupacion]', ['label' => false, 'class'=>'form-control strech seventy', 'type' => 'text', 'value' => $familiar->ocupacion] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][ci]', ['label' => false, 'class'=>'form-control strech', 'type' => 'text', 'value' => $familiar->ci] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][ingresos]', ['label' => false, 'class'=>'form-control strech forty', 'type' => 'text', 'value' => $familiar->ingresos] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][caracteristicas_trabajo_colegio]', ['label' => false, 'class'=>'form-control strech', 'type' => 'text', 'value' => $familiar->caracteristicas_trabajo_colegio] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][trab_zona]', ['label' => false, 'class'=>'form-control strech seventy', 'type' => 'text', 'value' => $familiar->trab_zona] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][trab_calle]', ['label' => false, 'class'=>'form-control strech seventy', 'type' => 'text', 'value' => $familiar->trab_calle] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][trab_nro]', ['label' => false, 'class'=>'form-control strech forty', 'type' => 'text', 'value' => $familiar->trab_nro] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][trab_horarios]', ['label' => false, 'class'=>'form-control strech', 'type' => 'text', 'value' => $familiar->trab_horarios] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][trab_telf]', ['label' => false, 'class'=>'form-control strech', 'type' => 'text', 'value' => $familiar->trab_telf] ); ?> </td>

						<td><?php echo $this->Form->input('familiares['.$key.'][trab_institucion]', ['label' => false, 'class'=>'form-control strech', 'type' => 'text', 'value' => $familiar->trab_institucion] ); ?> </td>

					</tr>
				<?php } ?>

				</tbody>
			</table>
		</fieldset>
		<div class="text-center">
			<?php echo $this->Form->button('Guardar Información', ['class'=>'btn btn-save btn-lg', 'id' => 'save-all']);?>
		</div>
	</div>

</div>
 
	
<?php echo $this->Form->end(); ?>
<script type="text/javascript" charset="utf-8" async defer>

	$('#fecha-registro, #datosnino-fecha-nacimiento, .bcg, .pentav-1d, .pentav-2d, .pentav-3d, .antiamarilla, .pentav2-1d, .pentav2-2d, .pentav2-3d, .srp').datepicker({
        	format: 'yyyy-mm-dd',
			autoclose: true,
			endDate: 'now',
			startView: 2
    });

	$('#add-tr-fam').click(function(event) {
		var lgth = $('table#table-familiares tbody tr').length;
		var tr = '<tr class="row-'+lgth+'"><td><input type="text" name="familiares['+lgth+'][nombres]" class="form-control ninety strech" maxlength="45" id="familiares-nombres"></td><td><div class="input number"><input type="number" min="0" name="familiares['+lgth+'][edad]" class="forty strech form-control edad'+lgth+'"  id="familiares-edad"></div></td><td><select name="familiares['+lgth+'][sexo]" class="form-control strech forty" id="sexo" ><option value="" selected="selected"></option><option value="Femenino">Femenino</option><option value="Masculino">Masculino</option></select></td><td><input type="text" name="familiares['+lgth+'][parentesco]" class="form-control fifty" id="familiares-parentesco" list="parent"><datalist id="parent"><option value="Madre">Madre</option><option value="Padre">Padre</option><option value="Hermano(a)">Hermano(a)</option><option value="Abuelo(a)">Abuelo(a)</option><option value="Tio(a)">Tio(a)</option></datalist></td><td><select name="familiares['+lgth+'][grado_instruccion]" class="form-control strech" id="familiares-grado-instruccion"><option value="Sin educacacion">Sin educacacion</option><option value="Pre inicial">Pre inicial</option><option value="Inicial">Inicial</option><option value="Primaria">Primaria</option><option value="Secundaria">Secundaria</option><option value="Bachiller">Bachiller</option><option value="Auxiliar">Auxiliar</option><option value="Tecnico/med/sup">Técnico/med/sup</option><option value="Universitario"> Universitario</option><option value="Otro">Otro</option></option></td><td><input class="form-control strech seventy" type="text" name="familiares['+lgth+'][ocupacion]" id="familiares-ocupacion"></td><td><input type="text" name="familiares['+lgth+'][ci]" class="form-control strech" id="familiares-ci"></td><td><input type="number" min="0" name="familiares['+lgth+'][ingresos]" class="form-control strech forty" id="familiares-ingresos"></td><td><input type="text" name="familiares['+lgth+'][caracteristicas_trabajo_colegio]" class="strech form-control" id="familiares-caracteristicas-trabajo-colegio"></td><td><input type="text" name="familiares['+lgth+'][trab_zona]" class="form-control strech seventy" list="options" id="familiares-trab-zona"></td><td><input type="text" name="familiares['+lgth+'][trab_calle]" class="form-control strech seventy" id="familiares-trab-calle"></td><td><input type="text" name="familiares['+lgth+'][trab_nro]" class="form-control strech forty" id="familiares-trab-nro"></td><td><input type="text" name="familiares['+lgth+'][trab_horarios]" class="strech form-control" id="familiares-trab-horarios"></td><td><input type="text" name="familiares['+lgth+'][trab_telf]" class="strech form-control" id="familiares-trab-telf"></td><td><input type="text" name="familiares['+lgth+'][trab_institucion]" class="strech form-control" id="familiares-trab-institucion"></td></tr>';

		$('table#table-familiares tbody').append(tr);
		//console.log(lgth);
		getAge();
	});
		getAge();


	function getAge(){
		$('table#table-familiares tbody tr').each(function(index, el) {
			$('.date'+index).datepicker({
	        	format: 'yyyy-mm-dd',
				autoclose: true,
				endDate: 'now',
				startView: 2
	        	
	        });
	        $('.date'+index).change(function(){
				var fecha_nacimiento = $(this).val();
				var hoy = fecha_actual('onlyDate');
				var edad_fam = edad( fecha_nacimiento, hoy );
				var edad_fam = edad_fam.split(".");
				//console.log(edad_fam[0]);
				$('.edad'+index).val(edad_fam[0]); 
				//alert(edad_nino);
			});
	        
		});
	}
	$('#causas-retiro').change(function(event) {
		var value = $('#causas-retiro').val();
		if (value == 'Otras') {
			$("#detalle-causas-retiro").removeAttr('disabled');
		} else {
			$("#detalle-causas-retiro").attr('disabled', 'disabled');
		}
	});

	$('#ci').change(function(){
		if ( $("#ci").val() == 'Si presenta' ) {
			$("#num-ci").removeAttr('disabled');
			$("#ci-expedido").removeAttr('disabled');
		}
		else {
			$("#num-ci").val('');
			$("#num-ci").attr('disabled', 'disabled');
			$("#ci-expedido").attr('disabled', 'disabled');
			$("#ci-expedido").val('');
		}
	});

	$('#tipo-discapacidad').change(function(){
		if ($('#tipo-discapacidad').val() == 'Si presenta') {
			$("#discapacidad").removeAttr('disabled');
		} else{
			$("#discapacidad").attr('disabled', 'disabled');
			$("#discapacidad").val('');
		}

	});
	$('#otros-ingresos').change(function(){
		var value = $('#otros-ingresos').val();
		if ( value != '') {
			$("#aspectoseconomicos-detalle-otros-ingresos").removeAttr('disabled');
		} else {
			$("#aspectoseconomicos-detalle-otros-ingresos").attr('disabled', 'disabled');
		}
	});

	$('#make').click(function() {
		console.log( $("this").val() );		
		//console.log(parseInt( $('#alimentacion').val() ));
		var total =  parseInt( $('#alimentacion').val() ) + parseInt( $('#vivienda').val() ) + parseInt( $('#luz').val() ) + parseInt( $('#agua').val() ) + parseInt( $('#vestimenta').val() ) + parseInt( $('#panales').val() ) + parseInt( $('#transporte').val() ) + parseInt( $('#telefono-fijo').val() ) + parseInt( $('#telefono-movil').val() ) + parseInt( $('#gas').val() ) + parseInt( $('#educacion').val() ) + parseInt( $('#salud').val() ) + parseInt( $('#cable').val() ) ; 
		$('#total-gastos').val(parseInt(total));
	});
	
	$('#datosnino-peso, #datosnino-talla').keyup(function(e) {
		var key = e.which ? e.which : event.keyCode;
        var value = $(this).val(); 
        if( (key >= 48 && key <= 57) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 110 || key == 188 || key == 190) ){
          e.preventDefault();
          $(this).val(value.replace(",","."));
        }else if(key >= 37 && key <= 40 || key == 8 || key == 46){
        	return false;
        }else {
        	$(this).val(value.replace(/[A-Za-z_~\-!@#\$%\^&\*\(\)]+$/gim,""));
        }
	});

	/*$('#save-all').click(function() {
		$this.attr('disabled');
	});*/
</script>



