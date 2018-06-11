<?php
	//pr($datosnino);
	//pr($situacionfamiliar);
	//pr($caracteristicasvivienda);
	//pr($aspectoseconomicos);
	//pr($consideraciones);
	//pr($familiares);

//	pr(count($familiares));
	//echo "adfsfsdgf";
	//exit;
?>

<h2 class="title2 text-center"> Registros </h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

<p>
USUARIO: 
	<b><?php echo $consideraciones[0]['usuario'];?> </b>
</p>
<p>
FECHA Y HORA:
	<b><?php echo ($consideraciones[0]['fecha_hora'])? $consideraciones[0]['fecha_hora']->i18nFormat():"";?> </b>
</p>
<p>
	<b><?php echo $datosnino[0]['id_nino'];?> </b>
</p>

<fieldset>
	<legend>Datos del Ni&ntilde;o</legend>

	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
					<th>id cim</th>
					<th>fecha registro</th>
					<th>id nino</th>
					<th>paterno</th>
					<th>materno</th>
					<th>nombres</th>
					<th>fecha nacimiento</th>
					<th>sexo</th>
					<th>admision</th>
					<th>antiguedad</th>
					<th>certificado nacimiento</th>
					<th>ci</th>
					<th>num ci</th>
					<th>ci expedido</th>
					<th>tipo seguro salud</th>
					<th>carnet vacunas</th>
					<th>peso</th>
					<th>talla</th>
					<th>dx</th>
					<th>vacunacion completa</th>
					<th>tipo discapacidad</th>
					<th>discapacidad</th>
					<th>peso</th>
					<th>talla</th>
					<th>estado nutricional</th>
					<th>otro tipo seguro salud</th>
					<th>nro seguro</th>
					<th>nro partida certf nac</th>
					<th>zona barrio</th>
					<th>calle avenida</th>
					<th>num vivienda</th>
					<th>fono</th>
					<th>punto referencia</th>
					<th>causas retiro</th>
					<th>detalle causas retiro</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($datosnino as $datonino ){ ?>
				<tr>
					<td><?php echo $datonino['id_cim']; ?></td>
					<td><?//php echo ( $datonino['fecha_registro']->i18nFormat('yyyy-MM-dd') )? $datonino['fecha_registro']->i18nFormat('yyyy-MM-dd'):"" ; ?></td>
					<td><?php echo $datonino['id_nino']; ?></td>
					<td><?php echo $datonino['paterno']; ?></td>
					<td><?php echo $datonino['materno']; ?></td>
					<td><?php echo $datonino['nombres']; ?></td>
					<td><?php echo $datonino['fecha_nacimiento']->i18nFormat('yyyy-MM-dd') ? $datonino['fecha_nacimiento']->i18nFormat('yyyy-MM-dd'): "" ; ?></td>
					<td><?php echo $datonino['sexo']; ?></td>
					<td><?php echo $datonino['admision']; ?></td>
					<td><?php echo $datonino['antiguedad']; ?></td>
					<td><?php echo $datonino['certificado_nacimiento']; ?></td>
					<td><?php echo $datonino['ci']; ?></td>
					<td><?php echo $datonino['num_ci']; ?></td>
					<td><?php echo $datonino['ci_expedido']; ?></td>
					<td><?php echo $datonino['tipo_seguro_salud']; ?></td>
					<td><?php echo $datonino['carnet_vacunas']; ?></td>
					<td><?php echo $datonino['peso']; ?></td>
					<td><?php echo $datonino['talla']; ?></td>
					<td><?php echo $datonino['dx']; ?></td>
					<td><?php echo $datonino['vacunacion_completa']; ?></td>
					<td><?php echo $datonino['tipo_discapacidad']; ?></td>
					<td><?php echo $datonino['discapacidad']; ?></td>
					<td><?php echo $datonino['peso']; ?></td>
					<td><?php echo $datonino['talla']; ?></td>
					<td><?php echo $datonino['estado_nutricional']; ?></td>
					<td><?php echo $datonino['otro_tipo_seguro_salud']; ?></td>
					<td><?php echo $datonino['nro_seguro']; ?></td>
					<td><?php echo $datonino['nro_partida_certf_nac']; ?></td>
					<td><?php echo $datonino['zona_barrio']; ?></td>
					<td><?php echo $datonino['calle_avenida']; ?></td>
					<td><?php echo $datonino['num_vivienda']; ?></td>
					<td><?php echo $datonino['fono']; ?></td>
					<td><?php echo $datonino['punto_referencia']; ?></td>
					<td><?php echo $datonino['causas_retiro']; ?></td>
					<td><?php echo $datonino['detalle_causas_retiro']; ?></td>
				</tr>

			<?php } ?>
		</tbody>
	</table>
