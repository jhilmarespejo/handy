<?/*php echo $this->Html->css('jquery.dataTables.css');
echo $this->Html->script('jquery.dataTables.js');
echo $this->Html->script('jQuery.print.js');*/
?>
<style type="text/css" media="screen">
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }	
</style>
<h2 class="title2 text-center">Comité de Calidad - Reportes</h2>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

<div class="accordion" id="reports">
    <div class="panel panel-default" id='area-1'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Relación de Centros Infantiles que han conformado su Comité de Calidad y Protección Infantil</div>
	    <div id="report-1" class="collapse panel-body display">
	    	<p class="pull-right btn btn-info" id="print-area-1"><b><i class="fa fa-print"></i> Imprimir</b></p><br>
	        <table class="display table table-bordered" id="table-1" >
				<thead>
					
					<tr>
						<th>No.</th>
						<th>Nombre del Centro Infantil</th>
						<th>¿Comité de calidad conformado?</th>
						<th>Motivo por el cual no se conformó el Comité</th>
						<th>Fecha de conformación del Comité</th>
					</tr>
				</thead>	
				<tbody>
				<?php $tCdc=0;$tScdc=0; foreach ($data[1] as $key => $list1) { 
					//for ($i=0; $i < count($data[1]) ; $i++) { $index = $i; ?>
					<tr>

						<td class="text-center"><?php echo $key+1; ?></td>
						<td><?php echo $list1['nombre']; ?></td>
						<td class="text-center"><?php echo $list1['reunion_eleccion_cdc']; 
							if($list1['reunion_eleccion_cdc'] == 'Si'){
								$tCdc++;
							} else {
								$tScdc++;
							}
						?></td>
						<td class="text-center"><?php echo $list1['detalle_reunion']; ?></td>
						<td class="text-center"><?php echo $list1['fecha_conformacion_cdc']; ?></td>

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
					</tr>					
				</tfoot>
			</table>
	    </div>
    </div>
    <div class="panel panel-default" id='area-2'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-2" data-parent="#reports">2. Relación de personas que forman parte del Comité de Calidad y Protección Infantil por Centro Integrado</div>
	    <div id="report-2" class="collapse panel-body display">
	    	<p class="pull-right btn btn-info" id="print-area-2"><b><i class="fa fa-print"></i> Imprimir</b></p><br><br>
	        <table class="display table table-bordered table-responsive" id="table-2" >
				<thead>
					
					<tr>
						<th>No.</th>
						<th>Nombre del Centro Infantil</th>
						<th>Apellidos del Integrante</th>
						<th>Nombres del Integrante</th>
					</tr>
				</thead>	
				<tbody>
				<?php $tCdc=0;$tScdc=0; foreach ($data[2] as $key => $list2) { 
					//for ($i=0; $i < count($data[1]) ; $i++) { $index = $i; ?>
					<tr>
						<td class="text-center"><?php echo $key+1; ?></td>
						<td><?php echo $list2['nombre']; ?></td>
						<td><?php echo ucfirst($list2['apellidos']); ?></td>
						<td><?php echo ucfirst($list2['nombres']); ?></td>
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
				</tfoot>
			</table>
	    </div>
    </div>
</div>
</div>

<script type="text/javascript" language="javascript" class="init">
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