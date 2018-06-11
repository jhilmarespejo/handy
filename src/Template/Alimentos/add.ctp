<?//php echo $this->Html->script('jquery.min.js') ?>
<?//php echo $this->Html->script('bootstrap.min.js') ?>
<?//php echo $this->Html->script('bootstrap-datepicker.min.js') ?>
<!--APORTES/GASTOS NO MONETARIOS-->

<h2 class="title2 text-center">Acta de entrega de alimentos</h2>

<?php
	$options_name = [[ 'value' => '', 'text' => '...', 'selected', 'disabled']];	
		foreach ($data[0] as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
}
?>
<?php echo $this->Form->create('', ['url' => ['action' => 'add']]); ?>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<label>Nombre Centro Infantil</label>
		<?php echo $this->Form->select('Actaalimentos.id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
	</div>
	<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<?php echo $this->Form->input('Actaalimentos.fecha_ingreso', ['label' => ['text' => 'Fecha de recepción'], 'class'=>'form-control fecha_ingreso', 'type' => 'text'] ); ?>
	</div>
	<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<?php echo $this->Form->input('Actaalimentos.form', ['label' => 'Número de formulario', 'class'=>'form-control', 'required','type' => 'number', 'min'=>'0'] );?>
	</div>
	<div class="form-group col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<?php echo $this->Form->input('Actaalimentos.beneficiarios', ['label' => 'Num. Beneficiarios', 'class'=>'form-control', 'required','type' => 'number', 'min'=>'0'] );?>
	</div><br>

	<table class="table table-bordered" id='alimentos'>
	<thead>
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Alimento</th>
			<th class="text-center">Ración / niño / dia</th>
			<th class="text-center">Cantidad entregada</th>
			<th class="text-center">Unidad de medida</th>
			<th class="text-center">vencimiento</th>
		</tr>
		</tr>
	</thead>
	<tbody>
	<?//php echo $this->Form->hidden("Alimentos.0.alimento_seco"); ?>
		<?php for($i=1; $i<=0; $i++) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $this->Form->input("Alimentos.$i.alimento", ['label' => false, 'class'=>'alimentos form-control', 'required','type' => 'text', 'list' => 'options'] ); ?>
				<datalist id="options" class='strech'>
				<option value="Aceite">Aceite</option>
	    			<option value="Api">Api</option>
	    			<option value="Arroz">Arroz</option>
	    			<option value="Avena">Avena</option>
	    			<option value="Azucar">Azucar</option>
	    			<option value="Cañahua en pito">Cañahua en pito</option>
	    			<option value="Carne de soya">Carne de soya</option>
	    			<option value="Cebada en pito">Cebada en pito</option>
	    			<option value="Fideos y pastas">Fideos y pastas</option>
	    			<option value="Harina de trigo">Harina de trigo</option>
	    			<option value="Hojuela de quinua">Hojuela de quinua</option>
	    			<option value="Leche">Leche</option>
	    			<option value="Lentejas">Lentejas</option>
	    			<option value="Maicena">Maicena</option>
	    			<option value="Mani">Mani</option>
	    			<option value="Manteca">Manteca</option>
	    			<option value="Porotos">Porotos</option>
	    			<option value="Quinua">Quinua</option>
	    			<option value="Sémola">Sémola</option>
	    			<option value="Trigo entero">Trigo entero</option>
	    			<option value="Wilkaparu">Wilkaparu</option>
				</datalist>

			</td>
			<td><?php echo $this->Form->input("Alimentos.$i.racion_nino_dia", ['label' => false, 'class'=>'racion form-control', 'required','type' => 'number','min'=>'0'] );?></td>
			<td><?php echo $this->Form->input("Alimentos.$i.cantidad_entregada", ['label' => false, 'class'=>'form-control cant_entregada', 'required','type' => 'number','min'=>'0'] );?></td>
			<td><?php $unidades = [['text' => 'Gramos', 'value' => 'Gramos'],['text' => 'Kilogramos', 'value' => 'Kilogramos'],['text' => 'Litros', 'value' => 'Litros'],['text' => 'Libras', 'value' => 'Libras'],['text' => 'Unidades', 'value' => 'Unidades'],['text' => 'Bolsas', 'value' => 'Bolsas']]; echo $this->Form->select("Alimentos.$i.u_medida", $unidades, ['class'=>' form-control', 'id'=>'id-centro-infantil']);?></td>
			<td><?php echo $this->Form->input("Alimentos.$i.vencimiento", ['label' => false, 'class'=>"form-control vencimiento$i", 'required','type' => 'text'] );?></td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
	<div class="pull-left">
			<?php //echo $this->Form->button(__('Adicionar fila'), ['class'=>'btn btn-info btn-lg', 'id'=>'']);
				//echo $this->Html->tag('span','Adicionar fila', ['action' => ''],  );
				echo $this->Html->tag('span', 'Adicionar elemento', ['class' => 'btn btn-info btn-lg', 'id' => 'add-row']);
			?>

		</div>
		<div class="pull-right">
			<?php 
				echo $this->Form->button(__('Guardar datos'), ['class'=>'btn btn-save btn-lg']);
				echo $this->Form->end(); ?>
		</div>
	</div>


<script type="text/javascript" charset="utf-8" async defer>
//jQuery(document).ready(function($) {
	$('#add-row').on('click', function(event) {
		var lgth = $('table#alimentos tbody tr').length+1;
		var tr = '<tr><input type="hidden" name="Alimentos[0][alimento_seco]" id="alimento-seco-'+lgth+'"><td>'+lgth+'</td><td><div class="input text"><input type="text" name="Alimentos['+lgth+'][alimento]" class="form-control alimentos'+lgth+'" required="required" list="options" id="alimentos-'+lgth+'-alimento"></div><datalist id="options"><option value="Aceite">Aceite</option><option value="Api">Api</option><option value="Arroz">Arroz</option><option value="Avena">Avena</option><option value="Azucar">Azucar</option><option value="Cañahua en pito">Cañahua en pito</option><option value="Carne de soya">Carne de soya</option><option value="Cebada en pito">Cebada en pito</option><option value="Fideos y pastas">Fideos y pastas</option><option value="Harina de trigo">Harina de trigo</option><option value="Hojuela de quinua">Hojuela de quinua</option><option value="Leche">Leche</option><option value="Lentejas">Lentejas</option><option value="Maicena">Maicena</option><option value="Mani">Mani</option><option value="Manteca">Manteca</option><option value="Porotos">Porotos</option><option value="Quinua">Quinua</option><option value="Sémola">Sémola</option><option value="Trigo entero">Trigo entero</option><option value="Wilkaparu">Wilkaparu</option>	</datalist></td><td><div class="input number"><input type="number" name="Alimentos['+lgth+'][racion_nino_dia]" class="racion form-control" required="required" min="0" id="alimentos-'+lgth+'-racion-nino-dia"></div></td><td><div class="input number"><input type="number" name="Alimentos['+lgth+'][cantidad_entregada]" class="cant_entregada form-control" required="required" min="0" id="alimentos-0-cantidad-entregada"></div></td><td><select name="Alimentos['+lgth+'][u_medida]" class=" form-control" id="id-centro-infantil"><option value="Gramos">Gramos</option><option value="Kilogramos">Kilogramos</option><option value="Litros">Litros</option><option value="Libras">Libras</option><option value="Unidades">Unidades</option><option value="Bolsas">Bolsas</option></select></td><td><div class="input text"><input type="text" name="Alimentos['+lgth+'][vencimiento]" class="form-control vencimiento'+lgth+'" required="required" id="alimentos-'+lgth+'-vencimiento"></div></td></tr>';
		$('table#alimentos tbody').append(tr);
	
		$('table#alimentos tbody tr').each(function(index, e) {
			$('.vencimiento'+(index+1)).datepicker({
	        	format: 'yyyy-mm-dd',
				autoclose: true,
				startView: 2
	        });

		});

		

	    
	$('.cant_entregada').focusin(function(event) {
			var total_ninos = parseInt($('#actaalimentos-beneficiarios').val());
			var racion = parseInt( $(this).parents('td').siblings().children().find('.racion').val()  );/*$('.racion').val()*/
			//console.log($(this).parents('td').siblings().children().find('.racion').val());
			$(this).val( total_ninos * racion );
		});
	});
	$('i#quit-row').click(function(event) {
		var lgth = $('table#activos tbody tr').length+1;
		$(this).parent('tr').remove();
	});

    $('input.fecha_ingreso').datepicker({
    	format: 'yyyy-mm-dd',
    	autoclose: true,
    	endDate: 'now',
    	startView: 2
    });


</script>