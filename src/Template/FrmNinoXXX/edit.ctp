<?php echo $this->Form->create($nino); 


?>
<div class="text-center">
        <?php echo  $this->Html->link('Cancelar', ['controller'=>'FrmNino', 'action'=>'index'], ['class' => 'btn btn-danger btn-lg']);?>
</div>

<h2 class="title2 text-center"> Edición de datos </h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php
	$options_name = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
		foreach ($cims as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
		}?>

	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<!--<fieldset>
			<legend>Centro Infantil Municipal</legend>
			<div class="form-group">
				<label>Nombre Centro Infantil</label>
				<?//php echo $this->Form->select('nombre', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil']);?>
			</div>
		</fieldset>-->
		<fieldset>
			<legend>Identificación</legend>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.id_nino', ['label' => ['text' => 'Código del niña(o)'], 'class'=>'form-control', 'type'=>'text', 'required', 'value'=> $nino->id_nino] );  ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">			
				<?php echo $this->Form->input('datosnino.fecha_nacimiento', ['label' => ['text' => 'Fecha de nacimiento'], 'class'=>'form-control', 'type'=>'text', 'required', 'value'=> ($nino->fecha_nacimiento)? $nino->fecha_nacimiento->i18nFormat('yyyy-MM-dd'):''] );  ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.paterno', ['label' => ['text' => 'Apellido Paterno'], 'class'=>'form-control', 'type'=>'text', 'value'=> ucfirst($nino->paterno)] ); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.materno', ['label' => ['text' => 'Apellido Materno'], 'class'=>'form-control', 'type'=>'text', 'required', 'value'=> ucfirst($nino->materno)] );?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.nombres', ['label' => ['text' => 'Nombres'], 'class'=>'form-control', 'type'=>'text', 'required', 'value'=> ucfirst($nino->nombres)]);?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.edad', ['label' => ['text' => 'Edad [años, meses]'], 'class'=>'form-control', 'type'=>'text', 'required']);?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.fecha_registro', ['label' => ['text' => 'Fecha de Ingreso'], 'class'=>'form-control', 'type'=>'date', 'value'=> $nino->fecha_registro] );?> 
			</div>			
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php $sexo = [[ 'text' => $nino->sexo, 'value' => $nino->sexo, 'selected', 'disabled'],[ 'text' => 'Femenino', 'value' => 'Femenino' ],[ 'text' => 'Masculino', 'value' => 'Masculino']];	?>
				<label for="">Sexo</label> 
				<?php echo $this->Form->select('datosnino.sexo', $sexo, ['class'=>'form-control', 'id'=>'sexo', 'required']);?>
			</div>
		</fieldset><br>

		<fieldset>
			<legend>Identificación sobre el ingreso</legend>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.peso', ['label' => ['text' => 'Peso (kg.)'], 'class'=>'form-control', 'type' => 'text', 'required', 'value'=> $nino->peso]);
				 ?>

			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.talla', ['label' => ['text' => 'Talla (cm.)'], 'class'=>'form-control', 'type' => 'text', 'required', 'value'=> $nino->talla] ); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.estado_nutricional', ['label' => ['text' => 'Estado Nutricional'], 'class'=>'form-control', 'type' => 'text', 'required', 'value'=> $nino->estado_nutricional] ); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Seguro de salud</label> 
				<?php $seg = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Caja Nacional', 'value' => 'Caja Nacional' ],[ 'text' => 'Seguro Universitario', 'value' => 'Seguro Universitario'],[ 'text' => 'Caja Petrolera', 'value' => 'Caja Petrolera'],[ 'text' => 'Seguro Ganadero', 'value' => 'Seguro Ganadero'],[ 'text' => 'Seguro Publico (SUMI)', 'value' => 'Seguro Publico (SUMI)'],[ 'text' => 'Otro', 'value' => 'Otro']];	?>
				<?php echo $this->Form->select('datosnino.tipo_seguro_salud', $seg, ['class'=>'form-control', 'id'=>'tipo-seguro-salud', 'required', 'value'=> $nino->tipo_seguro_salud]);?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.otro_tipo_seguro_salud', ['label' => ['text' => 'Otro seguro de salud'], 'class'=>'form-control', 'type' => 'text', 'value'=> $nino->otro_tipo_seguro_salud] );?>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.nro_seguro', ['label' => ['text' => 'Nro. de Seguro'], 'class'=>'form-control', 'type' => 'text', 'value'=> $nino->nro_seguro] ); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">&nbsp;<br>Certificado de Nacimiento</label> 
				<?php $certificado = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si preseta', 'value' => 'Si' ],[ 'text' => 'No preseta', 'value' => 'No']];	?>
				<?php echo $this->Form->select('datosnino.certificado_nacimiento', $certificado, ['class'=>'form-control', 'id'=>'certificado-nacimiento', 'required', 'value'=> $nino->certificado_nacimiento]);?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.nro_partida_certf_nac', ['label' => ['text' => 'Número de partida del certficado de Nacimiento'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value'=> $nino->nro_partida_certf_nac] );?>
			</div>
		</fieldset><br>
		<fieldset>
			<legend>Esquema de vacunación</legend>
				<table class="table table-bordered" id="table-vacunas">
					<tbody>
						<tr>
							<td colspan="2">BCG</td>
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.bcg', ['label' => false, 'class'=>'bcg col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> ( !empty($vacuna->bcg))? $vacuna->bcg->i18nFormat('yyyy-MM-dd'): '' ] );?></td>
							<td rowspan="3">Pentavalente (2)</td>
							<td>1 ra</td>
							<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><?php echo $this->Form->input('vacunas.pentav_1d', ['label' => false, 'class'=>'pentav-1d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->pentav_1d))? $vacuna->pentav_1d->i18nFormat('yyyy-MM-dd'): '' ] );?></td>
						</tr>
							<td rowspan="3">Penta Valente (1)</td>
							<td>1 ra</td>
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.pentav2_1d', ['label' => false, 'class'=>'pentav2-1d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->pentav2_1d))? $vacuna->pentav2_1d->i18nFormat('yyyy-MM-dd'): ''] );?></td>
							<td>2 da</td>
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.pentav_2d', ['label' => false, 'class'=>'pentav-2d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->pentav_2d))? $vacuna->pentav_2d->i18nFormat('yyyy-MM-dd'): '' ] );?></td>
						</tr>

						
						<tr>
							<td>2 da</td>
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.pentav2_2d', ['label' => false, 'class'=>'pentav2-2d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->pentav2_2d))? $vacuna->pentav2_2d->i18nFormat('yyyy-MM-dd'): ''] );?></td>
							<td>3 ra</td>
							<td class="col-xs-1 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.pentav_3d', ['label' => false, 'class'=>'pentav-3d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->pentav_3d))? $vacuna->pentav_3d->i18nFormat('yyyy-MM-dd'): '' ] );?></td>
						</tr>
						<tr>
							<td>3 ra</td>
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.pentav2_3d', ['label' => false, 'class'=>'pentav2-3d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->pentav2_3d))? $vacuna->pentav2_3d->i18nFormat('yyyy-MM-dd'): ''] );?></td>
							<td colspan="2">SRP</td>	
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.srp', ['label' => false, 'class'=>'srp col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->srp))? $vacuna->srp->i18nFormat('yyyy-MM-dd'): ''] );?></td>
						</tr>
						<tr>
							<td colspan="5">Antiamarilla</td>
							<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $this->Form->input('vacunas.antiamarilla', ['label' => false, 'class'=>'antiamarilla col-xs-12 col-sm-12 col-md-12 col-lg-12', 'type' => 'text', 'value'=> (!empty($vacuna->antiamarilla))? $vacuna->antiamarilla->i18nFormat('yyyy-MM-dd'): ''] );?></td>
						</tr>
					</tbody>
				</table>
		</fieldset>
		<fieldset>
			<legend>Escala abreviada de desarrollo</legend>
			<table class="table table-bordered">

				<tbody>
					<tr>
						<td> </td>
						<td><b>Numeral<b/></td>
						<td><b>Literal<b/></td>
					</tr>
					<tr>
						<td>Motricidad gruesa</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Motricidad fina</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Audición y lenguaje</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Personal y solcial</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Total</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</fieldset>

	</div><!--/group1-->
	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		
		<fieldset>
			<legend>Datos de la familia</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.municipio', ['label' => ['text' => 'Municipio'], 'class'=>'form-control', 'type' => 'text', 'value'=> ($nino->municipio)? $nino->municipio : 'El Alto'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.zona_barrio', ['label' => ['text' => 'Zona'], 'class'=>'form-control', 'type'=>'text', 'list' => 'options', 'required', 'value'=> $nino->zona_barrio] ); ?>
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
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.calle_avenida', ['label' => ['text' => 'Calle/Avenida/#'], 'class'=>'form-control', 'type' => 'text', 'required', 'value'=> ucfirst($nino->calle_avenida)] );?>
			</div>
			<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('datosnino.fono', ['label' => ['text' => 'Teléfono'], 'class'=>'form-control', 'type' => 'number', 'value'=> $nino->fono] );?>
			</div>
		</fieldset><br>
		<fieldset>
			<legend>Información económica</legend>
			<div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-6">
				<?php echo $this->Form->input('situacionfamiliar.cantidad_miembros_fam', ['label' => ['text' => 'Cantidad miembros familia'], 'class'=>'form-control', 'type' => 'number', 'max' => '20', 'min' => '0', 'required', 'value' => (!empty($sitFamiliar->cantidad_miembros_fam))? $sitFamiliar->cantidad_miembros_fam : '' ] );?>
			</div>
			<div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-6">
				<?php echo $this->Form->input('situacionfamiliar.catidad_hijos_6a', ['label' => ['text' => 'Cantidad niños menores a 6 años'], 'class'=>'form-control', 'min'=>'0','type' => 'number', 'required', 'value' => (!empty($sitFamiliar->catidad_hijos_6a))? $sitFamiliar->catidad_hijos_6a : '' ] );?>
			</div>
			<div class="form-group col-xs-4 col-sm-4 col-md-4 col-lg-6">
				<label for="">¿Acuden al servicio de Salud?</label> 
					<?php $certificado = [[ 'text' => (!empty($sitFamiliar->acuden_serv_sal))? $sitFamiliar->acuden_serv_sal:'' , 'value' => (!empty($sitFamiliar->acuden_serv_sal))? $sitFamiliar->acuden_serv_sal:'', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	?>
					<?php echo $this->Form->select('situacionfamiliar.acuden_serv_sal', $certificado, ['class'=>'form-control', 'id'=>'certificado-nacimiento']);?>
			</div>
			
			<?php $idiomas = (!empty($sitFamiliar->idiomas))? explode(',', $sitFamiliar->idiomas):array();
			//$idiomas = explode(',', $sitFamiliar->idiomas);
			?>

			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<label>Idioma</label>
				<input type="hidden" name="situacionfamiliar[idiomas]" value="">

				<div class="checkbox">
					<label for="situacionfamiliar-idiomas-castellano">
						<input type="checkbox" <?php echo (in_array("Castellano", $idiomas, true))? 'checked="checked"' :'' ; ?>  name="situacionfamiliar[idiomas][]" value="Castellano" id="situacionfamiliar-idiomas-castellano">Castellano
					</label>
				</div>

				<div class="checkbox">
					<label for="situacionfamiliar-idiomas-quechua">
						<input type="checkbox" <?php echo (in_array("Quechua", $idiomas, true))? 'checked="checked"' :'' ; ?> name="situacionfamiliar[idiomas][]" value="Quechua" id="situacionfamiliar-idiomas-quechua">Quechua
					</label>
				</div>

				<div class="checkbox">
					<label for="situacionfamiliar-idiomas-aymara">
						<input type="checkbox" <?php echo (in_array("Aymara", $idiomas, true))? 'checked="checked"' :'' ; ?> name="situacionfamiliar[idiomas][]" value="Aymara" id="situacionfamiliar-idiomas-aymara">Aymara
					</label>
				</div>

				<div class="checkbox">
					<label for="situacionfamiliar-idiomas-guarani">
						<input type="checkbox" <?php echo (in_array("Guarani", $idiomas, true))? 'checked="checked"' :'' ; ?> name="situacionfamiliar[idiomas][]" value="Guarani" id="situacionfamiliar-idiomas-guarani">Guarani
					</label>
				</div>			
			</div>


			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Energ&iacute;a el&eacute;ctrica</label> 
				<?php $options = [['text' => (!empty($cVivienda->energia_electrica))? $cVivienda->energia_electrica:'', 'value' =>  (!empty($cVivienda->energia_electrica))? $cVivienda->energia_electrica:'', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('caracteristicasvivienda.energia_electrica', $options, ['class'=>'form-control', 'id'=>'energia-electrica']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Agua potable</label> 
				<?php $options = [[ 'text' => (!empty($cVivienda->agua_potable)? $cVivienda->agua_potable:''), 'value' => (!empty($cVivienda->agua_potable)? $cVivienda->agua_potable:''), 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('caracteristicasvivienda.agua_potable', $options, ['class'=>'form-control', 'id'=>'agua-potable']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Gas domicialiario</label>
				<?php $options = [[ 'text' => (!empty($cVivienda->gas_domiciliario))? $cVivienda->gas_domiciliario:'', 'value' => (!empty($cVivienda->gas_domiciliario))? $cVivienda->gas_domiciliario:'', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('caracteristicasvivienda.gas_domiciliario', $options, ['class'=>'form-control', 'id'=>'gas-domiciliario']);?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Alcantarillado</label>
				<?php $options = [[ 'text' => (!empty($cVivienda->alcantarillado))? $cVivienda->alcantarillado:'', 'value' => (!empty($cVivienda->alcantarillado))? $cVivienda->alcantarillado:'', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('caracteristicasvivienda.alcantarillado', $options, ['class'=>'form-control', 'id'=>'alcantarillado']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Tipo de vivienda</label> 
				<?php $options = [[ 'text' => ( !empty($cVivienda->tipo_vivienda))? $cVivienda->tipo_vivienda:'', 'value' => ( !empty($cVivienda->tipo_vivienda))? $cVivienda->tipo_vivienda:'', 'selected', 'disabled'],[ 'text' => 'Departamento', 'value' => 'Departamento'],[ 'text' => 'Casa independiente', 'value' => 'Casa independiente'],[ 'text' => 'Casa compartida', 'value' => 'Casa compartida'],[ 'text' => 'Cuarto multiple', 'value' => 'Cuarto multiple']]; echo $this->Form->select('caracteristicasvivienda.tipo_vivienda', $options, ['class'=>'form-control', 'id'=>'tipo-vivienda']);?>
			</div>
		</fieldset><br>
		<fieldset>
			<legend>Retiro</legend>
			<div class="form-group">
				<label for="">Causas del retiro</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Cambio de domicilio', 'value' => 'Cambio de domicilio'],[ 'text' => 'Promoción', 'value' => 'Promocion'],[ 'text' => 'Insatisfacción con el servicio', 'value' => 'Insatisfaccion con el servicio'],[ 'text' => 'Costo alto del servicio', 'value' => 'Costo alto del servicio'],[ 'text' => 'Desinterés de los padres', 'value' => 'Desinteres de los padres'],[ 'text' => 'Inadaptación del niño (problemas de conducta)', 'value' => 'Inadaptacion del niño (problemas de conducta)'],[ 'text' => 'Otras', 'value' => 'Otras']]; 
					echo $this->Form->select('datosnino.causas_retiro', $options, ['class'=>'form-control', 'id'=>'causas-retiro', 'value'=> $nino->causas_retiro]);?>
			</div>
			<?php echo $this->Form->input('datosnino.detalle_causas_retiro', ['label' => ['text' => 'Especifique las causas del retiro'], 'class'=>'form-control', 'type' => 'text', 'disabled', 'id'=>'detalle-causas-retiro', 'value'=> $nino->detalle_causas_retiro ] );?>
		</fieldset>
	</div><!--/group2-->
	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<fieldset>
			<legend>
				Datos del grupo familiar<br>
				<a href="#table-familiares" title="" class="btn btn-warning btn-xsm" id="add-tr-fam"> + Adicionar familiar</a>
			</legend>
			<table class="table table-bordered table-responsive" id="table-familiares">
				<thead>
					<tr>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Nombres</th>
						<th>Grado de parentesco</th>
						<th>Fecha de nacimiento</th>
						<th class="fifty">Edad</th>
						<th>Grado de instruccion</th>
						<th>Ocupación</th>
						<th class="fifty">Ingreso Mensual</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($familiares as $key => $familiar) { 
						if($familiar->materno && $familiar->nombres) { ?>
					<tr>
						<?php echo $this->Form->hidden("familiares.$key.id_nino", ['value' =>  $familiar->id_nino]);
							 echo $this->Form->hidden("familiares.$key.id", ['value' =>  $familiar->id]); ?>
						<td><?php echo $this->Form->input("familiares.$key.paterno", ['label'=>['text' => false],'type'=>'text', 'value'=> $familiar->paterno]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.materno", ['label'=>['text' => false],'type'=>'text', 'value'=> $familiar->materno]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.nombres", ['label'=>['text' => false],'type'=>'text', 'value'=> $familiar->nombres]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.parentesco", ['label'=>['text' => false],'type'=>'text', 'value'=> $familiar->parentesco]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.fecha_nacimiento", ['label'=>['text' => false],'type'=>'text','class'=>'date'.$key, 'value'=> ($familiar->fecha_nacimiento)? $familiar->fecha_nacimiento->i18nFormat('yyyy-MM-dd'):'' ]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.edad", ['label'=>['text' => false],'type'=>'text','class'=>'fifty edad'.$key, 'value'=> $familiar->edad]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.grado_instruccion", ['label'=>['text' => false],'type'=>'text', 'value'=> $familiar->grado_instruccion]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.ocupacion", ['label'=>['text' => false],'type'=>'text', 'value'=> implode(",", json_decode($familiar->ocupacion))]); ?></td>
						<td><?php echo $this->Form->input("familiares.$key.ingresos", ['label'=>['text' => false],'type'=>'text','class'=>'fifty', 'value'=> $familiar->ingresos]); ?></td>
					</tr>					

				<?php } }?>
					
				</tbody>
			</table>
		</fieldset>
	</div>
</div>
	<div class="text-center">
		<?php echo $this->Form->button('Guardar Información', ['class'=>'btn btn-save btn-lg']);?>
	</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript" charset="utf-8" async defer>

	$('.bcg, #datosnino-fecha-nacimiento, .pentav-1d, .pentav-2d, .pentav-3d, .antiamarilla, .pentav2-1d, .pentav2-2d, .pentav2-3d, .srp').datepicker({
        	format: 'yyyy-mm-dd',
			autoclose: true,
			endDate: 'now',
			startView: 2
    });
	

	$('#add-tr-fam').click(function(event) {
		var lgth = $('table#table-familiares tbody tr').length;
		var tr = '<tr class="row-'+lgth+'"><td><input type="text" name="familiares['+lgth+'][paterno]" class="" maxlength="45" id="familiares-paterno"></td><td><input type="text" name="familiares['+lgth+'][materno]" class="" maxlength="45" id="familiares-materno"></td><td><input type="text" name="familiares['+lgth+'][nombres]" class="" maxlength="45" id="familiares-nombres"></td><td><input type="text" name="familiares['+lgth+'][parentesco]" class="" id="familiares-parentesco" list="parent"><datalist id="parent"><option value="Padre">Padre</option><option value="Madre">Madre</option><option value="Hermano(a)">Hermano(a)</option><option value="Abuelo(a)">Abuelo(a)</option><option value="Tio(a)">Tio(a)</option></datalist></td><td><input type="text" name="familiares['+lgth+'][fecha_nacimiento]" class="date'+lgth+'" id="familiares-fecha-nacimiento"></td><td><div class="input number text-center"><input type="number" min="0" name="familiares['+lgth+'][edad]" class="fifty edad'+lgth+'" id="familiares-edad"></div></td><td><select name="familiares['+lgth+'][grado_instruccion]" class=" strech" id="familiares-grado-instruccion"><option value="Sin educacacion">Sin educacacion</option><option value="Primaria">Primaria</option><option value="Secundaria">Secundaria</option><option value="Auxiliar">Auxiliar</option><option value="Tecnico">Técnico</option><option value="Universitario"> Universitario</option><option value="Otro">Otro</option></option></td><td><input class="strech" type="text" name="familiares['+lgth+'][ocupacion][0]" class="" id="familiares-ocupacion"><br></td><td><input type="text" name="familiares['+lgth+'][ingresos]" class="fifty" id="familiares-ingresos"></td></tr>';

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
	


	/*id, id_nino, bcg, pentav_1d, pentav_2d, pentav_3d, antiamarilla, pentav2_1d, pentav2_2d, pentav2_3d, srp*/
</script>

