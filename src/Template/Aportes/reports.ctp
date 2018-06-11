<?php //echo $this->Html->css('jquery.dataTables.css');
//echo $this->Html->script('jquery.dataTables.js');
//echo $this->Html->script('jQuery.print.js');
?>

<h2 class="title2 text-center">Aportes económicos - Reportes</h2>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

<div class="accordion" id="reports">
    <div class='panel panel-default' id='area-1'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">Detalle de aportes e ingresos por Centro Infantil</div>
	    <div id="report-1" class="collapse panel-body display">
	    <p class="pull-right btn btn-info" id="print-area-1"><b><i class="fa fa-print"></i> Imprimir</b></p><br><br>
	        <table class="display table table-responsible table-bordered" id="table-1" >
				<thead>
					<tr>
						<th>No.</th>
						<th>Nombre del Centro Infantil</th>
						<th>Total niños</th>
						<th>Niños becados</th>
						<th>Aporte fijado (Bs.)</th>
						<th>Aporte completo</th>
						<th>Aporte parcial</th>
						<th>Sin aporte</th>
						<th>Total ingresos (Bs.)</th>
						<!--<th>Periodo</th>-->
					</tr>
				</thead>	

				<tbody>
				<?php 
					$tTninos=0; $tBecados=0; $tApoFij=0; $tApoCom=0; $tApoPar=0; $tSinApo=0; $tIngr=0; $tt=0;
					foreach ($data[1] as $key => $list1) { //pr($data[1]); ?>
				<tr>
					<td class="text-center"> <?php echo $key+1; ?></td>
					<td> <?php echo $list1['nombre']; ?></td>
					<td class="text-right"> <?php echo $list1['total_ninos']; $tTninos += $list1['total_ninos'];  ?></td>
					<td class="text-right"> <?php echo $list1['ninos_becados']; $tBecados += $list1['ninos_becados'];  ?></td>
					<td class="text-right"> <?php echo $list1['aporte_fijado']; $tApoFij += $list1['aporte_fijado'];  ?></td>
					<td class="text-right"> <?php echo $list1['aporte_completo']; $tApoCom += $list1['aporte_completo'];  ?></td>
					<td class="text-right"> <?php echo $list1['aporte_parcial']; $tApoPar += $list1['aporte_parcial'];  ?></td>
					<td class="text-right"> <?php echo $list1['sin_aporte']; $tSinApo += $list1['sin_aporte'];  ?></td>
					<td class="text-right"> <?php echo $list1['total_ingreso_periodo_actual']; $tIngr += $list1['total_ingreso_periodo_actual'];  ?></td>
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
						<td></td>
						<td></td>
					</tr>
					<tr class="strong-right">
						<td></td>
						<td>TOTAL</td>
						<td><?php echo $tTninos; ?></td>
						<td><?php echo $tBecados; ?></td>
						<td><?php echo $tApoFij; ?></td>
						<td><?php echo $tApoCom; ?></td>
						<td><?php echo $tApoPar; ?></td>
						<td><?php echo $tSinApo; ?></td>
						<td><?php echo $tIngr; ?></td>
					</tr>
				</tfoot>
			</table>
	    </div>
    </div>
    <!--<div class="panel panel-default">
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
	</div>-->
</div>
</div>

<script type="text/javascript" language="javascript">

  $('div.display table').DataTable({
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


</script>
