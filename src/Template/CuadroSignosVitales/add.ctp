<?php 
//echo $this->Html->script('jquery.min.js');
//echo $this->Html->script('jquery.dataTables.js');
//echo $this->Html->script('jQuery.print.js');
//echo $this->Html->script('bootstrap.min.js');
//echo $this->Html->script('bootstrap-datepicker.min.js');
//echo $this->Html->script('custom.js');


/*setlocale(LC_ALL, 'Spanish');

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
$month = ucfirst(strftime('%B', mktime(0,0,0,($period+1),0,0))); */
?>

<h2 class="title2 text-center">Cuadro de signos vitales</h2>
<h3 class="title2 text-center">Mes: FEBRERO</h3>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php $options_name = [[ 'value' => '', 'text' => 'Seleccione un Centro Infantil', 'selected', 'disabled']];	
	foreach ($cims as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
	}?>

	<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<label>Nombre Centro Infantil</label>
		<?php echo $this->Form->select('id_cim', $options_name, ['class'=>'form-control', 'id'=>'id-cim', 'requided']);?>
	</div>
</div>

<div id="loading" class="text-center hidden">
	 Procesando...
	 <br/>
	 <?php echo $this->Html->image('loading.gif', ['class' => 'indicator'])?>
</div>
<h4 id="msg-box-danger" class='alert-danger text-center hidden'>Rellene los espacios vacíos</h4>
<div id="list"></div>
<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fadeInUp animated">
	<div id="content">
	    <ul id="tabs" class="nav nav-tabs">
			<li class="escala text-center active"> <a href="#escala" data-toggle="tab">Escala abreviada <br>de desarrollo</a></li>
			<li class="estado-nutricional text-center"><a href="#estado-nutricional" data-toggle="tab">Estado <br>nutricional</a></li>
			<li class="suplementos text-center"><a href="#suplementos" data-toggle="tab">Suplementos <br>alimenticios</a></li>
			<li class="asistencia text-center"><a href="#asistencia" data-toggle="tab">Asistencia<br>&nbsp;</a></li>
			<li class="asistencia-personal text-center"><a href="#asistencia-personal" data-toggle="tab">Asistencia de <br>las educadoras</a></li>
			<li class="proteccion text-center"><a href="#proteccion" data-toggle="tab">Protecci&oacute;n<br>IRAS/EDAS</a></li>
	    </ul>
	    <div id="my-tab-content" class="tab-content" >
	        <div class="tab-pane active" id="escala">
	            <?//php echo $this->element('csv/escala', ['datosnino' => $sent[0],'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="estado-nutricional">
				<?//php echo $this->element('csv/nutricion', ['datosnino' => $sent[0],'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="suplementos">
				<?//php echo $this->element('csv/suplementos', ['datosnino' => $sent[0],'month'=>$month] ); ?>
	        </div>
	        <div class="tab-pane" id="asistencia">
				<?//php echo $this->element('csv/asistencia', ['datosnino' => $sent[0],'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="asistencia-personal">
				<?//php echo $this->element('csv/asistencia_personal', ['personal' => $sent[1],'month'=>$month]); ?>
	        </div>
	        <div class="tab-pane" id="proteccion">
				<?//php echo $this->element('csv/proteccion',  ['datosnino' => $sent[0],'month'=>$month ] ); ?>
	        </div>
	    </div>
	</div>
</div> -->
<!-- <?//php pr($this->request->params['pass'][0]); ?> -->

<script type="text/javaScript">
jQuery(document).ready(function ($) {

	$('#id-cim').change(function(event) {
		var data = [$(this).val(), 'get_list'];
		$.ajax({
            type: "POST",
            url: "add",
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
