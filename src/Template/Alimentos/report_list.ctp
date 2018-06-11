
<?php //pr($data); ?>
<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

<div class="accordion" id="reports">
    <div class="panel panel-default">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Relacion de CI de acuerdo a los alimentos registrados (entregados)</div>
	    <div id="report-1" class="collapse panel-body">
	        <table class="table table-bordered table-hover" id="table-1" >
				<thead>
					<tr>
						<th>No.</th>
						<th>Nombre del Centro Infantil</th>
						<th>Fecha de entrega</th>
						<th>Alimento</th>
						<th>Cantidad entregada</th>
						<th>Unidad de medida</th>
						
					</tr>
				</thead>	

				<tbody>
				<?php //foreach ($data as $key => $list1) {
					for ($i=0; $i < count($data1[1]) ; $i++) { $index = $i; ?>
					<tr>
						<td><?php echo $index+1; ?></td>
						<td><?php					
							/*if ($i == 0){
								echo $data[$i]['nombre'];	
							} else
							if ( isset($data[$index+1]['nombre']) && ($data[$i]['nombre'] != $data[$index+1]['nombre']) ){*/
								echo $data[$i]['nombre']; 
							//} 
							?>
						</td>
						<td><?php echo $data[$i]['fecha_ingreso']; ?></td>
						<td><?php echo $data[$i]['alimento']; ?></td>
						<td><?php echo $data[$i]['cantidad_entregada']; ?></td>
						<td><?php echo $data[$i]['u_medida']; ?></td>
						
					</tr>
				<?php } ?>
				</tbody>
			</table>
	    </div>
    </div>
</div>
</div>
<!--[0] => Array
        (
            [nombre] => 14 De Septiembre
            [fecha_ingreso] => 2016-03-01
            [alimento] => Fideo
            [cantidad_entregada] => 5565.00
            [u_medida] => Gramos
        )-->
