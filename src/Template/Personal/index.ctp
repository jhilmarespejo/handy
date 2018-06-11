
<h3 class="title2 text-center"> Personal registrado </h3>


<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<br/>
	<table class="table table-responsive table-bordered display">
	<thead>
		<tr class='text-center'>
			<th>Centro Infantil</th>
			<th>Nombre completo</th>
			<th>Cargo</th>
			<th>Grupo etáreo</th>
			<th>Opciones</th>

		</tr>
	</thead>
		<tbody>
			<?php foreach ($data as $dat ): ?>
			<tr>
				<td><?php echo $dat['nombre']; ?></td>
				<td><?php echo $dat['nombres'].' '.$dat['paterno'].' '.$dat['materno']; ?></td>
				<td><?php echo $dat['cargo']; ?></td>
				<td><?php echo $dat['grupo_etareo']; ?></td>
				<td class="text-center"><b><?php echo $this->Html->link('Editar datos', ['controller'=>'Personal', 'action'=>'edit', $dat['id'] ]); ?></b>
				</td>
					
			</tr>
		<?php endforeach; ?>
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


<script type="text/javascript" language="javascript">
$(document).ready(function() {

    $('.display').DataTable( {
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
    	"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todo"]],
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