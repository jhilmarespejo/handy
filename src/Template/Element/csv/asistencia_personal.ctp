<?php 
setlocale(LC_ALL, 'Spanish');
$dates = getDates(date('Y')); 

$today = date('Y-m-d');
$period = strtotime ('-1 month' , strtotime ( $today )) ;
$period = date ('m', $period);
?>
<div class="group1 col-xs-12 col-sm-12 col-md-12col-lg-12 animated fadeInDown">
	<table class="table table-bordered table-hover table-responsive" id="table-asistencia">
		<thead class="text-center">
		
		<tr>
			<th class="text-center" rowspan="3">#</th>
			<th class="text-center" rowspan="3">Cargo</th>
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
			<?php foreach ($personal as $k => $person) { ?>
			<tr>
				<td><?php echo 1 + $k; echo $this->Form->hidden("asistencia_personal.$k.personal_id", ['value' => $person->id]);?></td>
				<?php echo $this->Form->hidden("asistencia_personal.$k.periodo", ['value'=>date('Y').'-'.$month]); ?>
				<td><?php echo ucfirst($person->cargo); ?></td>
				<td><?php echo ucfirst($person->paterno).' '.ucfirst($person->materno).' '.ucfirst($person->nombres); ?></td>
					<?php 
					foreach ($dates[$period] as $key => $value) { 
						if($value != 'sáb' && $value != 'dom') { ?>
						<td class="text-center asistencia">
						<?php echo $this->Form->input("asistencia_personal.$k.calendario.$key", ['class' => 'btn-success', 'label' => false, 'type'=>'text','disabled','value'=>'Pre'] ); ?>
						</td>
					<?php } }?>
			</tr>

			<?php } ?>

		
		</tbody>
	</table>
	<span >Pre = Presente | Fal = Falta | Per = Permiso | Fer = Feriado</span><br/><br/>

	<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-asistencia-personal'] ); ?>
</div>
