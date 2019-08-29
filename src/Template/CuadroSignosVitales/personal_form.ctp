<br>
<?php
$datoNino = $datosNino[0][0];
//pr(($datoNino));

?>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
	<div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<fieldset>
			<legend>I. Datos del niñ@</legend>

			<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $this->Form->input('record.cim', ['label' => ['text' => 'Centro infantil'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => $datoNino['nombre']] ); ?>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('record.paterno', ['label' => ['text' => 'Apellido Paterno'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => $datoNino['paterno']] ); ?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('record.materno', ['label' => ['text' => 'Apellido Materno'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => $datoNino['materno']] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('record.nombres', ['label' => ['text' => 'Nombres'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => $datoNino['nombres']] );?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php echo $this->Form->input('record.sexo', ['label' => ['text' => 'Sexo'], 'class' => 'form-control', 'disabled', 'value' => $datoNino['sexo']]);?>
			</div>

			<?php 
				if ( isset($datoNino['fecha_nacimiento'])) { 
			?>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">			
				<?php echo $this->Form->input('record.fecha_nacimiento', ['label' => ['text' => 'Fecha de nacimiento'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => ($datoNino['fecha_nacimiento']) ]  );  ?>
			</div>

			<?php 
				$fecha_nacimiento = new DateTime($datoNino['fecha_nacimiento']);
				$anios = (is_null($datoNino['fecha_nacimiento']))? '': $fecha_nacimiento->diff(new \DateTime)->y;
				$meses = (is_null($datoNino['fecha_nacimiento']))? '': $fecha_nacimiento->diff(new \DateTime)->m;		
			?>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">			
				<?php echo $this->Form->input('record.edad', ['label' => ['text' => 'Edad actual'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => $anios . ' años, ' . $meses . ' meses' ]  );  ?>
			</div>
			<?php } else { ?>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">			
				<?php echo $this->Form->input('record.edad', ['label' => ['text' => 'Sin fecha de nacimiento!!!'], 'class' => 'form-control', 'disabled', 'type' => 'text' ]  );  ?>
			</div>
			<?php }?>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">			
				<?php echo $this->Form->input('record.sala', ['label' => ['text' => 'Sala'], 'class' => 'form-control', 'disabled', 'type' => 'text', 'value' => ($datoNino['sala']) ]  );  ?>
			</div>
		</fieldset>
		<fieldset>
			<legend>II. Escala Abrevida de desarrollo</legend>
				<?php 
					echo $this->Form->hidden('a', ['value' => $anios, 'id' => 'anios']);
					echo $this->Form->hidden('m', ['value' => $meses, 'id' => 'meses']);
				?>
			<table class="table table-bordered table-responsive" id="table-escala">
				<tbody id="tb-escala">
					<tr>
						<td>
							Motricidad gruesa
						</td>
						<td class="forty">
							<?php 
								echo $this->Form->input(false, ['label' => false, 'id' => 'mot-gruesa', 'type' => 'number', 'class' => 'escala fifty']);
								echo $this->Form->hidden('record.mot_gruesa');
							?> 
						</td>
						<td class="literal"></td>
					</tr>
					<tr>
						<td>Motricidad fina</td>
						<td class="forty">
							<?php 
								echo $this->Form->input(false, ['label' => false, 'id' => 'mot-fina', 'type' => 'number', 'class' => 'escala fifty'] ); 
								echo $this->Form->hidden('record.mot_fina');
							?>
						</td>
						<td class="literal"></td>
					</tr>
					<tr>
						<td>Audición y lenguaje</td>
						<td class="forty">
							<?php 
								echo $this->Form->input(false, ['label' => false, 'id' => 'aud-leng', 'type' => 'number', 'class' => 'escala fifty'] ); 
								echo $this->Form->hidden('record.aud_leng');
							?>
						</td>
						<td class="literal"></td>
					</tr>
					<tr>
						<td>Personal y social</td>	
						<td class="forty">
							<?php 
								echo $this->Form->input(false, ['label' => false, 'id' => 'per-soc', 'type' => 'number', 'class' => 'escala fifty'] ); 
								echo $this->Form->hidden('record.per_soc');
							?>
						</td>
						<td class="literal"></td>
					</tr>
					<tr>
						<td>Total actual</td>
						<td class="forty total">
							<?php 
								echo $this->Form->input(false, ['label' => false, 'id' => 'total-actual', 'type' => 'number', 'class' => 'fifty'] );
								echo $this->Form->hidden("record.total_actual");
							?>
						</td>
						<td class="literal">
							
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<fieldset>
			<legend>III. Peso y Talla</legend>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th></th>
						<th>Mes anterior</th>
						<th>Mes actual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>PESO</td>
						<td id="p-anterior">10000</td>
						<td><?php echo $this->Form->input('record.peso', ['label' => false, 'escape' => false, 'class' => 'seventy', 'type' => 'text'] ); ?></td>
						<td> Gramos</td>
					</tr>
					<tr>
						<td>TALLA</td>
						<td id="t-anterior">120.5</td>
						<td><?php echo $this->Form->input('record.talla', ['label' => false, 'class' => 'seventy', 'type' => 'text'] ); ?></td>
						<td> Cent&iacute;metros</td>
					</tr>
					
				</tbody>
			</table>	
		</fieldset>
		<fieldset>
			<legend>IV. Estado Nutricional</legend>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th></th>
						<th>Mes anterior</th>
						<th>Mes actual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td  style="width: 100px">PESO - TALLA</td>
						<td class="sixty"></td>
						<td>
							<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'OB', 'value' => 'OB' ],[ 'text' => 'SOB', 'value' => 'SOB'],[ 'text' => 'PN', 'value' => 'PN'],[ 'text' => 'DAL', 'value' => 'DAL'],[ 'text' => 'DAM', 'value' => 'DAM'],[ 'text' => 'DAG', 'value' => 'DAG']];
							echo $this->Form->select('record.peso_talla', $options, ['class'=>'form-control', 'style' => 'width: 100px']);?>
						</td>
					</tr>
					<tr>
						<td style="width: 100px">TALLA - EDAD</td>
						<td class="sixty"></td>
						<td>
							<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'TN', 'value' => 'TN'],[ 'text' => 'TB', 'value' => 'TB'],[ 'text' => 'TA', 'value' => 'TA']];	
							echo $this->Form->select('record.talla_edad', $options, ['class'=>'form-control', 'style' => 'width: 100px']); ?>
						</td>
					</tr>
					
				</tbody>
			</table>	
		</fieldset>
		
	</div>
	<div class="group2 col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<fieldset>
			<legend>V. Micronutrientes </legend>
			<label>Vacunas al día</label>
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">	
				<?php $esq = [[ 'text' => '', 'value' => '', 'selected', 'disabled'], [ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	
					echo $this->Form->select('record.vacunas_aldia', $esq, ['class'=>'form-control']);
				?>
			</div>
			
			<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th colspan="2" class="text-center" >VITAMINA A</th>
				</tr>
				<tr>
					<th>1ra Dosis</th>
					<th>2da Dosis</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center"><?php echo $this->Form->input('record.vit_a_1d', ['class' => 'strech text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 vit_a_1d', 'label' => false, 'type'=>'text'] ); ?>
					</td>
					<td class="text-center"><?php echo $this->Form->input('record.vit_a_2d', ['class' => 'strech col-xs-12 col-sm-12 col-md-12 col-lg-12 vit_a_2d', 'label' => false, 'type'=>'text'] ); ?> <br>
					</td>
				</tr>
			</tbody>
			</table>	

			<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th colspan="3" class="text-center" >FERROSOL</th>
				</tr>
				<tr>
					<th>1ra Dosis</th>
					<th>2da Dosis</th>
					<th>3a Dosis</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center"><?php echo $this->Form->input('record.ferrosol_1d', ['class' => 'strech col-xs-12 col-sm-12 col-md-12 col-lg-12 ferrosol_1d', 'label' => false, 'type'=>'text'] ); ?><br>
					</td>

					<td class="text-center"><?php echo $this->Form->input('record.ferrosol_2d', ['class' => 'strech ferrosol_2d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
					</td>
					<td class="text-center"><?php echo $this->Form->input('record.ferrosol_3d', ['class' => 'strech ferrosol_3d col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?><br>
					</td>
				</tr>
			</tbody>
			</table>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>Chispitas nutricionales</th>
						<th>Zinc</th>
						<th>Nutribebe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>	
							<?php echo $this->Form->input('record.chispitas', ['class' => 'strech chispitas col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?>
						</td>
						<td>	
							<?php echo $this->Form->input('record.zinc', ['class' => 'strech zinc col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?>
						</td>
						<td>	
							<?php echo $this->Form->input('record.nutribebe', ['class' => 'strech nutribebe col-xs-12 col-sm-12 col-md-12 col-lg-12', 'label' => false, 'type'=>'text'] ); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<fieldset>
			<legend>VI. Asistencia</legend>
		</fieldset>	

		<fieldset>
			<legend>VII. Protecci&oacute;n e Infecciones</legend>
			
			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">	
			<label>¿Se present&oacute; alg&uacute;n caso de maltrato infantil?</label>
				<?php $q = [[ 'text' => '', 'value' => '', 'selected', 'disabled'], [ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	
					echo $this->Form->select('record.maltrato_infantil', $q, ['class'=>'form-control']);
				?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">	
			<label title="Infecciones Respiratorias Agudas">IRAS</label>
				<?php $q = [[ 'text' => '', 'value' => '', 'selected', 'disabled'], [ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	
					echo $this->Form->select('record.iras', $q, ['class'=>'form-control']);
				?>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">	
			<label title="Infecciones Diarreicas Agudas">EDAS</label>
				<?php $q = [[ 'text' => '', 'value' => '', 'selected', 'disabled'], [ 'text' => 'Si', 'value' => 'Si' ],[ 'text' => 'No', 'value' => 'No']];	
					echo $this->Form->select('record.edas', $q, ['class'=>'form-control']);
				?>
			</div>


		</fieldset>
	</div>

</div>
<script type="text/javascript" language="javascript">
$(document).ready(function() {


	$('input#record-peso').on('focusout', function(e){
		var p_anterior = $('td#p-anterior').text();
		if( $(this).val() < p_anterior - 500 ){
			alert('¡¡¡ El peso actual es mucho menor al peso anterior !!!');
			$(this).addClass('alert-danger');
			$('input#record-peso').focus();
		} else {
			$(this).removeClass('alert-danger');
		}
	});
	$('input#record-talla').on('focusout', function(e){
		var t_anterior = $('td#t-anterior').text();
		if( parseFloat($(this).val()) < t_anterior ){
			alert('¡¡¡ El talla actual es menor a la talla anterior !!!');
			$(this).addClass('alert-danger');
		} else {
			$(this).removeClass('alert-danger');
		}
	});

	$('input#record-peso').on('focusin', function(e){
		var t_anterior = $('td#t-anterior').text();
		if( parseFloat($('input#record-talla').val()) < t_anterior ){
			$('input#record-talla').focus();
		}
	});
	$('input#record-talla').on('focusin', function(e){
		var p_anterior = $('td#p-anterior').text();
		if( $('input#record-peso').val() < p_anterior - 500 ){
			$('input#record-peso').focus();
		}
	});

	$('input#record-peso, input#record-talla').blur(function(event) {
		if( $('input#record-peso').val() == "" && $('input#record-talla').val()) = "" ){
		
	});

	$('input#record-peso').on('keyup', function(e){
		this.value = (this.value + '').replace(/[^0-9]/g, '');
		if (this.value.length > 5) {
		    this.value = this.value.slice(0,5); 
		}
	});

	$('input#record-talla').on('keyup', function(e){
		
		var key = e.which ? e.which : event.keyCode;
        var value = $(this).val(); 
        if( (key >= 48 && key <= 57) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 110 || key == 188 || key == 190) ){
          e.preventDefault();
          $(this).val(value.replace(",","."));
        }else if(key >= 37 && key <= 40 || key == 8 || key == 46){
        	return false;
        }else {
        	$(this).val(value.replace(/[A-Za-z_~\-!@#\$%\^&\*\(\)]+$/gim,""));
        }

		if (this.value.length > 5) {
		    this.value = this.value.slice(0,5); 
		}
	});

	$('.vit_a_1d, .vit_a_2d, .ferrosol_1d, .ferrosol_2d, .ferrosol_3d, .chispitas, .zinc, .nutribebe, .mebendazol_1d, .mebendazol_2d').datepicker({        	
		autoclose: true,
		endDate: 'now',
	});
	
} );
</script>

<!--
{
    "mayo": 
    [
         {
            "Lun-25":"P",
            "Mar-26":"F",
            "Mie-27":"R",
            "Jue-28":"D",
            "Vie-29":"M",
        }
    ],
}-->



 		OriginalNameTextBox.Text = ""
        ConventionalNameTextBox.Text = ""
        AgeTextBox.Text, SexCombotBox.Text = ""
        HomeTextBox.Text = ""
        BirthDateDateTimePicker.Text = ""
