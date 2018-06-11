<!--ELEMENT/APORTES/GASTOS-->

<?php echo $this->Form->create('', ['url' => ['action' => 'gastos']]); 

$totalIngresoPeriodoActual = $control['total_ingreso_periodo_actual'];
$saldoPeriodoAnterior = $control['saldo_periodo_anterior'];

//pr($control['total_ingreso_periodo_actual']);
//pr(array_search('total_ingreso_periodo_actual', array_values($control)));

//if(isset($control->first()->toArray())){ ?>
	<h4 class="pull-left" >
		<?php if($totalIngresoPeriodoActual) { echo 'Total ingresos para el periodo actual Bs:' ?>
			<span id='total_ingresos'><b><?php echo $totalIngresoPeriodoActual?></b></span>
		<?php } else { echo 'Sin datos!'; }?>
		 
	</h4> 

<?php if(isset($totalIngresoPeriodoActual)) { ?>
	<table class="table table-bordered" id='gastos'>
	<thead>
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">Concepto</th>
			<th class="text-center">Monto (Bs.)</th>
			<th class="text-center">Observaciones</th>
		</tr>
	</thead>
	<tbody>
	
	<?php for($i=0; $i<=0; $i++) { ?>
	<tr>
		<td><?php echo $i+1; echo $this->Form->hidden("Gastos.$i.id_cim", ['id'=> 'id_cim_'.$i, 'value' => $idCim]);
			echo $this->Form->hidden("Gastos.$i.periodo", ['id'=> 'periodo_'.$i, 'value' => $periodo]); 
			echo $this->Form->hidden("Gastos.$i.ingresos_gastos_monetarizados", ['id'=> 'gas_no_mon_'.$i, 'value' => 'No']);
			echo $this->Form->hidden('totalIngresoPeriodoActual', ['id'=> 'ing_per_act_'.$i, 'value' => $totalIngresoPeriodoActual]); 
			//echo $this->Form->hidden('saldoPeriodoAnterior', ['id'=> 'sal_ant_'.$i, 'value' => $saldoPeriodoAnterior]); ?></td>
		<td><?php echo $this->Form->input("Gastos.$i.fecha_gasto", ['label' => false, 'class'=>'fecha_gasto', 'required','type' => 'text', 'required'] );?></td>
		<td><?php 
		$tAporte = [['text' => '...', 'value' => '', 'selected'],['text' => 'Energía eléctrica', 'value' => '2100'],['text' => 'Agua', 'value' => '21300'],['text' => 'Telefonía', 'value' => '21400'],['text' => 'Fletes y almacenes', 'value' => '22300'],['text' => 'Mantenimiento y reparación de inmuebles', 'value' => '24110'],['text' => 'Servicios de imprenta', 'value' => '25600'],['text' => 'Alimentación hospitalaria aeronaves y O.E.', 'value' => '31140'],['text' => 'Combustible L.D. para consumo', 'value' => '34110'],['text' => 'Prod. Químicos farmaceúticos', 'value' => '34200'],['text' => 'Material de limpieza', 'value' => '39100'],['text' => 'Útiles y educ. Cultura y cap.', 'value' => '39600'],['text' => 'Maquinaria y equipo', 'value' => '4300']]; echo $this->Form->select("Gastos.$i.partida", $tAporte, ['class'=>' form-control', 'id'=>'id-centro-infantil', 'required']);
		?></td>
		<td><?php echo $this->Form->input("Gastos.$i.monto", ['label' => false, 'class'=>'fifty number', 'required','type' => 'text'] );
		?></td>
		<td><?php echo $this->Form->input("Gastos.$i.observaciones", ['label' => false, 'class'=>'', 'type' => 'textarea', 'cols'=>'25', 'rows'=>'2'] ); ?></td>
	</tr>
	</tr>
	</tbody>
	<?php } ?>
</table>
<div class="pull-left">
	<?php echo $this->Html->tag('span', 'Adicionar elemento', ['class' => 'btn btn-info btn-lg', 'id' => 'add-row']);
			?>
</div>
<div class="text-center">
	<?php echo $this->Form->button(__('Guardar datos'), ['class'=>'btn btn-save btn-lg']);
		echo $this->Form->end(); ?>
</div>
<?php }?>


<script type="text/javascript" >

var totalGastos = 0;


