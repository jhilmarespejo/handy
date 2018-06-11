<?php echo $this->Html->css('jquery.dataTables.css');
echo $this->Html->script('jquery.dataTables.js');
echo $this->Html->script('jQuery.print.js');?>

<h2 class="title2 text-center">Modelo de Calidad - Reportes</h2>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

<div class="accordion " id="reports" >
    <div class="panel panel-default" id='area-1'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Relación de Centros Infantiles por ámbito Institucional e indicadores
	    </div>
	    <div id="report-1" class="collapse panel-body display">
		    <?php if(isset($data[1][0]['nombre'])) {?>

		    <span class="pull-right btn btn-info" id="print-area-1"><b><i class="fa fa-print"></i> Imprimir</b></span>

		    <span style="margin-right: 40px;" class="btn btn-warning pull-right" data-toggle="modal" data-target="#infoInsModal">
			  <b><i class="fa fa-info-circle"></i> Detalles</b>
			</span>

		    <br><br>
		    <?php } ?>
	        <table class="display table table-responsive table-bordered" id="table-1" >
			<thead>
			<!--<caption> Diagnostico Ambito Institucional</caption>-->
				<tr>
					<th>Nombre del Centro Infantil</th>
					<th title="El Centro cuenta con un Proyecto Educativo">Ind. 1</th>
					<th title="El Centro articula y organiza su trabajo educativo, administrativo y nutricional en base a planes de trabajo semanales y bimestrales establecidos">Ind. 2</th>
					<th title="El Centro cuenta con un sistema de evaluación de calidad  que responde al sistema de calidad municipal">Ind. 3</th>
					<th title="El Centro desarrolla planes y procesos de inducción para las educadoras y el personal de servicio en base a las herramientas del municipio">Ind. 4</th>
					<th title="El centro promueve  comunicación asertiva y buenas relaciones humanas">Ind. 5</th>
					<th title="El centro promueve la participación en procesos de formación  y actualización para el personal">Ind. 6</th>
					<th title="El Centro genera espacios de aprendizaje entre las familias y el personal del centro">Ind. 7</th>
					<th title="El Centro esta equipado con mobiliario, material e insumos acorde al  programa educativo y a las necesidades de desarrollo de las niñas y niños">Ind. 8</th>
					<th title="El Centro cuenta con ambientes  de descanso, administrativos, de servicio (cocina, comedor, baños y depósito) y salas de actividades">Ind. 9</th>
					<th title="En el Centro se establecen y cumplen acciones para mantener orden  limpieza, cuidado y mantenimiento de la infraestructura, equipamiento y materiales educativos">Ind. 10</th>
					<th title="El Centro cuenta con un plan de gestión de riesgos y respuestas a situaciones de emergencia">Ind. 11</th>
					<th>Promedio General</th>
					<th>Promedio Porcentual</th>
				</tr>
			</thead>

			<tbody>
			<?php $in1_5=0;$in1_10=0;$in1_15=0;$in1_20=0; //pr($data[1]); ?>
			<?php foreach ($data[1] as $key => $list1) { ?>
				<tr>
					<td><?php echo $list1['nombre']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_1']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_2']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_3']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_4']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_5']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_6']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_7']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_8']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_9']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_10']; ?></td>	
					<td class="text-right"><?php echo $list1['institucional_11']; ?></td>	
					<td class="text-right"><?php echo $list1['ins_prom_general']; ?></td>	
					<td class="text-right"><?php echo $list1['ins_prom_porcentual'].' %'; ?></td>	
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
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
			</table>
	    </div>		    
	</div>


	<div class="panel panel-default" id='area-2'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-2" data-parent="#reports">2. Relación de Centros Infantiles por ámbito Pedagógico e indicadores
	    </div>
	    <div id="report-2" class="collapse panel-body  display">
		    <?php if(isset($data[1][0]['nombre'])) {?>
		    <span class="pull-right btn btn-info" id="print-area-2"><b><i class="fa fa-print"></i> Imprimir</b></span>
		     <span style="margin-right: 40px;" class="btn btn-warning pull-right" data-toggle="modal" data-target="#infoPedModal">
			  <b><i class="fa fa-info-circle"></i> Detalles</b>
			</span>

		    <br><br>
		    <?php } ?>
	        <table class="display table table-responsive table-bordered" id="table-2" >
			<thead>
			<!--<caption> Diagnostico Ambito Institucional</caption>-->
				<tr>
					<th>Nombre del Centro Infantil</th>
					<th title="El Centro desarrolla programas de educación en valores sociocomunitarios y prácticas de Buen Trato">Ind. 1</th>
					<th title="El Centro integra a niñas y niños con discapacidades, talento extraordinario y rezago en el desarrollo, brindándoles afectividad a través de muestras de cariño, amor y aceptación">Ind. 2</th>
					<th title="En el Centro se respeta y fortalece las expresiones afectivas y las creencias espirituales, familiares y comunitarias">Ind. 3</th>
					<th title="Se rescata las expresiones de afectividad de la familia practicadas en el cuidado de las niñas y niños e incorporan en el Centro.">Ind. 4</th>
					<th title="En el centro se respeta, fortalece, desarrolla los usos y costumbres culturales de crianza familiares y comunitarias (alimentación, salud, educación, protección, apego y desapego.)">Ind. 5</th>
					<th title="En el Centro se utiliza la lengua materna y se inicia la incorporación de una segunda lengua">Ind. 6</th>
					<th title="El Centro infantil verifica que todas las niñas y niños asistentes cuenten con el registro de nacimiento y promueve el trámite de cédula de identidad ">Ind. 7</th>
					<th title="El Centro promueve encuentros interculturales en los que se expresan costumbres, tradiciones, arte, música y otros">Ind. 8</th>
					<th title="El Centro fortalece hábitos de higiene, nutrición, descanso y cuidado de la salud en las niñas y niños y su entorno promoviendo su práctica en las familias">Ind. 9</th>
					<th title="El Centro toma acciones de prevención de referidos a la salud de las niñas y niños">Ind. 10</th>
					<th title="En el Centro, las niñas y los niños observan, exploran y experimentan a  través de sus sentidos, su propio cuerpo asimismo, a la madre tierra y al cosmos">Ind. 11</th>
					<th title="El centro facilita espacios para el desarrollo progresivo de los  movimientos corporales de las niñas y niños y su relación con el espacio">Ind. 12</th>
					<th title="En el Centro se promueve el desarrollo del lenguaje a través de diferentes formas de expresión  y comunicación de su cultura (oral, corporal y artística)">Ind. 13</th>
					<th title="El Centro cuenta con un sistema de evaluación del desarrollo integral de las niñas y niños">Ind. 14</th>
					<th>Promedio General</th>
					<th>Promedio Porcentual</th>
				</tr>
			</thead>
			<?php $in1_5=0;$in1_10=0;$in1_15=0;$in1_20=0; //pr($data[1]); ?>
			<?php foreach ($data[1] as $key => $list2) { ?>
				<tr>
					<td><?php echo $list2['nombre']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_1']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_2']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_3']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_4']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_5']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_6']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_7']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_8']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_9']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_10']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_11']; ?></td>	
					<td class="text-right"><?php echo $list2['pedagogico_12']; ?></td>
					<td class="text-right"><?php echo $list2['pedagogico_13']; ?></td>
					<td class="text-right"><?php echo $list2['pedagogico_14']; ?></td>
					<td class="text-right"><?php echo $list2['ped_prom_general']; ?></td>
					<td class="text-right"><?php echo $list2['ped_prom_porcentual'].' %'; ?></td>
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
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
			</table>
	    </div>		    
	</div>

	<div class="panel panel-default" id='area-3'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-3" data-parent="#reports">3. Relación de Centros Infantiles por ámbito Comunidad e indicadores
	    </div>
	    <div id="report-3" class="collapse panel-body  display">
		    <?php if(isset($data[1][0]['nombre'])) {?>
		    <span class="pull-right btn btn-info" id="print-area-3"><b><i class="fa fa-print"></i> Imprimir</b></span>
		    <span style="margin-right: 40px;" class="btn btn-warning pull-right" data-toggle="modal" data-target="#infoComModal">
			  <b><i class="fa fa-info-circle"></i> Detalles</b>
			</span>
		    <br><br>
		    <?php } ?>
	        <table class="display table table-responsive table-bordered" id="table-3" >
			<thead>
			<!--<caption> Diagnostico Ambito Institucional</caption>-->
				<tr>
					<th>Nombre del Centro Infantil</th>
					<th title="El Centro tiene un proceso de comunicación permanente y periódico  con la familia respecto al desarrollo integral  de las niñas y niños">Ind. 1</th>
					<th title="El centro coordina con las organizaciones de la comunidad, sobre acciones y servicios que prestan, promovidas para el desarrollo integral de las niñas y niños.">Ind. 2</th>
					<th title="El Centro  desarrolla procesos de transición y  adaptación dirigidos a la familia y a las niñas y niños para su ingreso al centros">Ind. 3</th>
					<th title="El centro prepara a  la familia y a la niña o niño para su ingreso al ambito escolar">Ind. 4</th>
					<th title="El centro establece mecanismos para que las familias asistan a los servicios de control de salud SSI (Servicio e Salud Integral)">Ind. 5</th>
					<th title="El Centro rescata saberes y conocimientos sobre las propiedades de la medicina natural que las familias practican">Ind. 6</th>
					<th title="El centro establece una red de vigilancia y proteccion a las niñas y niños y las mujeres embarazadas en coordinacion con las defensorias de la niñez y adolescencia">Ind. 7</th>
					<th title="El Centro difunde la importancia y obligatoriedad  de la lactancia materna a menores de 6 meses y la promueven en las familias y la comunidad">Ind. 8</th>
					<th title="El Centro propone y gestiona con la comunidad campañas de promoción de alimentos nutritivos. ">Ind. 9</th>
					<th>Promedio General</th>
					<th>Promedio Porcentual</th>
			jpatzi1234aagmail.com
					<!--<th>Periodo</th>-->
				</tr>
			</thead>
			<?php $in1_5=0;$in1_10=0;$in1_15=0;$in1_20=0; //pr($data[1]); ?>
			<?php foreach ($data[1] as $key => $list3) { ?>
				<tr>
					<td><?php echo $list3['nombre']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_1']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_2']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_3']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_4']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_5']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_6']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_7']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_8']; ?></td>	
					<td  class="text-right"><?php echo $list3['comunidad_9']; ?></td>	
					<td  class="text-right"><?php echo $list3['com_prom_general']; ?>
					<td  class="text-right"><?php echo $list3['com_prom_porcentual'].' %'; ?>
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
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
			</table>
	    </div>		    
	</div>

	<div class="panel panel-default" id='area-4'>
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-4" data-parent="#reports">4. Relación de Centros Infantiles con los resultados totales alcanzados 
	    </div>
	    <div id="report-4" class="collapse panel-body  display">
		    <?php if(isset($data[1][0]['nombre'])) {?>
		    <span class="pull-right btn btn-info" id="print-area-4"><b><i class="fa fa-print"></i> Imprimir</b></span>
		    <br><br>
		    <?php } ?>
	        <table class="display table table-responsive table-bordered" id="table-4" >
			<thead>
			<!--<caption> Diagnostico Ambito Institucional</caption>-->
				<tr>
					<th>Nombre del Centro Infantil</th>
					<th>INSTITUCIONAL</th>
					<th>PEDAGÓGICO</th>
					<th>COMUNIDAD</th>
					<th>TOTAL</th>
				</tr>
			</thead>
			<?php foreach ($data[1] as $key => $list4) { ?>
				<tr>
					<td><?php echo $list4['nombre']; ?></td>	
					<td class="text-right"><?php echo $list4['total_institucional']; ?></td>
					<td class="text-right"><?php echo $list4['total_pedagogico']; ?></td>
					<td class="text-right"><?php echo $list4['total_comunidad']; ?></td>
					<td class="text-right"><?php echo $list4['total']; ?></td>
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
				</tr>
			</tfoot>
			</table>
	    </div>		    
	</div>
</div>

</div>



<!-- Modal -->
<div class="modal fade" id="infoInsModal" tabindex="-1" role="dialog" aria-labelledby="infoInsModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="infoInsModal">Ámbito Institucional - Detalle de cada indicador</h4>
      </div>
    <div class="modal-body">
    <table class="table table-bordered">
		<tbody>
			<tr>
				<td rowspan="12">Ámbito Institucional</td>
				<td rowspan="12">Indicadores</td>
			</tr>
			<tr>
				<td><b>Indicador 1:</b><br/> El Centro cuenta con un Proyecto Educativo</td>
			</tr>
			<tr>
				<td><b>Indicador 2:</b><br/> El Centro articula y organiza su trabajo educativo, administrativo y nutricional en base a planes de trabajo semanales y bimestrales establecidos</td>
			</tr>
			<tr>
				<td><b>Indicador 3:</b><br/> El Centro cuenta con un sistema de evaluación de calidad  que responde al sistema de calidad municipal</td>
			</tr>
			<tr>
				<td><b>Indicador 4:</b><br/> El Centro desarrolla planes y procesos de inducción para las educadoras y el personal de servicio en base a las herramientas del municipio</td>
			</tr>
			<tr>
				<td><b>Indicador 5:</b><br/> El centro promueve  comunicación asertiva y buenas relaciones humanas</td>
			</tr>
			<tr>
				<td><b>Indicador 6:</b><br/> El centro promueve la participación en procesos de formación  y actualización para el personal</td>
			</tr>
			<tr>
				<td><b>Indicador 7:</b><br/> El Centro genera espacios de aprendizaje entre las familias y el personal del centro</td>
			</tr>
			<tr>
				<td><b>Indicador 8:</b><br/> El Centro esta equipado con mobiliario, material e insumos acorde al  programa educativo y a las necesidades de desarrollo de las niñas y niños</td>
			</tr>
			<tr>
				<td><b>Indicador 9:</b><br/> El Centro cuenta con ambientes  de descanso, administrativos, de servicio (cocina, comedor, baños y depósito) y salas de actividades</td>
			</tr>
			<tr>
				<td><b>Indicador 10:</b><br/> En el Centro se establecen y cumplen acciones para mantener orden  limpieza, cuidado y mantenimiento de la infraestructura, equipamiento y materiales educativos</td>
			</tr>
			<tr>
				<td><b>Indicador 11:</b><br/> El Centro cuenta con un plan de gestión de riesgos y respuestas a situaciones de emergencia</td>
			</tr>

		</tbody>
	</table>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="infoPedModal" tabindex="-1" role="dialog" aria-labelledby="infoPedModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="infoPedModal">Ámbito Pedagógico - Detalle de cada indicador</h4>
      </div>
    <div class="modal-body">
    <table class="table table-bordered">
		<tbody>
			<tr>
				<td rowspan="15">Ámbito Institucional</td>
				<td rowspan="15">Indicadores</td>
			</tr>
			<tr>
				<td>
					<b>Indicador 1:</b><br/>El Centro desarrolla programas de educación en valores sociocomunitarios y prácticas de Buen Trato
				</td>
			</tr>
			<tr>
				<td><b>Indicador 2:</b><br/>El Centro integra a niñas y niños con discapacidades, talento extraordinario y rezago en el desarrollo, brindándoles afectividad a través de muestras de cariño, amor y aceptación
				</td>
			</tr>
			<tr>
				<td><b>Indicador 3:</b><br/>En el Centro se respeta y fortalece las expresiones afectivas y las creencias espirituales, familiares y comunitarias
				</td>
			</tr>
			<tr>
				<td><b>Indicador 4:</b><br/>Se rescata las expresiones de afectividad de la familia practicadas en el cuidado de las niñas y niños e incorporan en el Centro
				</td>
			</tr>
			<tr>
				<td><b>Indicador 5:</b><br/>En el centro se respeta, fortalece, desarrolla los usos y costumbres culturales de crianza familiares y comunitarias (alimentación, salud, educación, protección, apego y desapego)
				</td>
			</tr>
			<tr>
				<td><b>Indicador 6:</b><br/>En el Centro se utiliza la lengua materna y se inicia la incorporación de una segunda lengua
				</td>
			</tr>  
			<tr>
				<td><b>Indicador 7:</b><br/>El Centro infantil verifica que todas las niñas y niños asistentes cuenten con el registro de nacimiento y promueve el trámite de cédula de identidad 
				</td>
			</tr>
			<tr>
				<td><b>Indicador 8:</b><br/>El Centro promueve encuentros interculturales en los que se expresan costumbres, tradiciones, arte, música y otros
				</td>
			</tr>
			<tr>
				<td><b>Indicador 9:</b><br/>El Centro fortalece hábitos de higiene, nutrición, descanso y cuidado de la salud en las niñas y niños y su entorno promoviendo su práctica en las familias
				</td>
			</tr
				>
			<tr><td><b>Indicador 10:</b><br/>El Centro toma acciones de prevención de referidos a la salud de las niñas y niños 
				</td>
			</tr>     
			<tr>
				<td><b>Indicador 11:</b><br/>En el Centro, las niñas y los niños observan, exploran y experimentan a  través de sus sentidos, su propio cuerpo asimismo, a la madre tierra y al cosmos 
				</td>
			</tr>
			<tr>
				<td><b>Indicador 12:</b><br/>El centro facilita espacios para el desarrollo progresivo de los  movimientos corporales de las niñas y niños y su relación con el espacio
				</td>
			</tr>
			<tr>
				<td><b>Indicador 13:</b><br/>En el Centro se promueve el desarrollo del lenguaje a través de diferentes formas de expresión  y comunicación de su cultura (oral, corporal y artística)
				</td>
			</tr>
			<tr>
				<td><b>Indicador 14:</b><br/>El Centro cuenta con un sistema de evaluación del desarrollo integral de las niñas y niños
				</td>
			</tr>
		</tbody>
	</table>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="infoComModal" tabindex="-1" role="dialog" aria-labelledby="infoComModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="infoComModal">Ámbito Comudidad - Detalle de cada indicador</h4>
      </div>
    <div class="modal-body">
    <table class="table table-bordered">
		<tbody>
			<tr>
				<td rowspan="12">Ámbito Comudidad</td>
				<td rowspan="12">Indicadores</td>
			</tr>
			<tr>
				<td><b>Indicador 1:</b><br/>El Centro tiene un proceso de comunicación permanente y periódico  con la familia respecto al desarrollo integral  de las niñas y niños</td>
			</tr>
			<tr>
				<td><b>Indicador 2:</b><br/>El centro coordina con las organizaciones de la comunidad, sobre acciones y servicios que prestan, promovidas para el desarrollo integral de las niñas y niños</td>
			</tr>
			<tr>
				<td><b>Indicador 3:</b><br/>El Centro  desarrolla procesos de transición y  adaptación dirigidos a la familia y a las niñas y niños para su ingreso al centro</td>
			</tr>
			<tr>
				<td><b>Indicador 4:</b><br/>El centro prepara a  la familia y a la niña o niño para su ingreso al ambito escolar</td>
			</tr>
			<tr>
				<td><b>Indicador 5:</b><br/>El centro establece mecanismos para que las familias asistan a los servicios de control de salud SSI (Servicio e Salud Integral)</td>
			</tr>
			<tr>
				<td><b>Indicador 6:</b><br/>El Centro rescata saberes y conocimientos sobre las propiedades de la medicina natural que las familias practican</td>
			</tr>
			<tr>
				<td><b>Indicador 7:</b><br/>El centro establece una red de vigilancia y proteccion a las niñas y niños y las mujeres embarazadas en coordinacion con las defensorias de la niñez y adolescencia</td>
			</tr>
			<tr>
				<td><b>Indicador 8:</b><br/>El Centro difunde la importancia y obligatoriedad  de la lactancia materna a menores de 6 meses y la promueven en las familias y la comunidad</td>
			</tr>
			<tr>
				<td><b>Indicador 9:</b><br/>El Centro propone y gestiona con la comunidad campañas de promoción de alimentos nutritivos</td>
			</tr>
			
			</tr>

		</tbody>
	</table>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
		    "aLengthMenu": [ [25, 50, 100, 200, -1], [25, 50, 100, 200, "All"]],
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
	$("#print-area-2").click(function (){
		print_area('area-2');
	});
	$("#print-area-3").click(function (){
		print_area('area-3');
	});
	$("#print-area-4").click(function (){
		print_area('area-4');
	});
	

	
});

</script>