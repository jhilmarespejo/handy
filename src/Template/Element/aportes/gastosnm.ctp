<!--ELEMENT/APORTES/GASTOS-->

<?php echo $this->Form->create('', ['url' => ['action' => 'gastosNm']]); 

$totalIngresoPeriodoActual = $controlnm['total_ingreso_nomonetario_actual'];
$saldoPeriodoAnterior = $controlnm['saldo_periodo_anterior'];

//pr($control['total_ingreso_periodo_actual']);
//pr(array_search('total_ingreso_periodo_actual', array_values($control)));

//if(isset($control->first()->toArray())){ ?>
<h4 class="pull-left" > <?php echo ($totalIngresoPeriodoActual)? 'Total Ingreso Periodo Actual. Bs: '.$totalIngresoPeriodoActual:'No se encontraron datos' ; ?><br> <?php echo ($saldoPeriodoAnterior)? 'Saldo del periodo anterior. Bs: '.$saldoPeriodoAnterior :'' ?></h4>

<?php if(isset($totalIngresoPeriodoActual)) { ?>
	<table class="table table-bordered" id='gastosnm'>

	<thead>
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">Concepto</th>
			<th class="text-center">Monto (Bs.)</th>
			<th class="text-center">Observaciones</th>
		</tr>
		</tr>
	</thead>
	<tbody>
	<?php for($i=0; $i<=2; $i++) { ?>
	<tr>
		<td><?php echo $i+1; echo $this->Form->hidden("Gastos.$i.id_cim", ['value' => $idCim]);
			echo $this->Form->hidden("Gastos.$i.periodo", ['value' => $periodo]); 
			echo $this->Form->hidden("Gastos.$i.ingresos_gastos_monetarizados", ['value' => 'Si']);
			echo $this->Form->hidden('totalIngresoPeriodoActual', ['value' => $totalIngresoPeriodoActual]); echo $this->Form->hidden('saldoPeriodoAnterior', ['value' => $saldoPeriodoAnterior]); ?></td>
		<td><?php echo $this->Form->input("Gastos.$i.fecha_gasto", ['label' => false, 'class'=>'fifty number', 'required','type' => 'date', 'required'] );?></td>
		<td><?php 
		$tAporte = [['text' => '...', 'value' => '...', 'selected'],['text' => 'Energía eléctrica', 'value' => '2100'],['text' => 'Agua', 'value' => '21300'],['text' => 'Telefonía', 'value' => '21400'],['text' => 'Fletes y almacenes', 'value' => '22300'],['text' => 'Mantenimiento y reparación de inmuebles', 'value' => '24110'],['text' => 'Servicios de imprenta', 'value' => '25600'],['text' => 'Alimentación hospitalaria aeronaves y O.E.', 'value' => '31140'],['text' => 'Combustible L.D. para consumo', 'value' => '34110'],['text' => 'Prod. Químicos farmaceúticos', 'value' => '34200'],['text' => 'Material de limpieza', 'value' => '39110'],['text' => 'Útiles y educ. Cultura y cap.', 'value' => '39600'],['text' => 'Maquinaria y equipo', 'value' => '4300'],['text' => 'Material de construcción', 'value' => '34500'],['text' => 'Calaminas clavos', 'value' => '34600'],['text' => 'Materiales eléctricos', 'value' => '39700']]; echo $this->Form->select("Gastos.$i.partida", $tAporte, ['class'=>' form-control', 'id'=>'id-centro-infantil']);
		?></td>
		<td><?php echo $this->Form->input("Gastos.$i.monto", ['label' => false, 'class'=>'fifty number', 'required','type' => 'text', ''] );
		?></td>
		<td><?php echo $this->Form->input("Gastos.$i.observaciones", ['label' => false, 'class'=>'', 'type' => 'textarea', 'cols'=>'25', 'rows'=>'2'] ); ?></td>
	</tr>
	</tr>
	</tbody>
	<?php } ?>
</table>
<div class="text-center">
	<?php echo $this->Form->button(__('Guardar datos'), ['class'=>'btn btn-save btn-lg']);
		echo $this->Form->end(); ?>
</div>
<?php }?>

<script type="text/javascript" >
$('table#gastosnm tbody tr td div input.number').keyup(function(e) {
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
</script>