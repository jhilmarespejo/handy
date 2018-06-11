
<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!--<div class="group11 col-xs-12 col-sm-6 col-md-6 col-lg-12 animated fadeInUp">-->
<?//php
//pr($datosnino);
//exit;
?>

<table class="table table-bordered table-hover table-responsive" id="table-escala">
	<thead class="text-center">
	<tr>
		<th>#</th>
		<th class="text-center">Nombre completo</th>
		<th class="text-center">Sexo</th>
		<th class="text-center">Fecha Nacimiento</th>
		<th class="text-center" colspan="2">Edad</th>
		<th class="text-center" colspan="10">Escala abreviada de desarrollo. Puntaje/color</th>
	</tr>
	<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th class="text-center " id="anios" >A&ntilde;os</th>
		<th class="text-center " id="meses" >Meses</th>
		<th class="text-center " >Motricidad gruesa</th>
		<th class="text-center " >Motricidad fina</th>
		<th class="text-center " >Audici&oacute;n lenguaje</th>
		<th class="text-center " >Personal Social</th>
		<th class="text-center " >Total actual</th>
	</tr>
	</thead>
	<tbody id="tb-escala">
		<?php foreach ($datosnino as $key => $datonino) { ?>
		<tr>
			<td><div><?php echo 1 + $key; echo $this->Form->hidden("escala.$key.id_nino", ['value' => $datonino->id_nino]);?></div></td>
			<td><?php echo ucfirst($datonino->paterno).' '.ucfirst($datonino->materno).' '.ucfirst($datonino->nombres); ?></td>
			<td class="text-center"><?php echo strtoupper($datonino->sexo[0]);//($datonino->sexo == 'Femenino')? 'F':'M' ; ?></td>
			<td class="text-center"><?php echo (is_null($datonino->fecha_nacimiento))? '': (explode(' ', $datonino->fecha_nacimiento->format('Y-m-d') )[0]); ?></td>
			<td class="text-center" id="anios">
				<?php echo (is_null($datonino->fecha_nacimiento))? '':$datonino->fecha_nacimiento->diff(new \DateTime)->y;
				if(is_null($datonino->fecha_nacimiento)){
				echo $this->Form->hidden("escala.$key.anios", ['value'=>''] ); 
				} else {
					echo $this->Form->hidden("escala.$key.anios", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->y] ); 
				}
				?> 
			</td>
			<td class="text-center" id="meses">
				<?php echo (is_null($datonino->fecha_nacimiento))? '': $datonino->fecha_nacimiento->diff(new \DateTime)->m;
				if(is_null($datonino->fecha_nacimiento)){
					echo $this->Form->hidden("escala.$key.meses", ['value'=>''] ); 
				} else {
					echo $this->Form->hidden("escala.$key.meses", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->m] ); 
				}
				?>
			</td>

			<td class="text-center">
				<?php echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'mot-gruesa', 'maxlength'=>'3', 'required']);echo $this->Form->hidden("escala.$key.mot_gruesa");
				?> <span class="param"></span>
			</td>

			<td class="text-center"><?php 
			echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'mot-fina', 'maxlength'=>'3'] ); echo $this->Form->hidden("escala.$key.mot_fina"); ?> <span class="param"></span>
			</td>

			<td class="text-center"><?php echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'aud-leng', 'maxlength'=>'3'] ); echo $this->Form->hidden("escala.$key.aud_leng" ); ?> <span class="param"></span>
			</td>

			<td class="text-center"><?php echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'per-soc', 'maxlength'=>'3'] ); echo $this->Form->hidden("escala.$key.per_soc" ); ?><span class="param"></span>
			</td>

			<td class="text-center"><?php 
			echo $this->Form->input('', ['class' => "fifty total-actual-$key", 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'total-actual', 'readonly'] ); echo $this->Form->hidden("escala.$key.total_actual");?><span class="param"></span>
			</td>
			<?php echo $this->Form->hidden("escala.$key.periodo", ['value'=>date('Y').'-'.$month] );?>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-escala'] ); ?>


</div>

<script type="text/javascript" charset="utf-8" async defer>
    $('#total-actual').click(function(event) {
    	return false;
    });
</script>