decimal( $('table#gastos input#gastos-0-monto') );
function decimal(that){
	that.keyup(function(e) {
	var key = e.which ? e.which : event.keyCode;
    var value = that.val(); 
    if( (key >= 48 && key <= 57) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 110 || key == 188 || key == 190) ){
      e.preventDefault();
      that.val(value.replace(",","."));
    }else if(key >= 37 && key <= 40 || key == 8 || key == 46){
    	return false;
    }else {
    	that.val(value.replace(/[A-Za-z_~\-!@#\$%\^&\*\(\)]+$/gim,""));
    }
});
}


$('#add-row').click(function(event) {
	var lgth = $('table#gastos tbody tr').length+1;
	var codCim = $('#id_cim_0').val();
	var periodo = $('#periodo_0').val();
	var gasNoMon = $('#gas_no_mon_0').val();
	var totIng = $('#ing_per_act_0').val();
	var salAnt = $('#sal_ant_0').val();
	
	var tr = '<tr><td>'+lgth+'<input type="hidden" name="Gastos['+lgth+'][id_cim]" value="'+codCim+'"><input type="hidden" name="Gastos['+lgth+'][periodo]" value="'+periodo+'"><input type="hidden" name="Gastos['+lgth+'][ingresos_gastos_monetarizados]" value="'+gasNoMon+'"><input type="hidden" name="totalIngresoPeriodoActual" value="'+totIng+'"><input type="hidden" name="saldoPeriodoAnterior" value="'+salAnt+'"></td><td><div class="input text"><input type="text" name="Gastos['+lgth+'][fecha_gasto]" class="fecha_gasto" "required"="required" id="gastos-'+lgth+'-fecha-gasto"></div></td><td><select name="Gastos['+lgth+'][partida]" class="form-control" "required"="required" id="id-centro-infantil"><option value="" selected="selected">...</option><option value="2100">Energía eléctrica</option><option value="21300">Agua</option><option value="21400">Telefonía</option><option value="22300">Fletes y almacenes</option><option value="24110">Mantenimiento y reparación de inmuebles</option><option value="25600">Servicios de imprenta</option><option value="31140">Alimentación hospitalaria aeronaves y O.E.</option><option value="34110">Combustible L.D. para consumo</option><option value="34200">Prod. Químicos farmaceúticos</option><option value="39100">Material de limpieza</option><option value="39600">Útiles y educ. Cultura y cap.</option><option value="4300">Maquinaria y equipo</option></select></td><td><div class="input text"><input type="text" name="Gastos['+lgth+'][monto]" class="fifty number" required="required" id="gastos-'+lgth+'-monto"></div></td><td><div class="input textarea"><textarea name="Gastos['+lgth+'][observaciones]" cols="25" rows="2" id="gastos-'+lgth+'-observaciones"></textarea></div></td></tr>';
	$('table#gastos tbody').append(tr);

	$('input.fecha_gasto').datepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		endDate: 'now',
		orientation: 'bottom'
    });	

    decimal( $('table#gastos input#gastos-'+lgth+'-monto') );

});


/*function calcGastos(){
	$('table#gastos tr td div input.number').on('keypress', function(event) {
		totalGastos = parseFloat($(this).val()) + parseFloat(totalGastos);
		console.log( (totalGastos) );
	});
}
*/

$('input.fecha_gasto').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	endDate: 'now',
	orientation: 'bottom'
});	
</script>





<!--
<tr>
	<td>
		<input type="hidden" name="Gastos['+lgth+'][id_cim]" value="'+codCim+'">
		<input type="hidden" name="Gastos['+lgth+'][periodo]" value="'+periodo+'">
		<input type="hidden" name="Gastos['+lgth+'][ingresos_gastos_monetarizados]" value="'+gasNoMon+'">
		<input type="hidden" name="totalIngresoPeriodoActual" value="'+totIng+'">
		<input type="hidden" name="saldoPeriodoAnterior" value="'+salAnt+'">
	</td>
	<td>
		<div class="input text"><input type="text" name="Gastos['+lgth+'][fecha_gasto]" class="fecha_gasto number" required="required" id="gastos-'+lgth+'-fecha-gasto"></div>
	</td>
	<td>
		<select name="Gastos['+lgth+'][partida]" class=" form-control" id="id-centro-infantil">
			<option value="..." selected="selected">...</option><option value="2100">Energía eléctrica</option><option value="21300">Agua</option><option value="21400">Telefonía</option><option value="22300">Fletes y almacenes</option><option value="24110">Mantenimiento y reparación de inmuebles</option><option value="25600">Servicios de imprenta</option><option value="31140">Alimentación hospitalaria aeronaves y O.E.</option><option value="34110">Combustible L.D. para consumo</option><option value="34200">Prod. Químicos farmaceúticos</option><option value="39100">Material de limpieza</option><option value="39600">Útiles y educ. Cultura y cap.</option><option value="4300">Maquinaria y equipo</option>
		</select>
	</td>
	<td>
		<div class="input text"><input type="text" name="Gastos['+lgth+'][monto]" class="fifty number" required="required" =""="" id="gastos-'+lgth+'-monto"></div>
	</td>
	<td>
		<div class="input textarea"><textarea name="Gastos['+lgth+'][observaciones]" class="" cols="25" rows="2" id="gastos-'+lgth+'-observaciones"></textarea></div>
	</td>
</tr>-->