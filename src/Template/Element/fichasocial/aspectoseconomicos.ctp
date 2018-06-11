<?//php pr($aspectoseconomicos);?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class=" group7 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInLeft">
		<fieldset>
			<legend>Egresos mensuales</legend>
			<?php echo $this->Form->hidden('id_nino', ['id'=>'id-nino']);?>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('alimentacion', ['label' => ['text' => 'Alimentacion'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'alimentacion'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('vivienda', ['label' => ['text' => 'Vivienda'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'vivienda_'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('luz', ['label' => ['text' => 'Luz'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'luz'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">				
				<?php echo $this->Form->input('agua', ['label' => ['text' => 'Agua'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'agua'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('vestimenta', ['label' => ['text' => 'Vestimenta'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'vestimenta'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('panales', ['label' => ['text' => 'Pañales'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'panales'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('transporte', ['label' => ['text' => 'Transporte'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'transporte'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('telefono_fijo', ['label' => ['text' => 'Teléfono fijo'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'telefono_fijo'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('telefono_movil', ['label' => ['text' => 'Teléfono movil'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'telefono_movil'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('gas', ['label' => ['text' => 'Gas'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'gas'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('educacion', ['label' => ['text' => 'Educación'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'educacion'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('salud', ['label' => ['text' => 'Salud'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'salud'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('cable', ['label' => ['text' => 'TV - Cable'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0' , 'id' => 'cable'] ); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('total_gastos', ['label' => ['text' => 'Total de gastos '], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0', 'readOnly' ] );
				?>
			</div>
		</fieldset>
	</div> <!-- /group7 -->
	<div class=" group8 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInDown">
		<fieldset>
			<legend>Ingresos económicos</legend>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('ingreso_mensual', ['label' => ['text' => 'Ingresos mensuales'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0'] );?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('ingreso_semanal', ['label' => ['text' => 'Ingresos semanales'], 'class'=>'form-control', 'type' => 'number', 'min' => '0', 'value' => '0'] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('quien_aporta', ['label' => ['text' => '¿Quién aporta?'], 'class'=>'form-control', 'type'=>'text', 'list' => 'aporte'] ); ?>
				<datalist id="aporte">
					<option value="Padre">Padre</option>
					<option value="Madre">Madre</option>
					<option value="Ambos">Ambos</option>
					<option value="Hermano(a)">Hermano(a)</option>
					<option value="Abuelo(a)">Abuelo(a)</option>
					<option value="Tio(a)">Tio(a)</option>
				</datalist>
			</div>
		</fieldset>
		<fieldset>
			<legend>Deudas del grupo familiar</legend>
			<label for="">Deudas</label> 
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Si', 'value' => 'Si'],[ 'text' => 'No', 'value' => 'No']]; echo $this->Form->select('deuda_grupo_familiar', $options, ['class'=>'form-control', 'id'=>'deuda-grupo-familiar']);echo $this->Form->hidden('valor_deuda_grupo_familiar', ['id'=>'valor-deuda-grupo-familiar']); ?>
			<div class="form-group">
				<?php echo $this->Form->input('monto_adeudado', ['label' => ['text' => 'Monto adeudado'], 'class'=>'form-control', 'type' => 'text', 'id' => 'monto-adeudado', 'disabled'] );?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('tipo_inversion', ['label' => ['text' => 'Tipo de inversión'], 'class'=>'form-control', 'type' => 'text', 'id' => 'tipo-inversion', 'disabled'] );?>
			</div>
		</fieldset>
	</div><!-- /group8 -->
</div>

<div class="text-center">
	<?php echo $this->Html->tag('label','Siguiente >>>', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-aspectos-eco'] ); ?>
</div>

<script type="text/javascript">
jQuery(document).ready(function ($) {
	$('#submit-aspectos-eco').click(function(event) {
		if( true /*campos correctos*/ ){
			$('#msg-box-danger').addClass('hidden');
			$('.asp_economicos').removeClass('active');
			$('#asp_economicos').removeClass('active');
			$('.consideraciones').addClass('active');
			$('#consideraciones').addClass('active');
			/*$('#sit_familiar *').removeAttr('disabled');*/
		}else{
			$('#msg-box-danger').addClass('hidden');
			$('#msg-box-danger').removeClass('hidden');
		}
	});
});
</script>