</fieldset>

<fieldset>
	<legend>Situación Familiar</legend>
	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
				<th>nino_vive_con</th>
				<th>ausencia_madre</th>
				<th>ausencia_padre</th>
				<th>ausencia_ambos</th>
				<th>ambiente_familiar</th>
				<th>tipo_familia</th>
			</tr>
		</thead>

		<tbody>

			<?php foreach( $situacionfamiliar as $situacion) { ?>
				<tr>
					<td><?php echo $situacion['nino_vive_con'];?></td>
					<td><?php echo $situacion['ausencia_madre'];?></td>
					<td><?php echo $situacion['ausencia_padre'];?></td>
					<td><?php echo $situacion['ausencia_ambos'];?></td>
					<td><?php echo $situacion['ambiente_familiar'];?></td>
					<td><?php echo $situacion['tipo_familia'];?></td>
				</tr>
			<?php } ?>	
		</tbody>
	</table>
</fieldset>

<fieldset>
	<legend>Caracteristicas de la vivienda</legend>
	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
				<th>paredes</th>
				<th>piso</th>
				<th>tipo vivienda</th>
				<th>vivienda es</th>
				<th>numero personas</th>
				<th>numero dormitorios</th>
				<th>cocina</th>
				<th>sala</th>
				<th>comedor</th>
				<th>bano</th>
				<th>energia electrica</th>
				<th>agua potable</th>
				<th>vertiente</th>
				<th>gas domiciliario</th>
				<th>alcantarillado</th>
				<th>internet</th>
				<th>tv cable</th>
				<th>telefono fijo</th>
				<th>vehiculo propio</th>
				<th>vehiculo medio trabajo</th>
				<th>cantidad vehiculos</th>
				<th>transporte trasladarse cim</th>
				<th>tiempo demora cim</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $caracteristicasvivienda as $vivienda) { ?>
				<tr>
					<td><?php echo $vivienda['paredes']; ?></td>
					<td><?php echo $vivienda['piso']; ?></td>
					<td><?php echo $vivienda['tipo_vivienda']; ?></td>
					<td><?php echo $vivienda['vivienda_es']; ?></td>
					<td><?php echo $vivienda['numero_personas']; ?></td>
					<td><?php echo $vivienda['numero_dormitorios']; ?></td>
					<td><?php echo $vivienda['cocina']; ?></td>
					<td><?php echo $vivienda['sala']; ?></td>
					<td><?php echo $vivienda['comedor']; ?></td>
					<td><?php echo $vivienda['bano']; ?></td>
					<td><?php echo $vivienda['energia_electrica']; ?></td>
					<td><?php echo $vivienda['agua_potable']; ?></td>
					<td><?php echo $vivienda['vertiente']; ?></td>
					<td><?php echo $vivienda['gas_domiciliario']; ?></td>
					<td><?php echo $vivienda['alcantarillado']; ?></td>
					<td><?php echo $vivienda['internet']; ?></td>
					<td><?php echo $vivienda['tv_cable']; ?></td>
					<td><?php echo $vivienda['telefono_fijo']; ?></td>
					<td><?php echo $vivienda['vehiculo_propio']; ?></td>
					<td><?php echo $vivienda['vehiculo_medio_trabajo']; ?></td>
					<td><?php echo $vivienda['cantidad_vehiculos']; ?></td>
					<td><?php echo $vivienda['transporte_trasladarse_cim']; ?></td>
					<td><?php echo $vivienda['tiempo_demora_cim']; ?></td>
				</tr>
			<?php } ?>	
		</tbody>
	</table>
</fieldset>

