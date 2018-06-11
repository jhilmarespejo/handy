
<h3 class="title2 text-center"> Registro de Memorándums </h3>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo $this->Form->create($memo); ?>
	<?php echo $this->Form->hidden('id', ['value'=>null] );?>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('cite', ['label' => ['text' => 'Cite (Sólo número)'], 'class'=>'form-control', 'type' => 'number', 'min' => '0'] );?>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $this->Form->input('ci', ['label' => ['text' => 'Cedula de Identidad (Sólo número)'], 'class'=>'form-control', 'type' => 'text', 'required'] );?>
		</div>

		<div class="text-center">
			<?php echo  $this->html->tag('span', 'Buscar', ['class' => 'btn btn-save sm', 'id' => 'search_staff']);?>
		</div>
		<br/>
		
	<div id="items">
		<div class="alert-danger hidden" > ¡Debe llenar ambos campos! </div>					
	</div>
	<?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript" charset="utf-8" async defer>
    $('#search_staff').click(function(event){
    	//var cite = $("#cite").value;
    	//var ci = $("#ci").value
    	//alert( $("#cite").val() );


    	if( $("#cite").val() != '' && $("#ci").val() != '' ){
    		$("#items div").addClass('hidden');
			var data = [ $("#cite").val(), $("#ci").val() ];
			$.ajax({
	            type: "POST",
	            url: "search",
	            data: {data},
	            beforeSend: function( data )
	            {
	                $('#loading').removeClass('hidden')                    
	            },
	            success:  function( data )
	            {
	                $('#msg-success').removeClass('hidden')
	            	$('#loading').addClass('hidden')
	            	$('#items').html(data);
	            },
	        });
	        return false;
	    } else {
	    	$("#items div").removeClass('hidden');
	    }
    });
</script>