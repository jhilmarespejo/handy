<?php
	$options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];	
	foreach ($data[0] as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
	}
?>

<h2 class="title2 text-center">Control mensual de aportes monetarios / no monetarios</h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4" id='periodo'>
		<?php echo $this->Form->input('periodo', ['minYear' => date('Y'),'maxYear' => date('Y'), 'day'=>false, 'label' => ['text' => 'Mensualidad'], 'class'=>'form-control', 'type' => 'date'] );
			?>
	</div>
	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<label>Nombre Centro Infantil</label>
		<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
	</div>
	<div id="table"></div>
</div>

<script type="text/javascript" >
jQuery(document).ready(function($) {
	$('#id-cim, div#periodo div select').change(function(event) {
		console.log($('div#periodo div select HTMLCollection[1]'));
		var year = $("div#periodo div select")[0].value;
		var month = $("div#periodo div select")[1].value;
		var data = [$('#id-cim').val(), year, month];
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
            	$('#table').html(data);
            },
        });
        return false;
	});
	/*$('#xxx').keyup(function(e) {
		var key = e.which ? e.which : event.keyCode;
        var value = $(this).val(); 
        if( (key >= 48 && key <= 57) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 110 || key == 188 || key == 190) ){
          e.preventDefault();
          $(this).val(value.replace(".",","));
        }else if(key >= 37 && key <= 40 || key == 8 || key == 46){
        	return false;
        }
        else{
        	$(this).val(value.replace(/[A-Za-z_~\-!@#\$%\^&\*\(\)]+$/gim,""));
        }
		console.log(key);
	});*/
});

</script>