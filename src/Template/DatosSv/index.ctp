<h2 class="title2 text-center">Búsqueda de datos</h2>


<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<table class="table table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->Form->input('nombre1', ['label' => '1er Nombre','type' => 'text', 'class' => 'form-control'] );?></th>
				<th><?php echo $this->Form->input('nombre2', ['label' => '2do Nombre','type' => 'text', 'class' => 'form-control'] );?></th>
				<th><?php echo $this->Form->input('paterno', ['label' => 'A. Paterno','type' => 'text', 'class' => 'form-control'] );?></th>
				<th><?php echo $this->Form->input('materno', ['label' => 'A. materno','type' => 'text', 'class' => 'form-control'] );?></th>
				<th><?php echo $this->Html->tag('label','limpiar', ['class' => 'btn btn-warning btn-sm', 'id' => 'clear-inputs'] ); ?></th>
				<th><?php echo $this->Html->tag('label','Buscar', ['class' => 'btn btn-save btn-lg', 'id' => 'search-datossv'] ); ?></th>
			</tr>
		</tbody>
	</table>
<div id="list" >
	
</div>



</div>

<script type="text/javaScript">
jQuery(document).ready(function ($) {

	$('#search-datossv').click(function(event) {
		var data = [$('#nombre1').val(), $('#nombre2').val(), $('#paterno').val(), $('#materno').val(), $('#cim').val()];
		console.log(data);
		$.ajax({
            type: "POST",
            url: "DatosSv/search",
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
	$('#clear-inputs').click(function(){
		$('#nombre1').val('');
		$('#nombre2').val('');
		$('#paterno').val('');
		$('#materno').val('');
	});
	/*$('#nombre1, #paterno, #materno').keyup(function(event) {
		if($('#nombre1').val().length > 2 || $('#paterno').val().length > 2 ){
			var data = [$('#nombre1').val(), $('#nombre2').val(), $('#paterno').val(), $('#materno').val(), $('#cim').val()];
			$.ajax({
	            type: "POST",
	            url: "DatosSv/search",
	            data: {data},
	            beforeSend: function( data )
	            {
	                //$('#loading').removeClass('hidden')                    
	            },
	            success:  function( data )
	            {
	                //$('#msg-success').removeClass('hidden')
	            	//$('#loading').addClass('hidden')
	            	$('#list').html(data);
	            },
	        });
		}
        return false;
	});*/
});
</script>