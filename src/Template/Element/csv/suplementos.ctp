
<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInDown">
	<table class="table table-bordered table-hover table-responsive" id="table-suplementos">
		<thead class="text-center">
			<tr>
				<th class="tex-center" rowspan="2">#</th>
				<th class="tex-center col-xs-3 col-sm-3 col-md-3 col-lg-3" rowspan="2">Nombre completo</th>
				<th class="tex-center" rowspan="2">Sexo</th>
				<th class="tex-center" rowspan="2">Fecha Nacimiento</th>
				<th class="text-center" colspan="2">Edad</th>
				<th class="tex-center" rowspan="2">Vacunas al dia</th>
				<th class="text-center" colspan="2">Vitamina A</th>
				<th class="text-center" colspan="3">Ferrosol</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1a" rowspan="2">Chispitas nutri<br>cionales</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" rowspan="2">Zinc</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" rowspan="2">Nutri Bebé</th>
				<th class="text-center" colspan="2">Mebendazol</th>
			</tr>
			<tr>
					
				<th class="text-center" id="anios" >A&ntilde;os</th>
				<th class="text-center" id="meses" >Meses</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 1</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 2</th>

				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 1</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 2</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 3</th>

				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 1</th>
				<th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" >Dosis 2</th>

			</tr>
		</thead>
		<tbody id="tb">
			<?php foreach ($datosnino as $key => $datonino) { ?>
			<tr>
				<td><div><?php echo 1 + $key; echo $this->Form->hidden("suplementos.$key.id_nino", ['value' => $datonino->id_nino]);?></div></td>
				<td><?php echo $datonino->paterno.' '.$datonino->materno.' '.$datonino->nombres; ?></td>
				<td class="text-center"><?php echo strtoupper($datonino->sexo[0]); ?></td>
				<td class="text-center"><?php echo (is_null($datonino->fecha_nacimiento))? '': explode(' ', $datonino->fecha_nacimiento->format('Y-m-d') )[0]; ?></td>
				<td class="text-center" id="anios">
					<?php echo (is_null($datonino->fecha_nacimiento))? '' : $datonino->fecha_nacimiento->diff(new \DateTime)->y;
					if(is_null($datonino->fecha_nacimiento)){
						echo $this->Form->hidden("suplementos.$key.anios", ['value'=>''] ); 
					} else {
						echo $this->Form->hidden("suplementos.$key.anios", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->y] ); 
					}
					?> 
				</td>
				<td class="text-center" id="meses">
					<?php echo (is_null($datonino->fecha_nacimiento))? '' : $datonino->fecha_nacimiento->diff(new \DateTime)->m;
					if(is_null($datonino->fecha_nacimiento)){
						echo $this->Form->hidden("suplementos.$key.anios", ['value'=>''] ); 
					} else {
						echo $this->Form->hidden("suplementos.$key.anios", ['value'=>$datonino->fecha_nacimiento->diff(new \DateTime)->m] ); 
					} ?>
				</td>

				<td class="text-center">
					<?php $esq = [[ 'text' => 'Si', 'value' => 'Si', 'selected' ],[ 'text' => 'No', 'value' => 'No']];	
				echo $this->Form->select("suplementos.$key.vacunas_aldia", $esq, ['class'=>'form-control']);?>
				</td>

				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.vit_a_1d", ['class' => 'text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 vit_a_1d', 'label' => false, 'type'=>'text'] ); ?>
				</td>

				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.vit_a_2d", ['class' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12 vit_a_2d', 'label' => false, 'type'=>'text'] ); ?> <br>
				</td>

				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.ferrosol_1d", ['class' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12 ferrosol_1d', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>

				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.ferrosol_2d", ['class' => 'ferrosol_2d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>
				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.ferrosol_3d", ['class' => 'ferrosol_3d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>
				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.chispitas", ['class' => 'chispitas col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>
				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.zinc", ['class' => 'zinc col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>
				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.nutribebe", ['class' => 'nutribebe col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>
				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.mebendazol_1d", ['class' => 'mebendazol_1d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
				</td>
				<td class="text-center"><?php echo $this->Form->input("suplementos.$key.mebendazol_2d", ['class' => 'mebendazol_2d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
					<?php echo $this->Form->hidden("suplementos.$key.periodo", ['value'=>date('Y').'-'.$month] );?>
				</td>
			</tr>
			<?php } ?>

		
		</tbody>
	</table>

	<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-suplementos'] ); ?>
</div>


<?//= $this->Html->script('jquery.min.js') ?>
<?//= $this->Html->script('bootstrap.min.js') ?>
<?//= $this->Html->script('bootstrap-datepicker.min.js') ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('.anios').attr('disabled', 'disabled');
	$('.meses').attr('disabled', 'disabled');

	$('.vit_a_1d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.vit_a_2d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.ferrosol_1d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.ferrosol_2d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.ferrosol_3d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.chispitas').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.zinc').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.nutribebe').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.mebendazol_1d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
    });
	$('.mebendazol_2d').datepicker({
        	format: 'yyyy-mm-dd',
        	autoclose: true
	});
	
});
</script>

<!--
id, id_nino, vacunas_aldia, vit_a_1d, vit_a_2d, ferrosol_1d, ferrosol_2d, ferrosol_3d, chispitas, zinc, nutribebe, mebendazol_1d, mebendazol_2d, mes
-->