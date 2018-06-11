<?php echo $this->Html->script('custom.js'); ?>


<?php 
/* Por defecto por false se carga el formulario de forma normar listo para la actualizacion
Si el update es correcto se carga vacio.
*/
if( isset($success) ){
	echo '<div class="alert-success text-center"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp; Datos actualizados correctamente </div>';
} else { ?>
<br/> <hr/>
<fieldset>
	<legend>Edicion de datos de la Escala Abreviada de Desarrollo</legend>

	<div class="group1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<!--<div class="group11 col-xs-12 col-sm-6 col-md-6 col-lg-12 animated fadeInUp">-->
	<?php
	//pr($escala_array);
	//exit;
	?>
	<?php echo $this->Form->create('escala', ['url'=>[ 'action'=>'actions'], 'id'=>"frm-update-escala"] );?>

	<table class="table table-bordered table-hover table-responsive" id="table-escala">
			<thead class="text-center">
			<tr>
				<th class="text-center">Mes</th>
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
			<?php foreach ($escala_array as $key => $datonino) { ?>
			<tr>
				<td><div><?php echo $this->Form->hidden("escala.$key.id", ['value'=>$datonino['id']]); 
				echo $this->Form->input("escala.$key.periodo", ['class' => "text-center", 'label' => false, 'type'=>'text', 'value'=>$datonino['periodo'], 'readonly' ] );
				echo $this->Form->hidden("escala.$key.id_nino", ['value' => $datonino['id_nino']]);?></div></td>
				<td><?php echo ucfirst($datonino['paterno']).' '.ucfirst($datonino['materno']).' '.ucfirst($datonino['nombres']); ?></td>
				<td class="text-center"><?php echo strtoupper( $datonino['sexo'] ); ?></td>
				<td class="text-center"><?php echo ( is_null($datonino['fecha_nacimiento']) )? '' : $datonino['fecha_nacimiento'] ; ?></td>
				<td class="text-center" id="anios">
					<?php echo $datonino['anios']; //echo (is_null($datonino['fecha_nacimiento']))? '':$$datonino['fecha_nacimiento'];
						if(is_null($datonino['fecha_nacimiento'])){
							echo $this->Form->hidden("escala.$key.anios", ['value'=>''] ); 
						} else {
							echo $this->Form->hidden("escala.$key.anios", ['value'=>$datonino['anios']] ); 
						}
					?>
				</td>
				<td class="text-center" id="meses">
					<?php echo $datonino['meses'];//(is_null($datonino['fecha_nacimiento']))? '': $months;
						if(is_null($datonino['fecha_nacimiento'])){
							echo $this->Form->hidden("escala.$key.meses", ['value'=>''] ); 
						} else {
							echo $this->Form->hidden("escala.$key.meses", ['value'=>$datonino['meses'] ] ); 
						}
					?>
				</td>

				<td class="text-center">
					<?php 
					if( isJSON( $datonino['mot_gruesa'] ) ){
						$motGruesa = $datonino['mot_gruesa']; 
						$motGruesaNumeral = array_keys(json_decode($motGruesa, true))[0] ;
						$motGruesaLiteral = array_values(json_decode($motGruesa, true))[0]; 
					}
					else {
						if( ctype_alpha( $datonino['mot_gruesa']) ){
							$motGruesaNumeral = '';
							$motGruesaLiteral = $motGruesa = $datonino['mot_gruesa']; 
						} elseif ( is_numeric($datonino['mot_gruesa'])) {
							$motGruesaNumeral = $motGruesa = $datonino['mot_gruesa'];
							$motGruesaLiteral = '';
						} elseif ( empty($datonino['mot_gruesa']) )  {
							$motGruesaNumeral = $motGruesa = $motGruesaLiteral = '';
						}
					}
					echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'mot-gruesa', 'maxlength'=>'3', 'required', 'value'=> $motGruesaNumeral ]);
					echo $this->Form->hidden("escala.$key.mot_gruesa", ['value'=> $motGruesa ]);
					echo '<span class="param '.strtolower($motGruesaLiteral).'">'.$motGruesaLiteral.'</span>';
					?> 
				</td>

				<td class="text-center"><?php 
					if( isJSON( $datonino['mot_fina'] ) ){
						$motFina = $datonino['mot_fina']; 
						$motFinaNumeral = array_keys(json_decode($motFina, true))[0] ;
						$motFinaLiteral = array_values(json_decode($motFina, true))[0]; 
					}
					else {
						if( ctype_alpha( $datonino['mot_fina']) ){
							$motFinaNumeral = '';
							$motFinaLiteral = $motFina = $datonino['mot_fina']; 
						} elseif ( is_numeric($datonino['mot_fina'])) {
							$motFinaNumeral = $motFina = $datonino['mot_fina'];
							$motFinaLiteral = '';
						} elseif ( empty($datonino['mot_fina']) )  {
							$motFinaNumeral = $motFinaLiteral = $motFina = '';
						}
					}
				echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'mot-fina', 'maxlength'=>'3', 'value'=> $motFinaNumeral ] ); 
				echo $this->Form->hidden( "escala.$key.mot_fina", ['value'=> $motFina] ); 
				echo '<span class="param '.strtolower( $motFinaLiteral ).'">'.$motFinaLiteral.'</span>';
				?> 
				</td>

				<td class="text-center"><?php 
					if( isJSON( $datonino['aud_leng'] ) ){
						$audLeng = $datonino['aud_leng']; 
						$audLengNumeral = array_keys(json_decode($audLeng, true))[0] ;
						$audLengLiteral = array_values(json_decode($audLeng, true))[0]; 
					}
					else {
						if( ctype_alpha( $datonino['aud_leng']) ){
							$audLengNumeral = '';
							$audLengLiteral = $audLeng = $datonino['aud_leng']; 
						} elseif ( is_numeric($datonino['aud_leng'])) {
							$audLengNumeral = $audLeng = $datonino['aud_leng'];
							$audLengLiteral = '';
						} elseif ( empty($datonino['aud_leng']) )  {
							$audLengNumeral = $audLengLiteral = $audLeng = '';
						}
					}
				echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'aud-leng', 'maxlength'=>'3', 'value'=> $audLengNumeral ] ); 
				echo $this->Form->hidden("escala.$key.aud_leng", ['value'=>$audLeng] ); 
				echo '<span class="param '.strtolower( $audLengLiteral ).'">'.$audLengLiteral.'</span>';
				?> 
				</td>

				<td class="text-center"><?php 
					if( isJSON( $datonino['per_soc'] ) ){
						$perSoc = $datonino['per_soc']; 
						$perSocNumeral = array_keys(json_decode($perSoc, true))[0] ;
						$perSocLiteral = array_values(json_decode($perSoc, true))[0]; 
					}
					else {
						if( ctype_alpha( $datonino['per_soc']) ){
							$perSocNumeral = '';
							$perSocLiteral = $perSoc = $datonino['per_soc']; 
						} elseif ( is_numeric($datonino['per_soc'])) {
							$perSocNumeral = $perSoc = $datonino['per_soc'];
							$perSocLiteral = '';
						} elseif ( empty($datonino['per_soc']) )  {
							$perSocLiteral = $perSocNumeral = $perSoc = '';
						}
					}
				echo $this->Form->input('', ['class' => 'fifty', 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>'per-soc', 'maxlength'=>'3', 'value'=>$perSocNumeral ] ); 
				echo $this->Form->hidden("escala.$key.per_soc", ['value'=>$perSoc] ); 
				echo '<span class="param '.strtolower( $perSocLiteral ).'">'.$perSocLiteral.'</span>';?>
				</td>

				<td class="text-center"><?php 

				if( isJSON($datonino['total_actual']) ){
					$totalActual = $datonino['total_actual']; 
					$totalActualNumeral = array_keys(json_decode($totalActual, true))[0] ;
					$totalActualLiteral = array_values(json_decode($totalActual, true))[0]; 
				}
				else {
					if( is_string( $datonino['total_actual']) ){
						$totalActualLiteral = $totalActual = $datonino['total_actual']; 
						$totalActualNumeral = '';
					} elseif ( is_numeric($datonino['total_actual'])) {
						$totalActualNumeral = $totalActual = $datonino['total_actual'];
						$totalActualLiteral = $totalActual = '';
					} elseif ( empty($datonino['total_actual']) )  {
						$totalActualNumeral = $totalActualLiteral = $totalActual = '';
					}
				}
				echo $this->Form->input("escala.$key.total_actual", ['class' => "fifty total-actual-$key", 'label' => false, 'type'=>'number', 'min'=>'0', 'id'=>"total-actual",'readonly', 'value'=>$totalActualNumeral ] ); 
				echo $this->Form->hidden("escala.$key.total_actual", ['value'=>$totalActual ]);
				echo '<span class="param '.strtolower($totalActualLiteral).'">'.$totalActualLiteral.'</span>';

				?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php echo $this->Html->tag('label','Guardar Datos', ['class' => 'btn btn-save btn-lg', 'id' => 'update-escala'] ); 

	echo $this->Form->end(); ?>

	</div>
</fieldset>
<div class="datos"></div>

<script type="text/javaScript">
jQuery(document).ready(function ($) {

	$('#update-escala').click(function(event) {
		var data =[ $('form#frm-update-escala').serializeFormJSON(), 'update-escala' ];
		//console.log( $('form#frm-update-escala').serialize() );
		$.ajax({
            type: "POST",
            url: $('form#frm-update-escala').attr('action'),
            data: {data},
            //dataType: 'json',
            //contentType: "application/json",
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#datos').html(data);
            },
        });
        return false;
	});
});
</script>
<?php } ?>

<!-- ingresos y gastos |||| 
200 y 400 debito yo emiti
rubro 2 det del vredito compras que realeze

libro de compras ventas 110 con -->

