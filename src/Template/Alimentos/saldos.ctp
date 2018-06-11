
<h2 class="title2 text-center">Saldos mensuales alimentos secos</h2>

<?php
	$options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];
		foreach ($data[0] as $key => $cim) /**/{
			$options_name[$key+1]['text'] = $cim->nombre;
			$options_name[$key+1]['value'] = $cim->id_cim;
}
?>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<label>Nombre Centro Infantil</label>
		<?php echo $this->Form->select('Actaalimentos.id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim-search', 'requided']);?>
	</div>
	<div id="alimentos"></div>
</div>
<br>
<script type="text/javascript">

$(document).ready(function($) {

	$('#actaalimentos-fecha-ingreso').datepicker({
    	format: 'yyyy-mm-dd',
		autoclose: true,
		startView: 1,
		language: 'es-Es',
		orientation: 'bottom'
	});


	$('#id-cim-search').change(function(event) {
		//var year = $("div#periodo div select")[0].value;
		//var month = $("div#periodo div select")[1].value;
		//var action = 'gastos';
		
		var data = [$(this).val(), 'get1'];
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
            	$('#alimentos').html(data);
            },
        });
	    
        return false;
	});
});
</script>
