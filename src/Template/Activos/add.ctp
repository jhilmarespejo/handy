<?php
	$options_name = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	$options_id = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
		foreach ($data[0] as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
			$options_id[$key+1]['text'] = $cim->id_cim;
			$options_id[$key+1]['value'] = $cim->id_cim;
}

$optFuente = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Donación Iglesia', 'value' => 'Donacion Iglesia' ],[ 'text' => 'GAMEA', 'value' => 'GAMEA'],[ 'text' => 'Aportes PPFF.', 'value' => 'Aportes PPFF'],[ 'text' => 'Children', 'value' => 'Children']];	
$optEstado = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Bueno', 'value' => 'Bueno' ],[ 'text' => 'Regular', 'value' => 'Regular'],[ 'text' => 'Malo', 'value' => 'Malo']];
?>

<h2 class="title2 text-center">Formulario de verificación de Bienes</h2>
<?php echo $this->Form->create('', ['url' => ['action' => 'add']]);
?>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<br>
	<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInLeft">
		<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<label>Nombre Centro Infantil</label>
			<?php echo $this->Form->select('0.id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil', 'requided']);?>
		</div>
		<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<? echo $this->Form->input('0.sala', ['label' => ['text' => 'Sala'], 'class'=>'form-control', 'type' => 'text', 'requided'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<?php echo $this->Form->input('0.fecha', ['minYear' => 2000,'maxYear' => date('Y'), 'label' => ['text' => 'Fecha'], 'class'=>'form-control', 'type' => 'date', 'requided'] );
				?>
		</div><br>
		<table class="table table-bordered" id='activos'>
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1a">#</th>
					<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Código</th>
					<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Fuente</th>
					<th class="col-xs-1 col-sm-3 col-md-3 col-lg-3">Detalle</th>
					<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Cantidad</th>
					<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Estado</th>
					<th class="col-xs-1 col-sm-3 col-md-3 col-lg-3">Observaciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><?php echo $this->Form->input('1.codigo', ['label' => false, 'class'=>'fifty', 'requided','type' => 'text', 'value'=>'s/c'] );?></td>
					<td><?php echo $this->Form->select('1.fuente', $optFuente, ['class'=>'form-control', 'required']);?></td>
					<td><?php echo $this->Form->input('1.detalle', ['label' => false, 'class'=>'', 'requided','type' => 'textarea', 'rows'=>'2', 'cols'=>'50'] );?></td>
					<td><?php echo $this->Form->input('1.cantidad', ['label' => false, 'class'=>'fifty', 'requided','type' => 'number', 'min'=>'0'] );?></td>
					<td><?php echo $this->Form->select('1.estado', $optEstado, ['class'=>'form-control', 'requided']);?></td>
					<td><?php echo $this->Form->input('1.obs', ['label' => false, 'class'=>'','type' => 'textarea', 'rows'=>'2', 'cols'=>'50'] );?></td>
					<!--<td><i onclick="erase(this)" title='Quitar fila' id='quit-row' class="fa fa-remove btn btn-danger btn-sm"></td>-->
				</tr>
			</tbody>
		</table>
		<div class="pull-left">
			<?php echo $this->Form->button(__('Adicionar fila'), ['class'=>'btn btn-info btn-lg', 'id'=>'add-row']);?>
		</div>
		<div class="pull-right">
			<?php 
				echo $this->Form->button(__('Guardar datos'), ['class'=>'btn btn-save btn-lg']);
				echo $this->Form->end(); ?>
		</div>
	</div>
</div>




<script type="text/javascript" charset="utf-8" async defer>
function erase(that){
	var i = that.parentNode.parentNode;
	that.parentNode.parentNode.parentNode.removeChild(i);
	document.getElementById("activos").deleteRow(i+1);
}
jQuery(document).ready(function($) {
	$('#add-row').click(function(event) {
		var lgth = $('table#activos tbody tr').length+1;
		var tr = '<tr><td>'+lgth+'</td><td><div class="input text"><input type="text" name="'+lgth+'[codigo]" class="fifty" requided="requided" value="s/c"></div></td><td><select name="'+lgth+'[fuente]" class="form-control" required="required"><option value="" selected="selected" disabled="disabled"></option><option value="Donacion Iglesia">Donación Iglesia</option><option value="GAMEA">GAMEA</option><option value="Aportes PPFF">Aportes PPFF.</option><option value="Children">Children</option></select></td><td><div class="input textarea"><textarea name="'+lgth+'[detalle]" class="" requided="requided" rows="2" cols="50"></textarea></div></td><td><div class="input number"><input type="number" name="'+lgth+'[cantidad]" class="fifty" requided="requided" min="0"></div></td><td><select name="'+lgth+'[estado]" class="form-control" requided="requided"><option value="" selected="selected" disabled="disabled"></option><option value="Bueno">Bueno</option><option value="Regular">Regular</option><option value="Malo">Malo</option></select></td><td><div class="input textarea"><textarea name="'+lgth+'[obs]" class="" rows="2" cols="50" ></textarea></div></td></tr>';
		$('table#activos tbody').append(tr);
	});
	$('i#quit-row').click(function(event) {
		var lgth = $('table#activos tbody tr').length+1;
		$(this).parent('tr').remove();
	});
});
</script>