<?php //echo $this->Html->script('jquery.min.js') ?>
<!--APORTES/GASTOS NO MONETARIOS-->

<h2 class="title2 text-center">Control mensual de ingresos y gastos de aportes<br> no monetarios de padres de familia (Monetarizados)</h2>

<?php
	$options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];	
		foreach ($data[0] as $key => $cim) {
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
}
?>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4" id='periodo'>
		<?php echo $this->Form->input('periodo', ['minYear' => date('Y'),'maxYear' => date('Y'), 'day'=>false, 'label' => ['text' => 'Período'], 'class'=>'form-control', 'type' => 'date'] ); 
		//echo $this->Form->hidden('action', ['value' => 'gastos']);
			?>
	</div>
	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<label>Nombre Centro Infantil</label>
		<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
	</div>
	<div id="list"></div>
	
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('#id-cim').change(function(event) {
		var year = $("div#periodo div select")[0].value;
		var month = $("div#periodo div select")[1].value;
		//var action = 'gastos';
		var data = [$(this).val(), year, month, 'gastosnm' ];
		$.ajax({
            type: "POST",
            url: "get",
            data: {data},
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#list').html(data);
            },
        });
        return false;
	});
});
</script>