<?php
//pr($escala);
?>
<?//php echo $this->Form->create( $escala, ['url'=>[ 'action'=>'addEscala'], 'id'=>"frm-escala"] );?>
<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInLeft">
	<table class="table table-bordered table-hover table-responsive" id="table-proteccion">
		<thead class="text-center">
		<tr>
			<th class="text-center" rowspan="2">#</th>
			<th class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" rowspan="2">Nombre completo</th>
			<th class="text-center" rowspan="2">Sexo</th>
			<th class="text-center" rowspan="2">Fecha Nacimiento</th>
			<th class="text-center" colspan="2">Edad</th>
			<th class="text-center" rowspan="2">Se detectó algún caso<br> de maltrato infantil</th>
			<th class="text-center" rowspan="2" ="2"> Caso de maltrato<br>infantil Nro.</th>
			<th class="text-center" colspan="2">Infecciones</th>
		</tr>
		<tr>
			<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Años</th>
			<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Meses</th>
			<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >IRAS</th>
			<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >EDAS</th>

		</tr>
		</thead>
		<tbody id="tb">
			<?php foreach ($datosnino as $key => $datonino) { ?>
			<tr>
				<td><div><?php echo 1 + $key; echo $this->Form->hidden("proteccion.$key.id_nino", ['value' => $datonino->id_nino]);?></div></td>
				<td><?php echo $datonino->paterno.' '.$datonino->materno.' '.$datonino->nombres; ?></td>
				<td class="text-center"><?php echo strtoupper($datonino->sexo[0]); ?></td>
				<td class="text-center"><?php echo (is_null($datonino->fecha_nacimiento))? '' : explode(' ', $datonino->fecha_nacimiento->format('Y-m-d') )[0]; ?></td>
				<td class="text-center" id="anios">
					<?php echo (is_null($datonino->fecha_nacimiento))? '' : $datonino->fecha_nacimiento->diff(new \DateTime)->y;
					if(is_null($datonino->fecha_nacimiento)){
						echo $this->Form->hidden("proteccion.$key.anios", ['value'=>''] );
					}else{
						echo $this->Form->hidden("proteccion.$key.anios", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->y] );
					} ?> 
				</td>
				<td class="text-center" id="meses">
					<?php echo (is_null($datonino->fecha_nacimiento))? '' : $datonino->fecha_nacimiento->diff(new \DateTime)->m;
					if(is_null($datonino->fecha_nacimiento)){
						echo $this->Form->hidden("proteccion.$key.anios", ['value'=>''] );
					}else{
						echo $this->Form->hidden("proteccion.$key.anios", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->m] );
					}?>
				</td>

				<td class="text-center">
					<?php $esq = [[ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No', 'selected']];	
				echo $this->Form->select("proteccion.$key.maltrato_infantil", $esq, ['class'=>'strech form-control']);?>
				</td>

				<td class="text-center">
					<? echo $this->Form->input("proteccion.$key.cantidad_casos_maltrato", ['label' => ['text' => false], 'class'=>'strech form-control', 'type' => 'number', 'min'=>'0'] );?>
				</td>

				<td class="text-center">
					<?php $esq = [[ 'text' => 'No', 'value' => 'No', 'selected'],[ 'text' => 'Si', 'value' => 'Si' ]];	
					echo $this->Form->select("proteccion.$key.iras", $esq, ['class'=>'strech form-control']);?>
				</td>

				<td class="text-center">
					<?php $esq = [['text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No', 'selected',]];	
					echo $this->Form->select("proteccion.$key.edas", $esq, ['class'=>'strech form-control']);?>
					<?php echo $this->Form->hidden("proteccion.$key.periodo", ['value'=>date('Y').'-'.$month]); ?>
				</td>
			</tr>
			<?php } ?>

		
		</tbody>
	</table>
	
</div>
 <?php echo $this->Form->button('Guardar datos', ['class'=>'btn btn-save btn-lg']); ?>