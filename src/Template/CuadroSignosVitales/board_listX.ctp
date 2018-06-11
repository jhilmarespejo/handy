<!-- Vista donde se cargan los TABS de Escala abreviada, Estado nutricional, Suplementos alimenticios, Asistencia, Asistencia de las educadoras y Protección  PARA INSERTAR NUEVOS DATOS A AL CUADRO DE SIGNOS VITALES -->

<?php 
echo $this->Html->script('custom.js'); 

setlocale(LC_ALL, 'Spanish');

function getDates($year)
{
    $dates = array();
    for($i = 1; $i <= 366; $i++){
        $month = date('m', mktime(0,0,0,1,$i,$year));
        $wkDay =  strftime("%a",mktime(0,0,0,1,$i,$year));
        $day = date('d', mktime(0,0,0,1,$i,$year));
        $dates[$month][$day] = $wkDay;
    } 
    return $dates;   
}

$dates = getDates(date('Y')); 
$today = date('Y-m-d');
$period = strtotime ('-1 month' , strtotime ( $today )) ;
$period = date ('m', $period);
$month = ucfirst(strftime('%B', mktime(0,0,0,($period+1),0,0))); 

?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	<div id="content">
	    <ul id="tabs" class="nav nav-tabs">
			<li class="escala text-center active"> <a href="#escala" data-toggle="tab">Escala abreviada <br>de desarrollo</a></li>

			<li class="estado-nutricional text-center"><a href="#estado-nutricional" data-toggle="tab">Estado <br>nutricional</a></li>

			<li class="suplementos text-center"><a href="#suplementos" data-toggle="tab">Suplementos <br>alimenticios</a></li>

			<li class="asistencia text-center"><a href="#asistencia" data-toggle="tab">Asistencia<br>&nbsp;</a></li>

			<li class="asistencia-personal text-center"><a href="#asistencia-personal" data-toggle="tab">Asistencia de <br>las educadoras</a></li>
			
			<li class="proteccion text-center"><a href="#proteccion" data-toggle="tab">Protecci&oacute;n<br>IRAS/EDAS</a></li>
	    </ul>

		<?php echo $this->Form->create('$escala', ['url'=>[ 'action'=>'add'], 'id'=>"frm-escala"] );?>
	    <div id="my-tab-content" class="tab-content" >

	        <div class="tab-pane active" id="escala">
	            <?php echo $this->element('csv/escala', ['datosnino' => $datosnino,'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="estado-nutricional">
				<?php echo $this->element('csv/nutricion', ['datosnino' => $datosnino,'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="suplementos">
				<?php echo $this->element('csv/suplementos', ['datosnino' => $datosnino,'month'=>$month] ); ?>
	        </div>
	        <div class="tab-pane" id="asistencia">
				<?php echo $this->element('csv/asistencia', ['datosnino' => $datosnino,'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="asistencia-personal">
				<?php echo $this->element('csv/asistencia_personal', ['personal' => $personal,'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="proteccion">
				<?php echo $this->element('csv/proteccion',  ['datosnino' => $datosnino,'month'=>$month ] ); ?>
	        </div>
	    </div>
       
		<?php echo $this->Form->end(); ?>
	</div>
</div>

<script type="text/javaScript">
jQuery(document).ready(function ($) {

//$("#table-escala tbody tr td div * ").val('3');
//$("#table-nutricion tbody tr td div * ").val('4');
//$("#table-suplementos tbody tr td div * ").val('5');
//$("#table-asistencia tbody tr td div * ").val('5');
	/*$('#id-cim').change(function(event) {
		var data = [$(this).val(), 'get_list'];
		$.ajax({
            type: "POST",
            url: "add",
            data: {data},
            Send: function( data )
            {
                $('#loading').removeClass('hidden')
                //$('#list').hide('slow');
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#list').html(data);
            },
        });
        return false;
	});*/


	$('#estado-nutricional *').attr('disabled', 'disabled');
	$('#suplementos *').attr('disabled', 'disabled');
	$('#asistencia *').attr('disabled', 'disabled');
	$('#asistencia-personal *').attr('disabled', 'disabled');
	$('#proteccion *').attr('disabled', 'disabled');

	$('#submit-escala').click(function(event) {
		if(validation('#table-escala tbody tr td div input', 'escala')){
			var data = {Escala: []};  
			$("#table-escala tbody tr").each(function (index) {
	            var tag = $(this).find('td div input');
				data.Escala.push( {id_nino: tag[0].value, mot_gruesa: tag[1].value, mot_fina:tag[2].value, aud_leng:tag[3].value, per_soc: tag[4].value, total_actual: tag[5].value }  );
	        });
			$('#msg-box-danger').addClass('hidden');
			$('.escala').removeClass('active');
			$('#escala').removeClass('active');
			$('.estado-nutricional').addClass('active');
			$('#estado-nutricional').addClass('active');
			$('#estado-nutricional *').removeAttr('disabled');
		}else{
			$('#msg-box-danger').addClass('hidden');
			$('#msg-box-danger').removeClass('hidden');
		}
	});
	$('#submit-nutricion').click(function(event) {
		if(validation('#table-nutricion tbody tr td div input', 'nutricion')){
			$('#msg-box-danger').addClass('hidden');
			$('.estado-nutricional').removeClass('active');
			$('#estado-nutricional').removeClass('active');
			$('.suplementos').addClass('active');
			$('#suplementos').addClass('active');
			$('#suplementos *').removeAttr('disabled');
		}else{
			$('#msg-box-danger').addClass('hidden');
			$('#msg-box-danger').removeClass('hidden');
		}
	});

	validation = function (table, form){
		var success;
		if(form == 'escala'){
			$(table).each(function() {
				var y = $(this).val();
				if($(this).val() == ''){
					success = false;
					$(this).css('box-shadow', '0px 0px 5px 2px red');
					return false;
				}else{
					$(this).css('box-shadow', 'none');
					success = true;
				}
			});
			return success;
		}
		if(form == 'nutricion'){
			$(table).each(function() {
				var x = $(this);
				var y = $(this).val();
				if($(this).val() == ''){
					success = false;
					$(this).css('box-shadow', '0px 0px 5px 2px red');
					return false;
				}else{
					$(this).css('box-shadow', 'none');
					success = true;
				}
			});
			return success;
		}
	}

	$('#table-nutricion tbody tr td input:checkbox').click(function(event) {
		var x = $(this);
		var y = $(this).parents('td').siblings('td');
		$(this).parents('tr').each(function(index, el) {
			$(this).find('input:checkbox').prop('checked', false);
		});
		$(this).prop('checked', true);//css('box-shadow', '0px 0px 5px 2px red');
		
	});
		$('#submit-suplementos').click(function(event) {
			$('.suplementos').removeClass('active');
			$('#suplementos').removeClass('active');

			$('.asistencia').addClass('active');
			$('#asistencia').addClass('active');
			$('#asistencia *').removeAttr('disabled');
	});
		$('#submit-asistencia').click(function(event) {
			$('.asistencia').removeClass('active');
			$('#asistencia').removeClass('active');

			$('.asistencia-personal').addClass('active');
			$('#asistencia-personal').addClass('active');
			$('#asistencia-personal *').removeAttr('disabled');
		});
		$('#submit-asistencia-personal').click(function(event) {
			$('.asistencia-personal').removeClass('active');
			$('#asistencia-personal').removeClass('active');
			$('.proteccion').addClass('active');
			$('#proteccion').addClass('active');
			$('#proteccion *').removeAttr('disabled');
		});


	$('td.asistencia input').click(function(event) {
		var c = $(this).attr('class');
		if (c == 'btn-success') {
			$(this).removeClass('btn-success');
			$(this).addClass('btn-warning');
			$(this).val('Fal')
		};
		if (c == 'btn-warning') {
			$(this).removeClass('btn-warning');
			$(this).addClass('btn-primary');
			$(this).val('Per');
		};
		if (c == 'btn-primary') {
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-info');
			$(this).val('Fer');
		};
		if (c == 'btn-info') {
			$(this).removeClass('btn-info');
			$(this).addClass('btn-success');
			$(this).val('Pre');
		};
	});


});
</script>
