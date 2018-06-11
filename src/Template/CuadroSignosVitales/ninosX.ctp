<?php echo $this->Html->script('custom.js'); ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display" >
	<table class="table table-bordered table-hover display" id="general_data">
		<thead>
			<tr class="text-center">
				<th>#</th>
                <th>Ap. Paterno</th>
                <th>Ap. Materno</th>
				<th>Nombres</th>
				<th>Edición de datos</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ninos as $key => $nino) { ?>
			<tr>
				<?php echo $this->Form->hidden('id_nino', ['value' =>  $nino['id_nino'], 'id'=>'nino' ]); ?>
				<td class="text-center"><?php echo $key+1;?></td>
                <td><?php echo ucfirst($nino['paterno']);?></td>
                <td><?php echo ucfirst($nino['materno']);?></td>
				<td><?php echo ucfirst($nino['nombres']);?></td>
				<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Escala Abreviada', 'value' => 'Escala Abreviada'], [ 'text' => 'Estado Nutricional', 'value' =>'Estado Nutricional'], [ 'text' => 'Suplementos Alimenticios', 'value' => 'Suplementos Alimenticios'], [ 'text' => 'Asistencia', 'value' =>'Asistencia'], [ 'text' => 'Asistencia del Personal', 'value' => 'Asistencia del Personal'], [ 'text' => 'Protección', 'value' => 'Proteccion']];?>
				<td class="text-center"><b></b ><?php echo $this->Form->select('action', $options, ['class'=>'', 'id'=>'action-edit']);  ?></td>
			</tr>
			<?php }?>
		</tbody>
		<tfoot>
			<tr>
				<td></td><td></td><td></td><td></td>
			</tr>
		</tfoot>
	</table>
    
    <div id="datos"></div>
</div>




<script type="text/javascript" language="javascript">
$('table#general_data').each(function(index, el) {
    $('select#action-edit').change(function(event) {
        var data = [$(this).val(), $(this).parents('td').siblings('input#nino').val() ];
        console.log(data);
        $.ajax({
            type: "POST",
            url: "CuadroSignosVitales/actions",
            data: {data},
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
                $('#loading').addClass('hidden')
                $('#datos').html(data);
            },
        });
        return false;
    });
});
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
	

    	

} );
</script>