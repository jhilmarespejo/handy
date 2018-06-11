<h2 class="title2 text-center">Modelo de Calidad</h2>

<?php echo $this->Form->create('modelo', ['url'=>[ 'action'=>'add'], 'id'=>"frm-modelo"] );?>
<div id="loading" class="text-center hidden">
	Procesando...
	<br/>
	<?php echo $this->Html->image('loading.gif', ['class' => 'indicator'])?>
	<br/><br/>
</div>
<h4 id="msg-box-danger" class='alert-danger text-center '>Rellene los espacios vacíos</h4>
<h5 id="msg-box-warning" style="border: 1px solid #EADCAA; border-radius:5px " class='alert-warning text-center'>Los valores introducidos no deben ser mayores a <b>20</b></h5>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInLeft">
	<div id="content">
		<ul id="tabs" class="nav nav-tabs">
			<li class="institucional text-center active"> <a href="#institucional" data-toggle="tab">Ámbito institucional</a></li>
			<li class="pedagogico text-center"><a href="#pedagogico" data-toggle="tab">Ámbito Pedagógico</a></li>
			<li class="comunidad text-center"><a href="#comunidad" data-toggle="tab">Ámbito Comunidad</a></li>
			<li class="totales text-center"><a href="#totales" data-toggle="tab">Totales</a></li>

		</ul>
		<div id="my-tab-content" class="tab-content" >
			<div class="tab-pane active" id="institucional">
				<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12 fadeInUp animated">
					<table class="table table-bordered" id="table-ins">
						<thead class="text-center">
							<tr>
								<th rowspan="2" class="text-center">#</th>
								<th rowspan="2" class="text-center">Nombre CIM</th>
								<th class="text-center" colspan="13">Indicadores de ámbito Institucional</th>
							</tr>
							<tr>
								<th class="text-center" >Indicador 1</th>
								<th class="text-center" >Indicador 2</th>
								<th class="text-center" >Indicador 3</th>
								<th class="text-center" >Indicador 4</th>
								<th class="text-center" >Indicador 5</th>
								<th class="text-center" >Indicador 6</th>
								<th class="text-center" >Indicador 7</th>
								<th class="text-center" >Indicador 8</th>
								<th class="text-center" >Indicador 9</th>
								<th class="text-center" >Indicador 10</th>
								<th class="text-center" >Indicador 11</th>
								<th class="text-center" >Promedio general</th>
								<th class="text-center" >Promedio porcentual</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($sent[0] as $key => $cim) { ?>
							<tr>
								<td><?php echo 1 + $key; echo $this->Form->hidden("$key.id_cim", ['value' => $cim->id_cim]);?></td>
								<td><?php echo ucfirst($cim->nombre); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_1", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_2", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_3", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_4", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_5", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_6", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_7", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_8", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_9", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_10", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><?php echo $this->Form->input("$key.institucional_11", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required', 'max' =>'20']); ?></td>
								<td><span 'id'='ins-prom-general'></span><?php echo $this->Form->input("$key.ins_prom_general", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'ins-prom-general', 'disabled']);
								echo $this->Form->hidden("$key.ins_prom_general");
								?></td>
								<td><?php echo $this->Form->input("$key.ins_prom_porcentual", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'ins-prom-porcentual', 'disabled']); ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="text-center">
					<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-institucional'] ); ?>
				</div>
			</div>
			<div class="tab-pane" id="pedagogico">
				<div class="group2 col-xs-12 col-sm-12 col-md-12 col-lg-12 fadeInLeft animated">
					<table class="table table-bordered" id="table-ped">
						<thead class="text-center">
							<tr>
								<th rowspan="2" class="text-center">#</th>
								<th rowspan="2" class="text-center">Nombre CIM</th>
								<th class="text-center" colspan="13">Indicadores de ámbito Pedagógico</th>

							</tr>
							<tr>
								<th class="text-center" >Indicador 1</th>
								<th class="text-center" >Indicador 2</th>
								<th class="text-center" >Indicador 3</th>
								<th class="text-center" >Indicador 4</th>
								<th class="text-center" >Indicador 5</th>
								<th class="text-center" >Indicador 6</th>
								<th class="text-center" >Indicador 7</th>
								<th class="text-center" >Indicador 8</th>
								<th class="text-center" >Indicador 9</th>
								<th class="text-center" >Indicador 10</th>
								<th class="text-center" >Indicador 11</th>
								<th class="text-center" >Indicador 12</th>
								<th class="text-center" >Indicador 13</th>
								<th class="text-center" >Indicador 14</th>
								<th class="text-center" >Promedio general</th>
								<th class="text-center" >Promedio porcentual</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($sent[0] as $key => $cim) { ?>
							<tr>
								<td><?php echo 1 + $key; echo $this->Form->hidden("$key.id_cim", ['value' => $cim->id_cim]);?></td>
								<td><?php echo ucfirst($cim->nombre); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_1", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_2", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_3", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_4", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_5", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_6", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_7", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_8", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_9", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_10", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_11", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_12", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_13", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.pedagogico_14", ['class' => 'forty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.ped_prom_general", ['class' => 'forty prom-gen', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'ped-prom-general']); ?></td>
								<td><?php echo $this->Form->input("$key.ped_prom_porcentual", ['class' => 'forty prom-por', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'ped-prom-porcentual']); ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="text-center">
					<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-pedagogico'] ); ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="comunidad">
				<div class="group3 col-xs-12 col-sm-12 col-md-12 col-lg-12 fadeInDown animated">
					<table class="table table-bordered" id="table-com">
						<thead class="text-center">
							<tr>
								<th rowspan="2" class="text-center">#</th>
								<th rowspan="2" class="text-center">Nombre CIM</th>
								<th class="text-center" colspan="11">Indicadores de Comunidad</th>
								<!--<th class="text-center" colspan="4">TOTALES</th>-->
							</tr>
							<tr>
								<th class="text-center" >Indicador 1</th>
								<th class="text-center" >Indicador 2</th>
								<th class="text-center" >Indicador 3</th>
								<th class="text-center" >Indicador 4</th>
								<th class="text-center" >Indicador 5</th>
								<th class="text-center" >Indicador 6</th>
								<th class="text-center" >Indicador 7</th>
								<th class="text-center" >Indicador 8</th>
								<th class="text-center" >Indicador 9</th>
								<th class="text-center" >Promedio general</th>
								<th class="text-center" >Promedio porcentual</th>
								<!--<th class="text-center" >INSTITUCIONAL</th>
								<th class="text-center" >PEDAGÓGICO</th>
								<th class="text-center" >COMUNIDAD</th>
								<th class="text-center" >TOTAL</th>-->
							</tr>
						</thead>
						<tbody>
							<?php foreach ($sent[0] as $key => $cim) { ?>
							<tr>
								<td><?php echo 1 + $key; echo $this->Form->hidden("$key.id_cim", ['value' => $cim->id_cim]);?></td>
								<td><?php echo ucfirst($cim->nombre); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_1", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_2", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_3", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_4", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_5", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_6", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_7", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_8", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.comunidad_9", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?php echo $this->Form->input("$key.com_prom_general", ['class' => 'fifty prom-gen', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'com-prom-general']); ?></td>
								<td><?php echo $this->Form->input("$key.com_prom_porcentual", ['class' => 'fifty prom-por', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'com-prom-porcentual']); ?></td>


								<!--<td><?//php echo $this->Form->input("$key.total_institucional", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"totalInstitucional-$key" ]); ?></td>
								<td><?//php echo $this->Form->input("$key.total_pedagogico", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"totalPedagogico-$key"]); ?></td>
								<td><?//php echo $this->Form->input("$key.total_comunidad", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"totalComunidad-$key"]); ?></td>
								<td><?//php echo $this->Form->input("$key.total", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"tt-$key"]); ?></td>
								<?php echo $this->Form->hidden("$key.fecha", ['value' => date('Y-m-d')]);?>-->
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="text-center">
					<?php echo $this->Html->tag('label','Siguiente >', ['class' => 'btn btn-save btn-lg', 'id' => 'submit-comunidad'] );	?>
					<?//php echo $this->Form->end(); ?>
				</div>
			</div>
			<div class="tab-pane col-xs-12 col-sm-12 col-md-12 col-lg-12 fadeInUp animated" id="totales">
				<div class="group3 ">
					<table class="table table-bordered" id="table-tot">
						<thead class="text-center">
							<tr>
								<th rowspan="2" class="text-center">#</th>
								<th rowspan="2" class="text-center">Nombre CIM</th>
								<th class="text-center" colspan="4">TOTALES</th>
							</tr>
							<tr>
								<!--<th class="text-center" >Indicador 1</th>
								<th class="text-center" >Indicador 2</th>
								<th class="text-center" >Indicador 3</th>
								<th class="text-center" >Indicador 4</th>
								<th class="text-center" >Indicador 5</th>
								<th class="text-center" >Indicador 6</th>
								<th class="text-center" >Indicador 7</th>
								<th class="text-center" >Indicador 8</th>
								<th class="text-center" >Indicador 9</th>
								<th class="text-center" >Promedio general</th>
								<th class="text-center" >Promedio porcentual</th>-->
								<th class="text-center" >INSTITUCIONAL</th>
								<th class="text-center" >PEDAGÓGICO</th>
								<th class="text-center" >COMUNIDAD</th>
								<th class="text-center" >TOTAL</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($sent[0] as $key => $cim) { ?>
							<tr>
								<td><?php echo 1 + $key; echo $this->Form->hidden("$key.id_cim", ['value' => $cim->id_cim]);?></td>
								<td><?php echo ucfirst($cim->nombre); ?></td>
								<!--<td><?//php echo $this->Form->input("$key.comunidad_1", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_2", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_3", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_4", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_5", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_6", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_7", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_8", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.comunidad_9", ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0','maxlength'=>'2', 'required']); ?></td>
								<td><?//php echo $this->Form->input("$key.com_prom_general", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'com-prom-general']); ?></td>
								<td><?//php echo $this->Form->input("$key.com_prom_porcentual", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>'com-prom-porcentual']); ?></td>-->


								<td class="text-center"><?php echo $this->Form->input("$key.total_institucional", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"totalInstitucional-$key" , 'disabled']); ?></td>
								<td class="text-center"><?php echo $this->Form->input("$key.total_pedagogico", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"totalPedagogico-$key", 'disabled']); ?></td>
								<td class="text-center"><?php echo $this->Form->input("$key.total_comunidad", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"totalComunidad-$key", 'disabled']); ?></td>
								<td class="text-center"><?php echo $this->Form->input("$key.total", ['class' => 'fifty', 'label' => false, 'type'=>'text', 'maxlength'=>'5', 'required', 'id'=>"tt-$key", 'disabled']); ?></td>
								<?//php echo $this->Form->hidden("$key.fecha", ['value' => date('Y-m-d')]);?>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="text-center">
					<?php echo $this->Form->button('Guardar datos', ['class'=>'btn btn-save btn-lg']); ?>
					
				</div>
			</div>

		</div>
	</div>
</div>

<?php echo $this->Form->end(); ?>


<?//php echo $this->Html->script('jquery.min.js') ?>
<script type="text/javaScript">
$(document).ready(function ($) {
//$('#table-ins input').val('5');
//$('#table-ped input').val('8');
//$('#table-com input').val('15');

$('#table-ped input').attr('disabled', 'disabled');
$('#table-com input').attr('disabled', 'disabled');
$('#table-tot input').attr('disabled', 'disabled');
$('#msg-box-danger').hide('0');
$('#msg-box-warning').hide('0');


/*al hacer clic en e; boton Siguiente> valida toda la tabla, todos los input deben estar llenos*/
	validation = function (table, form){
		var success;
		$(table).each(function() {
			if($(this).val() == '' ){
				success = false;
				$(this).css('box-shadow', '0px 0px 5px 2px red');
				return false;
			}else {
				$(this).css('box-shadow', 'none');
				success = true;
			}
		});
		return success;
	}
/*Valida que cada input no se quede vacio en cada focusout */		
	$('table.table tbody').find('input').focusout(function(event) {
		if($(this).val() == "" || $(this).val() > 20){
			//$(this).css('box-shadow', '0px 0px 5px 2px red');
			$(this).css({
				'box-shadow': '0px 0px 5px 2px red',
				'color': 'red',
				'font-weight': 'bolder'
			});
			$('#msg-box-warning').show('slow');
			$(this).focus();
		} else {
			$('#msg-box-warning').hide('slow');
			$(this).css({'box-shadow':'none', 'color': '#000','font-weight':'normal'});
			color_indicador( $(this) );
			table = $(this).parents('table').attr('id');
			
			if(table == 'table-ins' ){ 
				prom_general = $(this).parents('tr').find('input#ins-prom-general');
			}else if (table == 'table-ped') {
				prom_general = $(this).parents('tr').find('input#ped-prom-general');
			}else if(table == 'table-com'){
				prom_general = $(this).parents('tr').find('input#com-prom-general');
			}
			processTable( prom_general );
		}
	});

/* colorea cada input deacuerdo a su valor */
	function color_indicador(that){
		//that.css('box-shadow', '0px 0px 5px 2px red');
		if(that.val() == '5'){
			that.css('background', 'rgb(249, 43, 43)');
		} else if (that.val() == '10') {
			that.css('background', 'pink');
		} else if (that.val() == '15') {
			that.css('background', 'yellow');
		} else if (that.val() == '20') {
			that.css('background', '#8BFD8B');
		} /*else {
			that.val('');
			that.css('box-shadow', '0px 0px 5px 2px red');
		}*/
	}

	/*$('#table-inst #ins-prom-general').focusin(function(event) {
		processTable( $(this) );
	});
	$('#table-ped #ped-prom-general').focusin(function(event) {
		processTable( $(this) );
	});
	$('#table-com #com-prom-general').focusin(function(event) {
		processTable( $(this) );
	});
	
	$('#table-tot #com-prom-general').focusin(function(event) {
		processTable( $(this) );
	});*/
	function precise_round(value, decPlaces){
		var val = value * Math.pow(10, decPlaces);
		var fraction = (Math.round((val - parseInt(val))*10)/10);
		//this line is for consistency with .NET Decimal.Round behavior
		// -342.055 => -342.06
		if(fraction == -0.5) fraction = -0.6;
		val = Math.round(parseInt(val) + fraction) / Math.pow(10, decPlaces);
		return val;
	}
	function processTable(that){
		x = that.attr('id');
		sum = 0;
		var parametro = that.parents().siblings('td');
		var v1 = parseInt(parametro[2].children[0].children[0].value );
		var v2 = parseInt(parametro[3].children[0].children[0].value );
		var v3 = parseInt(parametro[4].children[0].children[0].value );
		var v4 = parseInt(parametro[5].children[0].children[0].value );
		var v5 = parseInt(parametro[6].children[0].children[0].value );
		var v6 = parseInt(parametro[7].children[0].children[0].value );
		var v7 = parseInt(parametro[8].children[0].children[0].value );
		var v8 = parseInt(parametro[9].children[0].children[0].value );
		var v9 = parseInt(parametro[10].children[0].children[0].value );

		if(!v1){ v1 = 0; } 
		if(!v2){ v2 = 0; } 
		if(!v3){ v3 = 0; } 
		if(!v4){ v4 = 0; } 
		if(!v5){ v5 = 0; } 
		if(!v6){ v6 = 0; } 
		if(!v7){ v7 = 0; } 
		if(!v8){ v8 = 0; } 
		if(!v9){ v9 = 0; } 

		sum = v1+v2+v3+v4+v5+v6+v7+v8+v9;
		var promGen = precise_round( ((sum)/9), 2);
		var promPor = String( Math.round((promGen/20)*100))+' %';

		if(that.attr('id') == 'ins-prom-general'){
			var promGen = 0;
			var promPor = 0;
			var total = 0;

			var v10 = parseInt(parametro[11].children[0].children[0].value );
			var v11 = parseInt(parametro[12].children[0].children[0].value );

			if(!v10){ v10 = 0; } 
			if(!v11){ v11 = 0; } 


			total = sum + v10+v11;
			var promGen = precise_round( ((total)/11), 2);
			var promPor = String( Math.round((promGen/20)*100))+' %';

			//if( v1 && v2 && v3 && v4 && v5 && v6 && v7 && v8 && v9 && v10 && v11){
			that.val(promGen);
			parametro[13].children[0].children[0].value=promPor;
			index = parametro.parents('tr').index();
			$('#table-tot').find("input#totalInstitucional-"+index).val(precise_round( (((total)/220)*34), 1))
			//}
		}
		if(that.attr('id') == 'ped-prom-general'){
			var promGen = 0;
			var promPor = 0;
			var total = 0;
			var v10 = parseInt(parametro[11].children[0].children[0].value );
			var v11 = parseInt(parametro[12].children[0].children[0].value );
			var v12 = parseInt(parametro[13].children[0].children[0].value );
			var v13 = parseInt(parametro[14].children[0].children[0].value );
			var v14 = parseInt(parametro[15].children[0].children[0].value );

			if(!v10){ v10 = 0; } 
			if(!v11){ v11 = 0; } 
			if(!v12){ v12 = 0; } 
			if(!v13){ v13 = 0; } 
			if(!v14){ v14 = 0; } 

			total = sum +v10+v11+v12+v13+v14;
			var promGen = precise_round( ((total)/14), 2);
			var promPor = String( Math.round((promGen/20)*100))+' %';
			
			//if( v1 && v2 && v3 && v4 && v5 && v6 && v7 && v8 && v9 && v10 && v11 && v12 && v13 && v14){
				that.val(promGen);
				parametro[16].children[0].children[0].value=promPor;
				index = parametro.parents('tr').index();
				$('#table-tot').find("input#totalPedagogico-"+index).val(precise_round( (((total)/280)*33), 1))
			//}
		}
		if(that.attr('id') == 'com-prom-general'){
			//if( v1 && v2 && v3 && v4 && v5 && v6 && v7 && v8 && v9){
				that.val(promGen);
				parametro[11].children[0].children[0].value=promPor;
				index = parametro.parents('tr').index();
				//parametro[14].children[0].children[0].value=precise_round( (((sum)/220)*34), 1);

				//var totalInstitucional = parseFloat(parametro[12].children[0].children[0].value);
				//var totalPedagogico = parseFloat(parametro[13].children[0].children[0].value);

				var totalInstitucional = parseFloat($('#table-tot').find("input#totalInstitucional-"+index).val());
				var totalPedagogico = parseFloat($('#table-tot').find("input#totalPedagogico-"+index).val());
				var totalComunidad = precise_round( (((sum)/220)*34), 1);

				//$('#table-tot').find("input#totalInstitucional-"+index).val(precise_round( (((sum)/220)*34), 1))
				//$('#table-tot').find("input#totalComunidad-"+index).val(precise_round( (((sum)/220)*34), 1))
				$('#table-tot').find("input#totalComunidad-"+index).val(precise_round( (((sum)/180)*33), 1))
				$('#table-tot').find("input#tt-"+index).val(totalInstitucional + totalPedagogico + totalComunidad);
			//}
		}
	}//processTable

	$('#submit-institucional').click(function(event) {
		if(validation('#table-ins tbody tr td div input', 'institucional')){
			$('.institucional').removeClass('active');
			$('#institucional').removeClass('active');
			$('.pedagogico').addClass('active');
			$('#pedagogico').addClass('active');
			$('#msg-box-danger').hide('slow');
			$('#table-ped input').removeAttr('disabled');
			
			$('.prom-gen').attr('disabled', 'disabled');
			$('.prom-por').attr('disabled', 'disabled');
		}else{

			//$('#msg-box-danger').removeClass('hidden');
			//$('#msg-box-danger').show('slow');
			$('#msg-box-danger').show('slow');
		}
	});
	$('#submit-pedagogico').click(function(event) {
		if(validation('#table-ped tbody tr td div input', 'pedagogico')){
			$('.pedagogico').removeClass('active');
			$('#pedagogico').removeClass('active');
			$('.comunidad').addClass('active');
			$('#comunidad').addClass('active');
			$('#msg-box-danger').hide('slow');
			$('#table-com input').removeAttr('disabled');

			$('.prom-gen').attr('disabled', 'disabled');
			$('.prom-por').attr('disabled', 'disabled');
		}else{
			//$('#msg-box-danger').addClass('hidden');
			//$('#msg-box-danger').removeClass('hidden');
			//$('#msg-box-danger').show('slow');
			$('#msg-box-danger').show('slow');
		}
	});

	$('#submit-comunidad').click(function(event) {
		if(validation('#table-tot tbody tr td div input', 'comunidad')){
			$('.comunidad').removeClass('active');
			$('#comunidad').removeClass('active');
			$('.totales').addClass('active');
			$('#totales').addClass('active');
			$('#msg-box-danger').hide('slow');
			//$('#table-tot input').removeAttr('disabled');
		}else{
			//$('#msg-box-danger').addClass('hidden');
			//$('#msg-box-danger').removeClass('hidden');
			//$('#msg-box-danger').show('slow');
			$('#msg-box-danger').show('slow');
		}
	});

	
});

</script