<?php 
	$options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];	
	foreach ($cims as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
	}
?>

<h3 class="title2 text-center">Edición de registros</h3>
<?php echo $this->Form->create('', ['url'=>['controller' => 'CuadroSignosVitales', 'action'=>'edit'], 'id'=>'edit-nino'] ); ?>
    <div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
    	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
    		<label>Para continuar seleccione un Centro Infantil</label>
    		<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
    	</div>
        <!-- En este div se carga la lista que corresponde al centro infantil seleccionado en el input select de arriba-->
    	<div id="ninos"></div>
        <!-- Despues de seleccionar una opcion en este div, aqui debajo se carga otro div haciendo una llamada desde el controlador a:  ('/Element/csv/edit_escala'); -->
    </div>
<?php echo $this->Form->end(); ?>

<script type="text/javascript" >
jQuery(document).ready(function($) {
	$('select#id-cim').change(function(event) {
		var data = [$(this).val(), 'getNinos'];
		$.ajax({
            type: "POST",
            url: $('form#edit-nino').attr('action'),
            data: {data},
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#ninos').html(data);
            },
        });
        return false;

	});
});
</script>