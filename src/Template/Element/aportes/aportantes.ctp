<?php echo $this->Form->create('', ['url' => ['action' => 'add']]); ?>
<table class="table table-bordered" id='nomina'>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre del Niño</th>
			<th>Deuda aterior</th>
			<th>Aporte fijado</th>
			<th>Total a cobrar</th>
			<th>Tipo de Aporte</th>
			<th>Fecha del aporte</th>
			<th>Total recuadado</th>
			<th>Saldo</th>
			<th>Aporte</th>
			<th>Observaciones</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		echo '<br/><br/><br/>';
		//pr($ninos);
		//exit;
	$noBecados=0;$becados=0; foreach ($ninos as $key => $nino) 
	{	
		/*pr($nino['id_cim']);
		echo '<br/>';
		echo $key;
		exit;*/

		if(!$nino['becado']){ $noBecados++; ?>
	<tr>
		<td><?php echo $key+1; echo $this->Form->hidden("Aportes.$key.id_cim", ['value' => $idCim]);echo $this->Form->hidden("Aportes.$key.id_nino", ['value' => $nino['id_nino']]); echo $this->Form->hidden("Aportes.$key.periodo", ['value' => $mes]); ?></td>
		
		<td><?php echo ucfirst($nino['ncompleto']); ?></td>
		<?php $saldo = ( is_null($nino['saldo']) )? '0' : $nino['saldo'] ; ?>
 
		<td class="deuda-anterior"><?php echo $this->Form->input("Aportes.$key.deuda_anterior", ['label' => false, 'class'=>'fifty number', 'required','type' => 'text', '', 'value' =>  $saldo] );?></td>

		<td class="aporte-fijado"><?php echo $this->Form->input("Aportes.$key.aporte_fijado", ['label' => false, 'class'=>'fifty number', 'required', 'readonly', 'type' => 'text', 'value' => $aporteFijado ] );?></td>
		
		<td class="cobro-total"><span><?php echo  $cobroTotal = $nino['saldo'] + $aporteFijado ;?></span><?php echo $this->Form->hidden("Aportes.$key.total_cobrar",['value' => $cobroTotal]);?></td>


		<td><?php $tAporte = [[ 'text' => 'Monetario', 'value' => 'Monetario', 'selected'],[ 'text' => 'No monetario', 'value' => 'No monetario' ]]; echo $this->Form->select("Aportes.$key.tipo_aporte", $tAporte, ['class'=>'strech form-control', 'required']);?></td>
		<td><?php echo $this->Form->input("Aportes.$key.fecha_aporte", ['label' => false, 'class'=>'seventy aportes', 'required', 'type' => 'text'] ); ?></td>
		<td class="total-recaudado"><?php echo $this->Form->input("Aportes.$key.total_recaudado", ['label' => false, 'class'=>'total-recaudado fifty number', 'required','type' => 'text'] );?></td>
		
		<td class="saldo"><span></span><?php echo $this->Form->hidden("Aportes.$key.saldo" );?></td>


		<td><?php $aporte = [[ 'text' => '', 'value' => '','selected','disabled' ],['text' => 'Completo', 'value' => 'Completo'],['text' => 'Parcial', 'value' => 'Parcial'],['text' => 'Sin Aporte', 'value' => 'Sin Aporte'],[ 'text' => 'Becado', 'value' => 'Becado' ]]; echo $this->Form->select("Aportes.$key.aporte", $aporte, ['class'=>'strech form-control tipo-aporte', 'required']);
		?></td>
		<td><?php echo $this->Form->input("Aportes.$key.observaciones", ['label' => false, 'class'=>'', 'type' => 'textarea', 'cols'=>'25', 'rows'=>'2'] ); ?></td>
	</tr>
	<?php } else {
			$becados++;
		  }  
	} //echo 'becados: '.$becados.' No becados: '.$noBecados;
		echo $this->Form->hidden('Control.id_cim', ['value' => $idCim]);
		echo $this->Form->hidden('Control.total_ninos', ['value' => $noBecados+$becados]);
		echo $this->Form->hidden('Control.ninos_becados', ['value' => $becados]);
		echo $this->Form->hidden('Control.periodo', ['value' => $mes]);
	?>

	</tbody>
