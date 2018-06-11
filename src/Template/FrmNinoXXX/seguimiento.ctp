 <?//php pr($consideraciones); ?>

<h2 class="title2 text-center"> Registros </h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<table class="table table-bordered table-hover display" id="records">
		<thead>
			<tr>
				<th>Usuario</th>
				<th>Fecha y hora</th>
				<th>Opciones</th>

			</tr>
		</thead>
		<body>
			<?php foreach($consideraciones as $consideracion) {?>
				<tr>
					<td><?php echo $consideracion['usuario']; ?></td>
					<td><?php echo $consideracion['fecha_hora']->i18nFormat(); ?></td>
					<td class="text-center"><b id ="lnk" ><?php echo $this->Html->link('Ver datos', ['controller'=>'FrmNino', 'action'=>'control', $consideracion['id_nino'] ]); ?></b></td>
				</tr>
			<?php } ?>
		</body>
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