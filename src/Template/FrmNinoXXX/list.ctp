

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display" >
	<table class="table table-bordered table-hover display">
		<thead>
			<tr class="text-center">
				<th>#</th>
				<th>Ap. Paterno</th>
				<th>Ap. Materno</th>
				<th>Nombres</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ninos as $key => $nino) { ?>
			<tr>
				<td class="text-center"><?php echo $key+1;?></td>
				<td><?php echo ucfirst($nino['paterno']);?></td>
				<td><?php echo ucfirst($nino['materno']);?></td>
				<td><?php echo ucfirst($nino['nombres']);?></td>
				
				<td class="text-center"><b><?php echo $this->Html->link('Editar datos', ['controller'=>'FrmNino', 'action'=>'add', $nino['id_nino'] ]); ?></b></td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td></td><td></td><td></td><td></td><td></td>
			</tr>
		</tfoot>
	</table>
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