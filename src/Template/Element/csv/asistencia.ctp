<?php 
$dates = getDates(date('Y')); 

$today = date('Y-m-d');
$period = strtotime ('-1 month' , strtotime ( $today )) ;
$period = date ('m', $period);

//echo $period; //exit;

	setlocale(LC_ALL, 'Spanish');

/*function getDates($year)
{
    $dates = array();
    for($i = 1; $i <= 366; $i++){
    	//strftime("%A, %d de %B de %Y", $miFecha)
        $month = date('m', mktime(0,0,0,1,$i,$year));
        //$month = strftime('%b', mktime(0,0,0,1,$i,$year));
        //$wk = date('W', mktime(0,0,0,1,$i,$year));
        //$wkDay = date('D', mktime(0,0,0,1,$i,$year));
        $wkDay =  strftime("%a",mktime(0,0,0,1,$i,$year));
        $day = date('d', mktime(0,0,0,1,$i,$year));
        //$dates[$month][$wk][$day] = $wkDay;
        $dates[$month][$day] = $wkDay;
    } 
    return $dates;   
}*/
?>
<?//php pr($dates); ?>
<div class="group1 col-xs-12 col-sm-12 col-md-12col-lg-12 animated fadeInUp">
	<table class="table table-bordered table-hover table-responsive" id="table-asistencia">
		<thead class="text-center">
		<tr>
			<th class="text-center" rowspan="3">#</th>
			<th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" rowspan="3">Nombre completo</th>
			<th class="text-center" colspan="20">Periodo <?php echo ucfirst(strftime('%B', mktime(0,0,0,($period+1),0,0))) ; 
			?></th>
		</tr>

		<tr>
			<?php $days = 0;
				foreach ($dates[$period] as $key => $value) { 
					if($value != 'sáb' && $value != 'dom') { ?>
					<th class="text-center"><?php echo ucfirst($value);?></th>
			<?php } }?>
		</tr>
		<tr>
			<?php 
				foreach ($dates[$period] as $key => $value) { 
					if($value != 'sáb' && $value != 'dom') { ?>
					<th class="text-center"><?php echo $key;  ?></th>
			<?php } }?>
		</tr>
		</thead>
		<tbody id="tb">
			
			<?php foreach ($datosnino as $k => $datonino) { ?>
			<tr>
				<td><div><?php echo 1 + $k; echo $this->Form->hidden("asistencia.$k.id_nino", ['value' => $datonino->id_nino]);?></div></td>
				<td><?php echo ucfirst($datonino->paterno).' '.ucfirst($datonino->materno).' '.ucfirst($datonino->nombres); ?></td>
				<?php echo $this->Form->hidden("asistencia.$k.periodo", ['value'=>date('Y').'-'.$month]); ?>
				<?php 
					foreach ($dates[$period] as $key => $value) { 
						if($value != 'sáb' && $value != 'dom') { ?>
						<td class="text-center asistencia">
						<?php echo $this->Form->input("asistencia.$k.calendario.$key", ['class' => 'btn-success', 'label' => false, 'type'=>'text','disabled','value'=>'Pre'] ); ?>
						</td>
					<?php } }?>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<span >Pre = Presente | Fal = Falta | Per = Permiso | Fer = Feriado</span><br/><br/>
	<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-asistencia'] ); ?>
</div>
<!--unidad de capacitacion y talento humano pasarela cruce de viacha -->