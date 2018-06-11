<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3 class="title2 text-center">Personal - Reportes</h3>
	<div class="accordion" id="reports">
	    <div class="panel panel-default" id="area-1">
		    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">Número de personas registradas por cargo y grupo etáreo segun CI
		    </div>
		    <div id="report-1" class="collapse panel-body display">
		    	<span class="pull-right btn btn-info" id="print-area-8"><b><i class="fa fa-print"></i> Imprimir</b></span>
				<br><br>
		        <table class="table table-bordered tabble-hover display" id="table-1" >
				<thead>
					<tr class="inner-30">
						<th rowspan="2">No.</th>
						<th rowspan="2">Nombre del Centro Infantil</th>
						<th rowspan="1" colspan="3">Grupo Etareo</th>
						<th rowspan="1" colspan="3">Cargo</th>
						<th rowspan="2">TOTAL</th>
					</tr>
					<tr class="inner-30">
						<th>Lactantes</th>
						<th>Preinfantes</th>
						<th>Infantes</th>
						<th>Responsables</th>
						<th>Educadoras</th>
						<th>Manipuladora</th>
					</tr>
				</thead>	

				<tbody>
				<?php 
					$tLac=0; $tPre=0; $tInf=0; $tRes=0; $tEdu=0; $tMani=0; $tTot=0;
				foreach ($data[1] as $key => $list1) {?>
					<tr>
						<td class="text-center"><?php echo $key+1; ?></td>
						<td><?php echo $list1['nombre']; ?></td>
						<td class="text-right"><?php echo $list1['lact']; $tLac += $list1['lact'];; ?></td>
						<td class="text-right"><?php echo $list1['prei']; $tPre += $list1['prei'];; ?></td>
						<td class="text-right"><?php echo $list1['infa']; $tInf += $list1['infa'];; ?></td>
						<td class="text-right"><?php echo $list1['resp']; $tRes += $list1['resp'];; ?></td>
						<td class="text-right"><?php echo $list1['educ']; $tEdu += $list1['educ'];; ?></td>
						<td class="text-right"><?php echo $list1['mani']; $tMani += $list1['mani'];; ?></td>
						<td class="text-right"><b><?php echo $list1['tCargo']; $tTot += $list1['tCargo']; ?></b></td>
					</tr>
				<?php } ?>
				<tbody>
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
						<td><?php echo $tLac; ?></td>
						<td><?php echo $tPre; ?></td>
						<td><?php echo $tInf; ?></td>
						<td><?php echo $tRes; ?></td>
						<td><?php echo $tEdu; ?></td>
						<td><?php echo $tMani; ?></td>
						<td><?php echo $tTot; ?></td>
					</tr>
				</tfoot>
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