<fieldset>
	<legend>Aspectos economicos</legend>
	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
				<th>alimentacion</th>
				<th>vivienda</th>
				<th>luz</th>
				<th>agua</th>
				<th>vestimenta</th>
				<th>panales</th>
				<th>transporte</th>
				<th>telefono fijo</th>
				<th>telefono movil</th>
				<th>gas</th>
				<th>educacion</th>
				<th>salud</th>
				<th>cable</th>
				<th>total gastos</th>
				<th>monto adeudado</th>
				<th>tipo inversion</th>
				<th>otros ingresos</th>
				<th>detalle otros ingresos</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $aspectoseconomicos as $economia) { ?>
				<tr>
					<td><?php echo $economia['alimentacion']; ?></td>
					<td><?php echo $economia['vivienda']; ?></td>
					<td><?php echo $economia['luz']; ?></td>
					<td><?php echo $economia['agua']; ?></td>
					<td><?php echo $economia['vestimenta']; ?></td>
					<td><?php echo $economia['panales']; ?></td>
					<td><?php echo $economia['transporte']; ?></td>
					<td><?php echo $economia['telefono_fijo']; ?> </td>
					<td><?php echo $economia['telefono_movil']; ?> </td>
					<td><?php echo $economia['gas']; ?></td>
					<td><?php echo $economia['educacion']; ?></td>
					<td><?php echo $economia['salud']; ?></td>
					<td><?php echo $economia['cable']; ?></td>
					<td><?php echo $economia['total_gastos']; ?> </td>
					<td><?php echo $economia['monto_adeudado']; ?> </td>
					<td><?php echo $economia['tipo_inversion']; ?></td>
					<td><?php echo $economia['otros_ingresos']; ?> </td>
					<td><?php echo $economia['detalle_otros_ingresos']; ?> </td>
				</tr>
			<?php } ?>	
		</tbody>
	</table>
</fieldset>

<fieldset>
	<legend>Consideraciones</legend>
	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
				<th>historia_social </th>
				<th>diagnostico_social </th>
				<th>acciones_realizar </th>
				<th>seguimiento_trabajo_social </th>
				<th>seguimiento_psicologia </th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $consideraciones as $consideracion) { ?>
				<tr>
					<td><?php echo $consideracion['historia_social'];?> </td>
					<td><?php echo $consideracion['diagnostico_social'];?> </td>
					<td><?php echo $consideracion['acciones_realizar'];?> </td>
					<td><?php echo $consideracion['seguimiento_trabajo_social'];?> </td>
					<td><?php echo $consideracion['seguimiento_psicologia'];?> </td>
				</tr>
			<?php } ?>	
		</tbody>
	</table>
</fieldset>

<fieldset>
	<legend>Familiares</legend>
	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
				<th>nombres</th>
				<th>edad</th>
				<th>parentesco</th>
				<th>grado-instruccion</th>
				<th>ocupacion</th>
				<th>ci</th>
				<th>ingresos</th>
				<th>caracteristicas-trabajo</th>
				<th>trab-zona</th>
				<th>trab-calle</th>
				<th>trab-nro</th>
				<th>trab-horarios</th>
				<th>trab-telf</th>
				<th>trab-institucion</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $familiares as $familiar) { ?>
				<tr>
					<td><?php echo $familiar['nombres']; ?></td>
					<td><?php echo $familiar['edad']; ?></td>
					<td><?php echo $familiar['parentesco']; ?></td>
					<td><?php echo $familiar['grado_instruccion']; ?></td>
					<td><?php echo $familiar['ocupacion']; ?></td>
					<td><?php echo $familiar['ci']; ?></td>
					<td><?php echo $familiar['ingresos']; ?></td>
					<td><?php echo $familiar['caracteristicas_trabajo_colegio']; ?></td>
					<td><?php echo $familiar['trab_zona']; ?></td>
					<td><?php echo $familiar['trab_calle']; ?></td>
					<td><?php echo $familiar['trab_nro']; ?></td>
					<td><?php echo $familiar['trab_horarios']; ?></td>
					<td><?php echo $familiar['trab_telf']; ?></td>
					<td><?php echo $familiar['trab_institucion']; ?></td>
				</tr>
			<?php } ?>	
		</tbody>
	</table>
</fieldset>

</div>



<script type="text/javascript" language="javascript">
$(document).ready(function() {

    $('.displayf').DataTable( {

    	initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        "dom": '<"top"i><"bottom"flp><"clear">',
        "paging": false,
    	"lengthMenu": [[-1], ["Todo"]],
        "language": {
            "lengthMenu": "Mostrar _MENU_ lineas por página",
            "zeroRecords": "No se encontraron resultados",
            "infoFiltered": "<br> Resultados filtrados: <b>_TOTAL_</b>",
            "info": "Total de registros:  _MAX_ ",
            "infoEmpty": "No se encontraron resultados",
            "search":  "Buscar:",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Último",
		        "next":       "Siguiente >",
		        "previous":   "< Previo"
		    },
		}

    });


} );
</script>