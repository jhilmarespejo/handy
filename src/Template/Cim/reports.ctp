<?//php pr($data);?>
<!--
<div class="accordion" id="reports">
    <div class="panel panel-default">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">Question 1?</div>
	    <div id="report-1" class="collapse panel-body">
	        Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est.
	    </div>
    </div>
    <div class="panel panel-default">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-2" data-parent="#reports">Question 2?</div>
	    <div id="report-2" class="collapse panel-body">
	        Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est.
	    </div>
    </div>
    <div class="panel panel-default">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-3" data-parent="#reports">Question 3?</div>
	    <div id="report-3" class="collapse panel-body">
	        Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est.
	    </div>
	</div>
</div>-->
<!--<div class="text-left">
	<?//php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-reply']).' Volver ', ['controller' => 'Cim', 'action' => 'index'], array('escape'=>false, 'class' => 'alert-warning') ); ?>&nbsp;&nbsp;&nbsp;
	<?//php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text']).' Nuevo registro ', ['controller' => 'Cim','action' => 'add'], array('escape'=>false, 'class' => 'alert-warning') ); ?>
</div><hr>-->
<br>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3 class="title2 text-center">Centros Infantiles - Reportes</h3>
<div class="accordion" id="reports">
    <div class="panel panel-default" id="area-1">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Relación de los Centros Infantiles de acuerdo a sus datos generales</div>
	    <div id="report-1" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-1"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	        <table class="display table table-responsive table-bordered" id="table-1" >
				<thead>
					<tr>
						<th>No.</th>
						<th>Nombre del Centro Infantil</th>
						<th>Fecha de Inauguracion</th>
						<th>Nombre del Responsable</th>
						<th>Zona de Registro</th>
						<th>Distrito de Registro</th>
						<th>Cobertura Registrada</th>
					</tr>
				</thead>	

				<tbody>
				<?php $total = 0; foreach ($data[1] as $key => $list1) {?>
					<tr>
						<td class="text-center"><?php echo $key+1; ?></td>
						<td><?php echo $list1['nombre']; ?></td>
						<td><?php echo $list1['fecha_inauguracion']; ?></td>
						<td><?php echo $list1['responsable']; ?></td>
						<td><?php echo $list1['zona']; ?></td>
						<td><?php echo $list1['distrito']; ?></td>
						<td class="text-right"><?php echo $list1['numero_ninos'].' Niños'; $total += $list1['numero_ninos']  ?></td>
					</tr>
				<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="strong-right">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>COBERTURA TOTAL</td>
						<td class="text-right"><?php echo $total .' Niños';?></td>
					</tr>
				</tfoot>
			</table>
	    </div>
    </div>
    <div class="panel panel-default"  id="area-2">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-2" data-parent="#reports">2. Cantidad de CIM de acuerdo al tipo de administración registrado</div>
	    <div id="report-2" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-2"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	        <table class="display table table-responsive table-bordered" id="table-2">
				<thead>
					<tr>
						<th></th>
						<?php foreach ($data[2] as $key => $list2) {?>
							<th><?php echo $list2['administracion']; ?></th>
						<?php } ?>
						<th>Total</th>
					</tr>
					
				</thead>
				<tbody>
					<tr>
						<td><b>CIM</b></td>
						<?php $total =0; foreach ($data[2] as $key => $list2) {?>
							<td><?php echo $list2['COUNT(*)']; $total  +=  $list2['COUNT(*)']; ?></td>
						<?php } ?>
						<td><b><?php echo $total; ?></b></td>			
					</tr>
					<tr>
						<td><b>% de Participación</b></td>
						<?php $totalGen=0; foreach ($data[2] as $key => $list2) {?>
							<td><?php echo ((round(($list2['COUNT(*)']/$total), 2))*100)." %"; $totalGen += ($list2['COUNT(*)']/$total) ?></td>
						<?php } ?>
						<td><?php echo ($totalGen*100)." %"; ?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tfoot>
			</table>
	    </div>
    </div>
    <div class="panel panel-default"  id="area-3">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-3" data-parent="#reports">3. Cantidad de CIM de acuerdo a la pertenencia que ha sido registrado</div>
	    <div id="report-3" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-3"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
			<table class="display table table-responsive table-bordered" id="table-3">
				<thead>
					<tr>
						<th></th>
						<?php foreach ($data[3] as $key => $list3) {?>
							<th><?php echo $list3['infraestructura_pertenece']; ?></th>
						<?php } ?>
						<th>Total</th>
					</tr>
					
				</thead>
				<tbody>
					<tr>
						<td><b>CIM</b></td>
						<?php $total =0; foreach ($data[3] as $key => $list3) {?>
							<td><?php echo $list3['COUNT(*)']; $total  +=  $list3['COUNT(*)']; ?></td>
						<?php } ?>
						<td><b><?php echo $total; ?></b></td>			
					</tr>
					<tr>
						<td><b>% de Participación</b></td>
						<?php $totalGen=0; foreach ($data[3] as $key => $list3) {?>
							<td><?php echo ((round(($list3['COUNT(*)']/$total), 3))*100)." %"; $totalGen += ($list2['COUNT(*)']/$total) ?></td>
						<?php } ?>
						<td><?php echo ($totalGen*100)." %"; ?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tfoot>
			</table>
	    </div>
	</div>
	<div class="panel panel-default"  id="area-4">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-4" data-parent="#reports">4. Cantidad de ambientes registrados por Centro Infantil</div>
	    <div id="report-4" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-4"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	        <table class="display table table-responsive table-bordered" id="table-4 ">
	        	<thead>
	        		<tr>
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Cocina</th>
	        			<th>Baño</th>
	        			<th>Patio</th>
	        			<th>Muro perimetral</th>
	        			<th>Almacén</th>
	        			<th>Comedor</th>
	        			<th>Sala de psicomotricidad</th>
	        			<th>Otro ambiente</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $totalOtro_ambiente = 0; $tCoc=0; $tBan=0; $tPat=0; $tMur=0; $tAlm=0; $tCom=0; $tSal=0;
	        	foreach ($data[4] as $key => $list4) {
	        		if($list4['nombre'] != 'TOTAL'){ ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1; ?></td>
	        			<td><?php echo $list4['nombre']; ?></td>
	        			<td class="text-right"><?php echo $list4['cocina']; $tCoc+=$list4['cocina'] ;?></td>
	        			<td class="text-right"><?php echo $list4['bano']; $tBan+=$list4['bano'] ;?></td>
	        			<td class="text-right"><?php echo $list4['patio']; $tPat+=$list4['patio'] ;?></td>
	        			<td class="text-right"><?php echo $list4['muro_perimetral'];$tMur+= $list4['muro_perimetral']; ?></td>
	        			<td class="text-right"><?php echo $list4['almacen']; $tAlm+=$list4['almacen'] ;?></td>
	        			<td class="text-right"><?php echo $list4['comedor']; $tCom+=$list4['comedor'] ;?></td>
	        			<td class="text-right"><?php echo $list4['sala_psicomotricidad']; $tSal+=$list4['sala_psicomotricidad'] ;?></td>
	        			<td><?php if( $list4['otro_ambiente'] != ''){echo $list4['otro_ambiente']; $totalOtro_ambiente ++;
							} //if($list4['nombre'] == 'TOTAL'){echo $totalOtro_ambiente; }?>
						</td>
	        		</tr>
	        	<?php } }?>
	        	</tbody>
	        	<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td><td></td>
					</tr>
					<tr class="strong-right">
						<td></td>
						<td>TOTAL</td>
						<td><?php echo $tCoc;?></td>
						<td><?php echo $tBan;?></td>
						<td><?php echo $tPat;?></td>
						<td><?php echo $tMur;?></td>
						<td><?php echo $tAlm;?></td>
						<td><?php echo $tCom;?></td>
						<td><?php echo $tSal;?></td>
						<td><?php echo $totalOtro_ambiente;?></td>
					</tr>
				</tfoot>
	        </table>
	    </div>
    </div>

    <div class="panel panel-default"  id="area-5">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-5" data-parent="#reports">5. Cantidad de Centros Infantiles de acuerdo a los servicios básicos registrados</div>
	    <div id="report-5" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-5"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	        <table class="display table table-responsive table-bordered" id="table-5">
	        	<thead>
	        		<tr class="inner-30">
	        			<th class="text-center" rowspan="2" >Servicio</th>
	        			<th class="text-center" colspan="3">Cantidades</th>
	        			<th class="text-center" colspan="3">Porcentage</th>
	        		</tr>
	        		<tr class="inner-30">
	        			<th class="text-center">Si</th>
	        			<th class="text-center">No</th>
	        			<th class="text-center">Total</th>
	        			<th class="text-center">Si (%)</th>
	        			<th class="text-center">No (%)</th>
	        			<th class="text-center">Total (%)</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php foreach ($data[5] as $key => $list5) { 
	        		if($list5['Agua'] != 'TOTAL'){ ?>
	        		<tr class="inner-30">
	        			<td class="text-right"><?php echo $list5['Agua'];?></td>
	        			<td class="text-right"><?php echo $list5['Si'];?></td>
	        			<td class="text-right"><?php echo $list5['No'];?></td>
	        			<td class="text-right"><b><?php echo $list5['Total'];?></b></td>
	        		
	        			<td class="text-right">
	        			<?php
	        				if($list5['Si']>0){
	        					echo $tSi = round(($list5['Si']/$list5['Total'])*100, 2).' %';
	        				}elseif ($list5['Si']==0) {
	        					echo '0';	
	        				}
	        			?></td>
	        			<td class="text-right"><?php 
	        				if($list5['No']>0){
	        					echo $tNo = round(($list5['No']/$list5['Total'])*100, 2).' %';
	        				}elseif ($list5['No']==0) {
	        					echo '0';	
	        				}
	        			?></td>
	        			<td class="text-right"><b><?php
	        				if( $list5['No'] > 0 && $list5['Si'] > 0 ){
	        					echo round( $tSi + $tNo).' %';
	        				} elseif ($list5['No'] == 0 && $list5['Si'] == 0 ) {

	        				}
	        			?></b></td>
	        		</tr>
	        	<?php }} ?>
	        	</tbody>
	        	<tfoot>
	        		<tr>
	        			<td></td><td></td><td></td><td></td>
	        			<td></td><td></td><td></td>
	        		</tr>
	        		<!--<tr class="strong-right">
	        			<td><?//php echo $data[5][count($data[5])-1]['Agua']; ?></td>
	        			<td><?//php echo $data[5][count($data[5])-1]['Si']; ?></td>
	        			<td><?//php echo $data[5][count($data[5])-1]['No']; ?></td>
	        			<td><?//php echo $data[5][count($data[5])-1]['Total']; ?></td>
	        			<td></td>
	        			<td></td>
	        			<td></td>
	        		</tr>-->
	        	</tfoot>
	        </table>
	    </div>
    </div>

    <div class="panel panel-default"  id="area-6">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-6" data-parent="#reports">6. Cantidad de familias beneficiarias por Centro Infantil</div>
	    <div id="report-6" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-6"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	        <table class="display table table-responsive table-bordered" id="table-6 ">
	        	<thead>
	        		<tr >
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Numero de Familias Beneficiarias</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tBen=0; foreach ($data[6] as $key => $list6) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1; ?></td>
	        			<td><?php echo $list6['nombre']; ?></td>
	        			<td class="text-right"><?php echo $list6['familias_beneficiadas']; $tBen+=$list6['familias_beneficiadas']; ?></td>
	        		</tr>
	        	<?php } ?>
	        	</tbody>
	        	<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>	
					<tr class="strong-right">
						<td></td>
						<td>TOTAL</td>
						<td><?php echo $tBen;?></td>
					</tr>        		
	        	</tfoot>
	        </table>	    
	    </div>
    </div>
    <div class="panel panel-default"  id="area-7">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-7" data-parent="#reports">7. Cantidad de ninos becados por Centro Infantil</div>
	    <div id="report-7" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-7"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	        <table class="display table table-responsive table-bordered" id="table-7">
	        	<thead>
	        		<tr>
	        			<th class="text-center">#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Número de Niños becados</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tNben=0; foreach ($data[7] as $key => $list7) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1; ?></td>
	        			<td><?php echo $list7['nombre']; ?></td>
	        			<td class="text-right"><?php echo $list7['ninos_becados']; $tNben+=$list7['ninos_becados']; ?></td>
	       			</tr>
	        	<?php } ?>
	        	</tbody>
	        	<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>	
					<tr class="strong-right">
						<td></td>
						<td>TOTAL</td>
						<td><?php echo $tNben;?></td>
					</tr>        		
	        	</tfoot>
	        </table>
	    </div>
    </div>
    <div class="panel panel-default"  id="area-8">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-8" data-parent="#reports">8. Relacion de Centro Infantil de acuerdo a la fecha y motivo de cierre</div>
	    <div id="report-8" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-8"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<br><br>
	         <table class="display table table-responsive table-bordered" id="table-8">
	        	<thead>
	        		<tr>
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Fecha de cierre</th>
	        			<th>Motivo de cierre</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $total=0;  foreach ($data[8] as $key => $list8) { ?>
	        		<tr>
	        			<td><?php echo $key+1; ?></td>
	        			<td><?php echo $list8['nombre']; ?></td>
	        			<td><?php echo $list8['fecha_cierre']; ?></td>
	        			<td><?php echo $list8['motivo_cierre'];  $total++?></td>
	        		</tr>
	        	<?php } ?>
	        	</tbody>
	        	<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>	
					<tr class="strong-right">
						<td></td>
						<td>TOTAL</td>
						<td><?php echo $total;?></td>
						<td></td>
					</tr>        		
	        	</tfoot>
	        </table>
	    </div>
    </div>
</div>


<script type="text/javascript" language="javascript">
$(document).ready(function() {

    $('div.display table').DataTable( {
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
    	"lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todo"]],
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

$("#print-area-1").click(function (){
		print_area('area-1');
	});
	$("#print-area-2").click(function (){
		print_area('area-2');
	});
	$("#print-area-3").click(function (){
		print_area('area-3');
	});
	$("#print-area-4").click(function (){
		print_area('area-4');
	});
	$("#print-area-5").click(function (){
		print_area('area-5');
	});
	$("#print-area-6").click(function (){
		print_area('area-6');
	});
	$("#print-area-7").click(function (){
		print_area('area-7');
	});
	$("#print-area-8").click(function (){
		print_area('area-8');
	});
	

	function print_area(area){
		$("div#"+area).print({
			addGlobalStyles : true,
			stylesheet : '/manitos/css/bootstrap.css',
			rejectWindow : true,
			noPrintSelector : "#print-"+area,
			iframe : true,
			append : null,
			prepend : null
		});
	}
} );
</script>