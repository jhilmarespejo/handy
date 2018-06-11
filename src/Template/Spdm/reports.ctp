<?//php echo $this->Html->css('jquery.dataTables.css');
//echo $this->Html->script('jquery.dataTables.js');
//echo $this->Html->script('jQuery.print.js');?>

<h2 class="title2 text-center">Seguimiento a los planes de Mejoramiento - Reportes</h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="accordion " id="reports" >
	    <div class="panel panel-default" id='area-1'>
		    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Relación de Centros Infantiles  de acuerdo al reporte del seguimiento al cumplimiento del Plan de Mejoramiento

		    </div>
		    <div id="report-1" class="collapse panel-body  display">
			    <?php if(isset($data[1][0]['nombre'])) {?>
			    <p class="pull-right btn btn-info" id="print-area-1"><b><i class="fa fa-print"></i> Imprimir</b></p>
			    <br><br>
			    <?php } ?>
		        <table class="display table table-responsive table-bordered" id="table-1" >
				<thead>
					<tr>
						<th>No.</th>
						<th>Nombre del Centro Infantil</th>
						<th>Apoyo de instancias</th>
						<th>Nivel aprobación</th>
						<th>Periodo de reunión para la verificación</th>
						<th>Cantidad miembros</th>
						<th>Reporte del comité</th>
						<th>¿Cómo se realiza el seguimiento?</th>
						<th>Dificultades</th>
						<th>Soluciones planteadas para resolver las dificultades</th>
						<!--<th>Periodo</th>-->
					</tr>
				</thead>	
				<tbody>
				<?php //pr($data[1]);exit; ?>
				<?php foreach ($data[1] as $key => $list1) { ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $list1['nombre']; ?></td>
						<td><?php echo $list1['apoyo_instancias']; ?></td>
						<td><?php echo $list1['nivel_aprobacion']; ?></td>
						<td><?php echo $list1['periodo_reunion_verificacion']; ?></td>
						<td class="text-center"><?php echo $list1['cantidad_miembros']; ?></td>
						<td><?php echo $list1['reporte_comite']; ?></td>
						<td><?php echo $list1['como_realiza_seguimiento']; ?></td>
						<td><?php echo $list1['dificultades']; ?></td>
						<td><?php echo $list1['solucion_dificultades']; ?></td>
												
					</tr>
				<?php } ?>
					
				</tbody>
				<tfoot>
					<tr class="filter-custom">
						<td></td><td></td><td></td><td></td><td></td>
						<td></td><td></td><td></td><td></td><td></td>
					</tr>
				</tfoot>
				</table>

		    </div>		    
		</div>
	</div>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
    	
	$('div.display table').DataTable( {
    	initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="col-lg-11"><option value=""></option></select>')
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

	//$('tfoot tr.filter-custom td select').addClass('');

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
});

</script>