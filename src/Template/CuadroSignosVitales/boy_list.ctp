<div style="border: 10px solid #fff; background: #fff;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display" >
	<table class="table table-bordered table-hover table-responsive display" id="table-escala">
		<thead class="text-center">
			<tr>
				<th>#</th>
				<th class="text-center">A. Paterno</th>
				<th class="text-center">A. Materno</th>
				<th class="text-center">Nombres</th>
				<th class="text-center" >Ver / Editar</th>
				<th class="text-center" >Retirado</th>

			</tr>
		</thead>
		<tbody id="tb-escala">
			<?php foreach ($datosnino as $key => $datonino) { ?>
			<tr>
				<td class="text-center">
					<span><?php echo 1 + $key; echo $this->Form->hidden("escala.$key.id_nino", ['value' => $datonino->id_nino]);?></span>
				</td>
				<td>
					<?php echo ucwords($datonino->paterno); ?>
				</td>
				<td>
					<?php echo ucwords($datonino->materno); ?>
				</td>
				<td>
					<?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']) .' '. ucwords($datonino->nombres), ['controller' => 'CuadroSignosVitales','action' => 'add', $datonino->id_nino], array('escape'=>false) ); ?>
				</td>

				<td  class="text-center"> 
						<?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-eye']).' Ver', ['controller' => 'xxx','action' => 'edit', $datonino->id_nino, ], array('escape'=>false, ) ); ?>
				</td>

				<td class="text-center">
					<?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-remove']).' Retirado', ['controller' => 'xxx','action' => 'removecim', $datonino->id_nino], array('escape'=>false) ); ?>
				</td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


<script type="text/javascript" charset="utf-8" async defer>
$(document).ready(function() {

    $('div.display table').DataTable( {


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
            
		}

    });
} );
</script>