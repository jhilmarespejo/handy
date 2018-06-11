
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="group5 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInDown">
		<fieldset>
			<?php echo $this->Form->hidden('id_nino', ['id'=>'id-nino']); ?>
			<legend>Caracter&iacute;sticas de la vivienda</legend>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Paredes</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Ladrillo', 'value' => 'Ladrillo'],[ 'text' => 'Adobe', 'value' => 'Adobe'],[ 'text' => 'Piedra', 'value' => 'Piedra']];	

					echo $this->Form->select('paredes', $options, ['class'=>'form-control', 'id'=>'paredes']);
					echo $this->Form->hidden('valor_paredes', ['id'=>'valor-paredes']);
					?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Piso</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Piedra', 'value' => 'Piedra'] ,[ 'text' => 'Cemento', 'value' => 'Cemento'],[ 'text' => 'Machimbre', 'value' => 'Machimbre'],[ 'text' => 'Parquet', 'value' => 'Parquet']];	echo $this->Form->select('piso', $options, ['class'=>'form-control', 'id'=>'piso']); echo $this->Form->hidden('valor_piso', ['id'=>'valor-piso']);?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Tipo de vivienda</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Departamento', 'value' => 'Departamento'],[ 'text' => 'Casa independiente', 'value' => 'Casa-independiente'],[ 'text' => 'Casa compartida', 'value' => 'Casa-compartida'],[ 'text' => 'Cuarto multiple', 'value' => 'Cuarto-multiple']]; echo $this->Form->select('tipo_vivienda', $options, ['class'=>'form-control', 'id'=>'tipo-vivienda']);echo $this->Form->hidden('valor_tipo_vivienda', ['id'=>'valor-tipo-vivienda']);?>
			</div>
			
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">La vivienda es</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Propia', 'value' => 'Propia'],[ 'text' => 'Anticrético', 'value' => 'Anticretico'],[ 'text' => 'Alquiler', 'value' => 'Alquiler'],[ 'text' => 'Cedidia', 'value' => 'Cedidia'],[ 'text' => 'Compartida', 'value' => 'Compartida'],[ 'text' => 'Cuidador/a', 'value' => 'Cuidador']]; echo $this->Form->select('vivienda_es', $options, ['class'=>'form-control', 'id'=>'vivienda-es']); echo $this->Form->hidden('valor_vivienda_es', ['id'=>'valor-vivienda-es']);?>
			</div>
		</fieldset>
		<fieldset >
			<legend>Ambientes</legend>
			<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php echo $this->Form->input('numero_personas', ['label' => ['text' => 'Número de personas'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'max' => '20', 'id' => 'numero_personas'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php echo $this->Form->input('numero_dormitorios', ['label' => ['text' => 'Número de dormitorios'], 'class'=>'form-control', 'type' => 'text', 'id' => 'numero_dormitorios'] );?>
			</div>
			<?php $optionsCo = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']];
				 $optionsSa = $optionsCom = $optionsBa = $optionsTv = $optionsCompo = $optionsDvd = $optionsEst = $optionsHo = $optionsLa = $optionsRe = $optionsComputadora = $optionsCo; 
			?>
			<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<label for="">Cocina</label> 
				<?php echo $this->Form->select('cocina', $optionsCo, ['class'=>'form-control', 'id'=>'cocina']);echo $this->Form->hidden('valor_cocina', ['id'=>'valor-cocina']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<label for="">Sala</label> 
				<?php echo $this->Form->select('sala', $optionsSa, ['class'=>'form-control', 'id'=>'sala']);echo $this->Form->hidden('valor_sala', ['id'=>'valor-sala']);?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<label for="">Comedor</label> 
				<?php echo $this->Form->select('comedor', $optionsCom, ['class'=>'form-control', 'id'=>'comedor']);echo $this->Form->hidden('valor_comedor', ['id'=>'valor-comedor']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<label for="">Ba&ntilde;o</label> 
				<?php echo $this->Form->select('bano', $optionsBa, ['class'=>'form-control', 'id'=>'bano']);echo $this->Form->hidden('valor_bano', ['id'=>'valor-bano']); ?>
			</div>
		</fieldset>
		<fieldset >
			<legend>Mobiliario</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Televisión</label> 
				<?php echo $this->Form->select('tv', $optionsTv, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Componenete</label> 
				<?php echo $this->Form->select('componente', $optionsCompo, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">DVD</label> 
				<?php echo $this->Form->select('dvd', $optionsDvd, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Estufa</label> 
				<?php echo $this->Form->select('estufa', $optionsEst, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Horno microondas</label> 
				<?php echo $this->Form->select('microondas', $optionsHo, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Lavadora</label> 
				<?php echo $this->Form->select('lavadora', $optionsLa, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Refrigerador</label> 
				<?php echo $this->Form->select('refrigerador', $optionsRe, ['class'=>'form-control']); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<label for="">Computadora</label> 
				<?php echo $this->Form->select('computadora', $optionsComputadora, ['class'=>'form-control']); ?>
			</div>

		</fieldset>
	</div> <!--  /div.group5-->
	<div class="group6 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp">
		<fieldset>
			<legend>Equipamiento</legend>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Energ&iacute;a el&eacute;ctrica</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('energia_electrica', $options, ['class'=>'form-control', 'id'=>'energia-electrica']);echo $this->Form->hidden('valor_energia_electrica', ['id'=>'valor-energia-electrica']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Agua potable</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('agua_potable', $options, ['class'=>'form-control', 'id'=>'agua-potable']);echo $this->Form->hidden('valor_agua_potable', ['id'=>'valor-agua-potable']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Vertiente</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('vertiente', $options, ['class'=>'form-control', 'id'=>'vertiente']);echo $this->Form->hidden('valor_vertiente', ['id'=>'valor-vertiente']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Gas domicialiario</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('gas_domiciliario', $options, ['class'=>'form-control', 'id'=>'gas-domiciliario']);echo $this->Form->hidden('valor_gas_domiciliario', ['id'=>'valor-gas-domiciliario']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Alcantarillado</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('alcantarillado', $options, ['class'=>'form-control', 'id'=>'alcantarillado']);echo $this->Form->hidden('valor_alcantarillado', ['id'=>'valor-alcantarillado']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Internet</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('internet', $options, ['class'=>'form-control', 'id'=>'internet']);echo $this->Form->hidden('valor_internet', ['id'=>'valor-internet']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Televisi&oacute;n por cable</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('tv_cable', $options, ['class'=>'form-control', 'id'=>'tv-clave']);echo $this->Form->hidden('valor_tv_cable', ['id'=>'valor-tv-clave']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Tel&eacute;fono fijo</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('telefono_fijo', $options, ['class'=>'form-control', 'id'=>'telefono-fijo']);echo $this->Form->hidden('valor_telefono_fijo', ['id'=>'valor-telefono-fijo']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Tel&eacute;fono movil</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('telefono_movil', $options, ['class'=>'form-control', 'id'=>'telefono-movil']);echo $this->Form->hidden('valor_telefono_movil', ['id'=>'valor-telefono-movil']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Veh&iacute;culo propio</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('vehiculo_propio', $options, ['class'=>'form-control', 'id'=>'vehiculo-propio']);echo $this->Form->hidden('valor_vehiculo_propio', ['id'=>'valor-vehiculo-propio']); ?>
			</div>
			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<?php echo $this->Form->input('cantidad_vehiculos', ['label' => ['text' => 'Cantidad de vehículos'], 'class'=>'form-control', 'type' => 'text','id' => 'cantidad-vehiculos', 'disabled'] );?>
			</div>

			<div class="form-group col-xs-16 col-sm-12 col-md-12 col-lg-6">
				<label for="">Veh&iacute;culo como medio de trabajo</label> 
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'], [ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('vehiculo_medio_trabajo', $options, ['class'=>'form-control', 'id'=>'vehiculo-medio-trabajo']);echo $this->Form->hidden('valor_vehiculo_medio_trabajo', ['id'=>'valor-vehiculo-medio-trabajo']); ?>
			</div>
		</fieldset>
		<fieldset>
			<legend>Transporte</legend>
			<div class="form-group">
				<label for="">Medio de transporte que utiliza para llegar al centro infantil</label>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'A pie', 'value' => 'A pie'], [ 'text' => 'Micro o bus', 'value' => 'Micro o bus'], [ 'text' => 'Minibus', 'value' => 'Minibus'], [ 'text' => 'Otro', 'value' => 'Otro']]; echo $this->Form->select('transporte_trasladarse_cim', $options, ['class'=>'form-control', 'id'=>'transporte-trasladarse-cim']);echo $this->Form->hidden('valor_transporte_trasladarse_cim', ['id'=>'valor-transporte-trasladarse-cim']); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('transporte_trasladarse_cim_otro', ['label' => ['text' => 'Otro, medio de transporte'], 'class'=>'form-control', 'type' => 'text','id' => 'transporte-trasladarse-cim-otro', 'disabled'] );?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('tiempo_demora_cim', ['label' => ['text' => 'Tiempo que demora de su hogar al centro infantil (hh:mm)'], 'class'=>'form-control', 'type' => 'text','id' => 'tiempo-demora-cim'] );?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('gasto_transporte_dia', ['label' => ['text' => '¿ Cuanto gasta en transporte cada día?'], 'class'=>'form-control', 'type' => 'text'] );?>
			</div>
			<!--transporte_trasladarse_cim transporte_trasladarse_cim_otro valor_transporte_trasladarse_cim tiempo_demora_cim-->
		</fieldset>
	</div><!--  /div.group6-->
</div>
<div class="text-center">
	<?php echo $this->Html->tag('label','Siguiente >>>', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-vivienda'] ); ?>
</div>
<script type="text/javascript">

jQuery(document).ready(function ($) {
	$('#submit-vivienda').click(function(event) {
		if( true /*campos correctos*/ ){
			$('#msg-box-danger').addClass('hidden');
			$('.vivienda').removeClass('active');
			$('#vivienda').removeClass('active');
			$('.asp_economicos').addClass('active');
			$('#asp_economicos').addClass('active');
			/*$('#sit_familiar *').removeAttr('disabled');*/
		}else{
			$('#msg-box-danger').addClass('hidden');
			$('#msg-box-danger').removeClass('hidden');
		}
	});
});
</script>