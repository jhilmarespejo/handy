
<h2 class="title2 text-center">Bienes - Reportes</h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="accordion " id="reports" >
	    <div class="panel panel-default" id='area-1'>
		    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Relación de niños de acuerdo a los dias asistidos al Centro por Centro Infantil
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
						<th>Sala</th>
						<th>Código</th>
						<th>Fuente</th>
						<th>Detalle</th>
						<th>Cantidad</th>
						<th>Estado</th>
						<!--<th>Periodo</th>-->
					</tr>
				</thead>	
				<tbody>
				<?php //pr($data[1]);exit; ?>
				<?php foreach ($data[1] as $key => $list1) { ?>
					<tr>
						<td class="text-center"><?php echo $key+1; ?></td>
						<td><?php echo $list1['nombre']; ?> 
						<td><?php echo $list1['sala']; ?>
						<td><?php echo $list1['codigo']; ?>
						<td><?php echo $list1['fuente']; ?>
						<td><?php echo ucfirst($list1['detalle']); ?>
						<td class="text-right"><?php echo $list1['cantidad']; ?>
						<td class="text-center"><?php echo $list1['estado']; ?>
					</tr>
				<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td></td><td></td><td></td>
						<td></td><td></td><td></td>
						<td></td><td>
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
	
	$("#print-area-1").click(function (){
		print_area('area-1');
	});
	/*$("#print-area-2").click(function (){
		print_area('area-2');
	});
	$("#print-area-3").click(function (){
		print_area('area-3');
	});
	$("#print-area-4").click(function (){
		print_area('area-4');
	});*/
});

</script>