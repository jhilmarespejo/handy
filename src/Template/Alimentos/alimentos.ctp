<?php echo $this->Form->create('', ['url' => ['action' => 'saldos']]); ?>

<br>
<?//php pr($alimentos); ?>
<?php if($alimentos){ ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display" >
	<table class="table table-bordered table-hover display">
		<thead>
			<tr>
				<th class="text-center">#</th>
				<th class="text-center">Fuente de suministro</th>
				<th class="text-center">Alimento</th>
				<th class="text-center">Unidad de manejo</th>
				<th class="text-center">Saldo hasta el 11 de Mayo</th>
				<th class="text-center">Saldo actual</th>
				<th class="text-center">Fecha de vencimiento</th>
			</tr>
			
		</thead>
		<tbody>
			<?php foreach ($alimentos as $key => $alimento) { ?>
		<tr>
			<td><?php echo $key+1;?></td>
			<td><?php echo $alimento->fuente_suministro; echo $this->Form->hidden("Saldoalimentos.$key.fuente_suministro", ['value' => $alimento->fuente_suministro ]); ?></td>
			<td><?php echo $alimento->alimento; echo $this->Form->hidden("Saldoalimentos.$key.alimento", ['value' => $alimento->alimento ]);  ?></td>
			<td><?php echo $alimento->u_medida;  echo $this->Form->hidden("Saldoalimentos.$key.u_medida", ['value' => $alimento->u_medida ]); ?></td>
			<td><?php echo $alimento->saldo; ?></td>
			<td><?php echo $this->Form->input("Saldoalimentos.$key.saldo", ['label' => false, 'class'=>'', 'type' => 'text', 'value' => $alimento->saldo] ); ?></td>
			<td><?php echo $alimento->vencimiento;?></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</dir>
	
<div class="text-center">
	<?php echo $this->Form->button(__('Guardar datos'), ['class'=>'btn btn-save btn-lg']);
		echo $this->Form->end(); ?>
</div>
<?php } else {echo '<br><br><p class="alert-warning text-center">No se econtraron resultados,<br>seleccione los datos exactos.</p>';} ?>



<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('div.display table').DataTable( {
t    	initComplete: function () {
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