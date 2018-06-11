
<?php 
	$options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];	
	foreach ($cims as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
	}
?>
<h2 class="title2 text-center"> Búsqueda </h2>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="accordion " id="reports" >
        <div class="panel panel-default" id='area-1'>
            <div class="panel-heading" data-toggle="collapse" data-target="#tab-1" data-parent="#reports">Buscar por Centro infantil
            </div>
            <div id="tab-1" class="collapse panel-body  display">
                <?php echo $this->Form->create('', ['url'=>['controller' => 'FrmNino', 'action'=>'edit'], 'id'=>'edit-nino'] ); ?>
                    <div class="form-group col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <h3>Selecciona un Centro Infantil</h3>
                        <?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
                    </div>
                <?php echo $this->Form->end(); ?>   
            </div> 

            <div class="panel-heading" data-toggle="collapse" data-target="#tab-2" data-parent="#reports">Buscar por Nombres
            </div>
            <div id="tab-2" class="collapse panel-body  display">
                <?php echo $this->Form->create('', ['url' => ['action' => 'find', 'controller' => 'FrmNino'], 'id'=>'find-nino' ] ) ?>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <h3>Busqueda por nombres y apellidos</h3>

                    <div class="form-group">
                            <?php echo $this->Form->input('paterno', ['label' => 'Apellido Paterno', 'class'=>'form-control', 'type' => 'text'] );?>
                    </div>  
                    <div class="form-group">
                            <?php echo $this->Form->input('materno', ['label' => 'Apellido Materno', 'class'=>'form-control', 'type' => 'text'] );?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('nombres', ['label' => 'Nombre o Nombres ', 'class'=>'form-control', 'type' => 'text'] );?>
                    </div>
                    
                   
                    <div class="pull-left">
                        <?php echo  $this->Form->button('buscar datos', ['class' => 'btn btn-save btn-lg']);?>
                    </div>

                </div>  
                <?php echo $this->Form->end(); ?>   
            </div>  

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="ninos"></div>
    </div>
</div>


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


    $('#find-nino').submit(function(){
    //$('#gestion').click(function(){
        //alert($(this).val());
        var datos = $(this).serialize()
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: datos,
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
    });// $('#gestion')



});
</script>