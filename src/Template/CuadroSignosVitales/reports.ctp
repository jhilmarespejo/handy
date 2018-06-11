<?php 
	$options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];	
	foreach ($data[0] as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
	}
?>

<h2 class="title2 text-center">Reportes - Cuadro de Signos Vitales</h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4" id='periodo'>
		<?php echo $this->Form->input('periodo', ['minYear' => date('Y')-2,'maxYear' => date('Y'), 'day'=>false, 'label' => ['text' => 'Periodo'], 'class'=>'form-control', 'type' => 'date'] );
			?>
	</div>
	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<label>Nombre Centro Infantil</label>
		<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
	</div>
	<div id="csv"></div>
</div>

<script type="text/javascript" >
jQuery(document).ready(function($) {
	$('select#id-cim').change(function(event) {
		var year = $("div#periodo div select")[0].value;
		var month = $("div#periodo div > :nth-child(3) option:selected").text();
		var data = [$(this).val(), year, month];
		$.ajax({
            type: "POST",
            url: "reports",
            data: {data},
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#csv').html(data);
            },
        });
        return false;

	});
});
</script>