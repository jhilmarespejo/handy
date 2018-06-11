<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInRight">
<table class="table table-bordered " id="table-nutricion">
	<thead class="text-center">
	<tr>
		<th rowspan="2" class="">#</th>
		<th rowspan="2" class="text-center">Nombre completo</th>
		<th class="text-center">Sexo</th>
		<th class="text-center">Fecha Nacimiento</th>
		<!--<th  class="text-center" colspan="2">Edad</th>-->
		<th  class="text-center" colspan="6">Estado nutricional del mes anterior</th>
		<th  class="text-center" colspan="6">Estado nutricional del mes actual</th>
	</tr>
	<tr>
		
		<th></th>
			<th></th>
		<th class="text-center" id="anios" >A&ntilde;os</th>
		<th class="text-center" id="meses" >Meses</th>
		<th class="text-center" >Peso</th>
		<th class="text-center" >Talla</th>
		<th class="text-center" >Peso - Talla</th>
		<th class="text-center" >Talla - Edad</th>
		<!--<th class="text-center" >DAL</th>
		<th class="text-center" >DAM</th>
		<th class="text-center" >DAG</th>
		<th class="text-center" >NT</th>
		<th class="text-center" >NTTB</th>
		<th class="text-center" >TB</th>
		<th class="text-center" >TA</th>-->

		<th class="text-center" id="anios" >A&ntilde;os</th>
		<th class="text-center" id="meses" >Meses</th>
		<th class="text-center" >Peso (gramos)</th>
		<th class="text-center" >Talla(centímetros)</th>
		<th class="text-center" >Peso - Talla</th>
		<th class="text-center" >Talla - Edad</th>
		<!--<th class="text-center" >OB</th>
		<th class="text-center" >SOB</th>
		<th class="text-center" >DAL</th>
		<th class="text-center" >DAM</th>
		<th class="text-center" >DAG</th>
		<th class="text-center" >NT</th>
		<th class="text-center" >NTTB</th>
		<th class="text-center" >TB</th>
		<th class="text-center" >TA</th>-->
	</tr>
	</thead>
	<tbody id="tb-nutricion">
		<?php foreach ($datosnino as $key => $datonino) { ?>
		<tr>
			<td><div><?php echo 1 + $key; echo $this->Form->hidden("nutricion.$key.id_nino", ['value' => $datonino->id_nino]);?></div></td>
			<td><?php echo $datonino->paterno.' '.$datonino->materno.' '.$datonino->nombres; ?></td>
			<td class="text-center"><?php echo strtoupper($datonino->sexo[0]); ?></td>
			<td class="text-center"><?php echo (is_null($datonino->fecha_nacimiento))? '':explode(' ', $datonino->fecha_nacimiento->format('Y-m-d') )[0]; ?></td>
			<td class="text-center" id="anios"><?//php echo $datonino->fecha_nacimiento->diff(new \DateTime)->y; ?></td>
			<td class="text-center" id="meses"><?//php echo $datonino->fecha_nacimiento->diff(new \DateTime)->m; ?></td>

			<td class="text-center"><?//php echo $this->Form->checkbox('done', ['value' => 555]); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('done', ['value' => 555]); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('ob', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'OB']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('sob', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'sob']); ?></td>
			<!--<td class="text-center"><?//php echo $this->Form->checkbox('dal', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'dal']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('dam', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'dam']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('dag', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'dag']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('nt', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'nt']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('nttb', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'nttb']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('tb', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'tb']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox('ta', ['value' => 'Si','hiddenField' => 'NO'],['class'=>'ta']); ?></td>-->

		<td class="text-center" id="anios">
			<?php echo (is_null($datonino->fecha_nacimiento))? '': $datonino->fecha_nacimiento->diff(new \DateTime)->y;
			if (is_null($datonino->fecha_nacimiento)){
				echo $this->Form->hidden("nutricion.$key.anios", ['value'=>''] );
			} else {
			echo $this->Form->hidden("nutricion.$key.anios", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->y] ); 
			} ?> 
		</td>
		<td class="text-center" id="meses">
			<?php echo (is_null($datonino->fecha_nacimiento))? '':$datonino->fecha_nacimiento->diff(new \DateTime)->m;
			if (is_null($datonino->fecha_nacimiento)){
				echo $this->Form->hidden("nutricion.$key.meses", ['value'=>''] );
			} else {
				echo $this->Form->hidden("nutricion.$key.meses", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->m] );
			}	?>
		</td>
			<td class="text-center"><?php echo $this->Form->input("nutricion.$key.peso", ['label'=>false, 'type'=>'number','min'=>'0','class' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12']); ?></td>
			<td class="text-center"><?php echo $this->Form->input("nutricion.$key.talla", ['label'=>false, 'type'=>'number','min'=>'0','class' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12']); ?></td>

			<td class="text-center"><?php 
			//echo $this->Form->checkbox("nutricion.$key.peso-tall", ['value' => 'Si','hiddenField' => ""],['class'=>'ob']); ?>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'OB', 'value' => 'OB' ],[ 'text' => 'SOB', 'value' => 'SOB'],[ 'text' => 'NT', 'value' => 'NT'],[ 'text' => 'DAL', 'value' => 'DAL'],[ 'text' => 'DAM', 'value' => 'DAM'],[ 'text' => 'DAG', 'value' => 'DAG']];	?>
			<?php echo $this->Form->select("nutricion.$key.peso_talla", $options, ['class'=>'form-control']);?>
			</td>
			<td class="text-center"><?php 
				$options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'NTTB', 'value' => 'NTTB'],[ 'text' => 'TB', 'value' => 'TB'],[ 'text' => 'TA', 'value' => 'TA']];	echo $this->Form->select("nutricion.$key.talla_edad", $options, ['class'=>'form-control']);
			//echo $this->Form->checkbox("nutricion.$key.talla-edad", ['value' => 'Si','hiddenField' => ""],['class'=>'sob']); ?></td>
			<!--<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.dal", ['value' => 'Si','hiddenField' => ""],['class'=>'dal']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.dam", ['value' => 'Si','hiddenField' => ""],['class'=>'dam']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.dag", ['value' => 'Si','hiddenField' => ""],['class'=>'dag']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.nt", ['value' => 'Si','hiddenField' => ""],['class'=>'tb']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.nttb", ['value' => 'Si','hiddenField' => ""],['class'=>'nttb']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.tb", ['value' => 'Si','hiddenField' => ""],['class'=>'tb']); ?></td>
			<td class="text-center"><?//php echo $this->Form->checkbox("nutricion.$key.ta", ['value' => 'Si','hiddenField' => ""],['class'=>'ta']); ?>
			</td>-->
				<?php echo $this->Form->hidden("nutricion.$key.periodo", ['value'=>date('Y').'-'.$month] );?>
		</tr>
		<?php } ?>
	</tbody>
</table>
	
<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-nutricion'] ); ?>
</div>