</table><br>
<!-- <table class="table table-bordered" id='nomina'>
	<caption>Otros aportes de: Familias - Comunidades - ONGs - Entidades públicas y/o privadas</caption>
	<thead>
		<tr>
			<th class="">Nombre razon social</th>
			<th class="">Tipo de Aporte</th>
			<th class="">Fecha del aporte</th>
			<th class="">Total aporte(Bs.)</th>
			<th class="">Observaciones</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $this->Form->hidden("otrosaportes.0.id_cim", ['value' => $idCim]); echo $this->Form->input("otrosaportes.0.razon_social", ['label' => false, 'class'=>'', 'type' => 'text', 'cols'=>'25','rows'=>'1'] );			
				
			?></td>
			<td><?php $tAporte = [[ 'text' => 'Monetario', 'value' => 'Monetario', 'selected'],[ 'text' => 'No monetario', 'value' => 'No monetario' ]]; echo $this->Form->select("otrosaportes.0.tipo_aporte", $tAporte, ['class'=>'strech form-control', 'id'=>'id-centro-infantil']);?></td>
			<td><?php echo $this->Form->input("otrosaportes.0.fecha_aporte", ['label' => false, 'class'=>'fifty', 'type' => 'date'] );?></td>
			<td><?php echo $this->Form->input("otrosaportes.0.total_recaudado", ['label' => false, 'class'=>'fifty number', 'type' => 'text'] );?></td>
			<td><?php echo $this->Form->input("otrosaportes.0.observaciones", ['label' => false, 'class'=>'number', 'type' => 'textarea', 'cols'=>'25', 'rows'=>'2'] ); echo $this->Form->hidden("otrosaportes.0.periodo", ['value' => $periodo]);?></td>

		</tr>
	</tbody>
</table> -->	
<div class="text-center">
	<?php echo $this->Form->button(__('Guardar datos'), ['class'=>'btn btn-save btn-lg']);
		echo $this->Form->end(); ?>
</div>

<?php //echo $this->Html->script('jquery.min.js') ?>
<script type="text/javascript" >
jQuery(document).ready(function($) {

	$('.aportes').datepicker({
    	format: 'yyyy-mm-dd',
		autoclose: true,
		endDate: 'now',
		orientation: 'bottom'
	});
	
	

	$('table#nomina tbody tr td div input.number').keyup(function(e) {
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
      
	$('table#nomina tbody tr td.aporte-fijado, table#nomina tbody tr td.deuda-anterior').on('keyup focusin', function(event) {
    	var deudaAnterior = $(this).parents('tr').find('td.deuda-anterior input').val();
    	var aporteFijado = $(this).parents('tr').find('td.aporte-fijado input').val();
    	
    	var cobroTotal = parseFloat(deudaAnterior)+parseFloat(aporteFijado);

    	if(!isNaN(cobroTotal)){
	    	$(this).parents('tr').find('td.cobro-total span').text(cobroTotal);
	    	$(this).parents('tr').find('td.cobro-total input').val(cobroTotal);
	    }else{
	    	$(this).parents('tr').find('td.cobro-total span').text('');
	    	$(this).parents('tr').find('td.cobro-total input').val('');
	    }
    });
	
//calculo del saldo
    $('table#nomina tbody tr td.total-recaudado').on('keyup focusin focusout ', function(event) {
    	var cobroTotal = $(this).parent('tr').find('td.cobro-total input').val();
    	var totRecaudado = $(this).parent('tr').find('td.total-recaudado input').val();
    	var saldo = parseFloat(cobroTotal) - parseFloat(totRecaudado);
    	
    	if( !isNaN(saldo) ){
    		$(this).parents('tr').find('td.saldo span').text(saldo);
    		$(this).parents('tr').find('td.saldo input').val(saldo);
    	}else{
    		$(this).parents('tr').find('td.saldo span').text('');
    		$(this).parents('tr').find('td.saldo input').val('');
    	}

    	if( saldo == 0 ){
    		$(this).siblings('td').find('select.tipo-aporte').val('Completo');
    	}
    	if( saldo > 0 ){
    		$(this).siblings('td').find('select.tipo-aporte').val('Parcial');
    	}
    	if( saldo ==  cobroTotal || totRecaudado == 0 || !totRecaudado){
    		$(this).siblings('td').find('select.tipo-aporte').val('Sin Aporte');
    	}
    });
});
</script>
