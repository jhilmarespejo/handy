<!-- <?//php echo $this->Html->css('jquery.dataTables.css');
//echo $this->Html->script('jquery.dataTables.js');
//echo $this->Html->script('jQuery.print.js');?> -->

<!--<div class="text-left">
	<?//php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-reply']).' Inicio ', ['controller' => 'FrmNino', 'action' => 'index'], array('escape'=>false, 'class' => 'alert-warning') ); ?>&nbsp;&nbsp;&nbsp;
	<?//php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text']).' Nuevo registro ', ['controller' => 'FrmNino','action' => 'add'], array('escape'=>false, 'class' => 'alert-warning') ); ?>
</div><hr>-->


<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3 class="title2 text-center">Reportes</h3>
<div class="accordion" id="reports">
    <div class="panel panel-default" id="area-1">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-1" data-parent="#reports">1. Cantidad de niñ@s por edad y sexo por Centro Infantil</div>
	    <div id="report-1" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-1"><b><i class="fa fa-print"></i> Imprimir</b></span>
	    	<table class="display table table-responsive table-bordered" id="table-1">
	    		<thead>
	    			<tr>
	    				<!--<th class="text-center" rowspan="2">#</th>-->
	    				<th class="text-center" rowspan="2">Nombre del CIM</th>
	    				<th class="text-center" colspan="3">6 Meses</th>
	    				<th class="text-center" colspan="3">1 año</th>
	    				<th class="text-center" colspan="3">2 años</th>
	    				<th class="text-center" colspan="3">3 años</th>
	    				<th class="text-center" colspan="3">4 años</th>
	    				<th class="text-center" colspan="3">5 años</th>
	    				<th class="text-center" colspan="3">6 años</th>
	    				<!--<th class="text-center" colspan="3">7 años</th>-->
	    				<th class="text-center" colspan="3">Total</th>
	    			</tr>
	    			<tr>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>
	    				
	    				<!--<th class="text-center">Fem.</th>
	    				<th class="text-center">Masc.</th>
	    				<th class="text-center">Total</th>-->
	    			</tr>
	    		</thead>
	    		<tbody>
	    		<?php $tH6m=0;$tM6m=0;$tH1a=0;$tM1a=0;$tH2a=0;$tM2a=0;$tH3a=0;$tM3a=0;$tH4a=0;$tM4a=0; $tH5a=0;$tM5a=0; $tH6a=0;$M6a=0; $tM6a=0; $tH7a=0;$tM7a=0;$t6m=0;$t1a=0;$t2a=0;$t3a=0;$t4a=0;  $t5a=0;$t6a=0; $t7a=0; $mt=0;$ht=0;$tt=0; 
	    		foreach ($data[1] as $key => $list1) {?>
	    			<tr>
	    				<!--<td><?//php echo $key+1; ?></td>-->
			            <td><?php echo $list1['nombre']; ?></td>
			            <td class='text-right' title='Fem. 6 meses'><?php echo $list1['M_6M']; $tM6m +=$list1['M_6M']; ?></td>
			            <td class='text-right' title='Masc. 6 meses'><?php echo $list1['H_6M']; $tH6m +=$list1['H_6M']?></td>
			            <td class='text-right' title='Total 6 meses'><?php echo $list1['Total_6M']; $t6m += $list1['Total_6M'];?></td>
			            <td class='text-right' title='Fem. 1 año'><?php echo $list1['M_1A']; $tM1a += $list1['M_1A']; ?></td>
			            <td class='text-right' title='Masc. 1 año'><?php echo $list1['H_1A']; $tH1a += $list1['H_1A']; ?></td>
			            <td class='text-right' title='Total 1 año'><?php echo $list1['Total_1A'];$t1a += $list1['Total_1A'];?></td>
			            <td class='text-right' title='Fem. 2'><?php echo $list1['M_2A'];$tM2a += $list1['M_2A']; ?></td>
			            <td class='text-right' title='Masc. 2'><?php echo $list1['H_2A'];$tH2a += $list1['H_2A']; ?></td>
			            <td class='text-right' title='Total 2'><?php echo $list1['Total_2A'];$t2a += $list1['Total_2A'];?></td>
			            <td class='text-right' title='Fem. 3 años'><?php echo $list1['M_3A'];$tM3a += $list1['M_3A']; ?></td>
			            <td class='text-right' title='Masc. 3 años'><?php echo $list1['H_3A'];$tH3a += $list1['H_3A']; ?></td>
			            <td class='text-right' title='Total 3 años'><?php echo $list1['Total_3A'];$t3a += $list1['Total_3A'];?></td>
			            <td class='text-right' title='Fem. 4 años'><?php echo $list1['M_4A'];$tM4a += $list1['M_4A']?></td>
			            <td class='text-right' title='Masc. 4 años'><?php echo $list1['H_4A'];$tH4a += $list1['H_4A']?></td>
			            <td class='text-right' title='Total 4 años'><?php echo $list1['Total_4A'];$t4a += $list1['Total_4A'];?></td>
			            <td class='text-right' title='Fem. 5 años'><?php echo $list1['M_5A'];$tM5a += $list1['M_5A']?></td>
			            <td class='text-right' title='Masc. 5 años'><?php echo $list1['H_5A'];$tH5a += $list1['H_5A']?></td>
			            <td class='text-right' title='Total 5 años'><?php echo $list1['Total_5A'];$t5a += $list1['Total_5A'];?></td>
						<td class='text-right' title='Fem. 6 años'><?php echo $list1['M_6A'];$tM6a += $list1['M_6A']?></td>
			            <td class='text-right' title='Masc. 6 años'><?php echo $list1['H_6A'];$tH6a += $list1['H_6A']?></td>
			            <td class='text-right' title='Total 6 años'><?php echo $list1['Total_6A'];$t6a += $list1['Total_6A'];?></td>
			            <td class='text-right' title='TOTAL Femenino'><?php echo $list1['M_Total']; $ht+= $list1['M_Total'];?></td>
			            <td class='text-right' title='TOTAL Masculino'><?php echo $list1['H_Total']; $mt+= $list1['H_Total'];?></td>
			            <td class='text-right' title='TOTAL'><?php echo $list1['Total_Total']; $tt+= $list1['Total_Total'];?></td>
	    			</tr> <?php }  ?>

	    		</tbody>
	    		<tfoot>
	    			<tr>
	    				<!--<td></td>-->
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
	    				<td>TOTAL</td>
			            <td> <?php echo $tM6m;?></td>
			            <td> <?php echo $tH6m;?></td>
			            <td> <?php echo $t6m;?></td>
			            <td> <?php echo $tM1a;?></td>
			            <td> <?php echo $tH1a;?></td>
			            <td> <?php echo $t1a;?></td>
			            <td> <?php echo $tM2a;?></td>
			            <td> <?php echo $tH2a;?></td>
			            <td> <?php echo $t2a;?></td>
			            <td> <?php echo $tM3a;?></td>
			            <td> <?php echo $tH3a;?></td>
			            <td> <?php echo $t3a;?></td>
			            <td> <?php echo $tM4a;?></td>
			            <td> <?php echo $tH4a;?></td>
			            <td> <?php echo $t4a;?></td>
			           	<td> <?php echo $tM5a;?></td>
			            <td> <?php echo $tH5a;?></td>
			            <td> <?php echo $t5a;?></td>
			            <td> <?php echo $tM6a;?></td>
			            <td> <?php echo $tH6a;?></td>
			            <td> <?php echo $t6a;?></td>
			            <td> <?php echo $mt;?></td>
			            <td> <?php echo $ht;?></td>
			            <td> <?php echo $tt;?></td>
	    			</tr>
	    		</tfoot>
	    	</table>
	    </div>
    </div>

    <!--<div class="panel panel-default" id="area-2">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-2" data-parent="#reports">2. Cantidad de niñ@s con Certificado Nacimiento y cédula de identidad por Centro Infantil</div>
	    <div id="report-2" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-2"><b><i class="fa fa-print"></i> Imprimir</b></span>
	    	<table class="display table table-responsive table-bordered" id="table-2">
	    		<thead>
	    			<tr>
	    				<th class="text-center" rowspan="2">#</th>
	    				<th class="text-center" rowspan="2">Nombre del centro infantil</th>
	    				<th class="text-center" colspan="2">Niños</th>
	    				<th class="text-center" colspan="2">Niñas</th>
	    				<th class="text-center" colspan="2">Total</th>
	    			</tr>
	    			<tr class="inner-20">
	    				<th class="text-center">Certificado de Nac.</th>
	    				<th class="text-center">Carnet de Identidad</th>
	    				<th class="text-center">Certificado de Nac.</th>
	    				<th class="text-center">Carnet de Identidad</th>
	    				<th class="text-center">Certificado de Nac.</th>
	    				<th class="text-center">Carnet de Identidad</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    		<?php 
	    			$tNinosCn=0;$tNinosCi=0;$tNinasCn=0;$tNinasCi=0;$tCn=0;$tCi=0;
	    			foreach ($data[2] as $key => $list2) {?>
	    			<tr>
	    				<td><?php echo $key+1; ?></td>
	    				<td class="" ><?php echo $list2['nombre'];?></td>
			            <td class="text-right" ><?php echo $list2['Ninos_CN_si']; $tNinosCn+=$list2['Ninos_CN_si'];  ?></td>
			            <td class="text-right" ><?php echo $list2['Ninos_CI_si']; $tNinosCi+=$list2['Ninos_CI_si'];  ?></td>
			            <td class="text-right" ><?php echo $list2['Ninas_CN_si']; $tNinasCn+=$list2['Ninas_CN_si']; ?></td>
			            <td class="text-right" ><?php echo $list2['Ninas_CI_si']; $tNinasCi+=$list2['Ninas_CI_si'];  ?></td>
			            <td class="text-right" ><?php echo $list2['Total_CN']; $tCn+=$list2['Total_CN']; ?></td>
			            <td class="text-right" ><?php echo $list2['Total_CI']; $tCi+=$list2['Total_CI']; ?></td>
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
	    			</tr>
	    			<tr class="strong-right">
	    				<td></td>
	    				<td>TOTAL</td>
	    				<td><?php echo $tNinosCn; ?></td>
	    				<td><?php echo $tNinosCi; ?></td>
	    				<td><?php echo $tNinasCn; ?></td>
	    				<td><?php echo $tNinasCi; ?></td>
	    				<td><?php echo $tCn; ?></td>
	    				<td><?php echo $tCi; ?></td>
	    			</tr>
	    		</tfoot>
	    	</table>
	    </div>
    </div>
    <div class="panel panel-default" id="area-3">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-3" data-parent="#reports">3. Cantidad de niñ@s por tipo de seguro de salud por Centro Infantil</div>
	    <div id="report-3" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-3"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered display table-responsive" id="table-2">
	    		<thead>
	    		<tr class="inner-20">
	    			<th>#</th>
	    			<th>Nombre del Centho Infantil</th>
	    			<th>Público</th>
	    			<th>Privado</th>
	    			<th>Total</th>
	    		</tr>
	    		</thead>
	    		<tbody>
	    		<?php $publico=0;$privado=0;$total=0; 
	    		foreach ($data[3] as $key => $list3) {?>
	    			<tr>
	    				<td class="text-center"><?php echo $key+1 ;?></td>
	    				<td class=""><?php echo $list3['nombre'] ;?></td>
			            <td class="text-right"><?php echo $list3['Publico']; $publico +=$list3['Publico'];?></td>
			            <td class="text-right"><?php echo $list3['Privado']; $privado +=$list3['Privado'];?></td>
			            <td class="text-right"><?php echo $list3['Total']; $total +=$list3['Total'];?></td>
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
	    			<tr class="strong-right">
	    				<td></td>
	    				<td>TOTAL</td>
	    				<td><?php echo $publico;?></td>
	    				<td><?php echo $privado;?></td>
	    				<td><?php echo $total;?></td>
	    			</tr>
	    		</tfoot>
	    	</table>

	    </div>
	</div>
	<div class="panel panel-default"  id="area-4">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-4" data-parent="#reports">4. Cantidad de niñ@s que cuentan con carnet de vacunas por Centro Infantil</div>
	    <div id="report-4" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-4"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered display table-reponsive">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Si</th>
	        			<th>No</th>
	        			<th>Total</th>

	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tSi=0; $tNo=0; $tt=0;
	        	foreach ($data[4] as $key => $list4) { /*pr($data[4]);exit;*/?>
	        		<tr>
	        			<td><?php echo $key + 1 ; ?></td> 
	        			<td><?php echo $list4['nombre'];?></td>
            			<td class="text-right"><?php echo $list4['CV_Si']; $tSi += $list4['CV_Si'];?></td>
            			<td class="text-right"><?php echo $list4['CV_No']; $tNo += $list4['CV_No'];?></td>
            			<td class="text-right"><?php echo $list4['Total_Si_No']; $tt += $list4['Total_Si_No'];?></td>
	        		</tr>
	        	<?php } ?>	        	
	        	</tbody>
	        	<tfoot>
	        		<tr>
	        			<td></td><td></td><td></td><td></td><td></td>
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
	        			<td>TOTAL</td>
	        			<td><?php echo $tSi;?></td>
	        			<td><?php echo $tNo;?></td>
	        			<td><?php echo $tt;?></td>
	        		</tr>
	        	</tfoot>
	        </table>
	    </div>
	</div>
	<div class="panel panel-default" id="area-5">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-5" data-parent="#reports">5. Cantidad de niñ@s por tipo de discapacidad por Centro Infantil</div>
	    <div id="report-5" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-5"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered display table-responsive">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Si</th>
	        			<th>No</th>
	        			<th>Total</th>

	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tSi=0; $tNo=0; $tt=0;
	        	foreach ($data[5] as $key => $list5) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key + 1 ; ?></td> 
	        			<td><?php echo $list5['nombre'];?></td>
            			<td class="text-right"><?php echo $list5['TD_Si']; $tSi += $list5['TD_Si'];?></td>
            			<td class="text-right"><?php echo $list5['TD_No']; $tNo += $list5['TD_No'];?></td>
            			<td class="text-right"><?php echo $list5['Total_Si_No']; $tt += $list5['Total_Si_No'];?></td>
	        		</tr>
	        	<?php } ?>
	        		
	        	</tbody>
	        		<tr>
	        			<td></td><td></td><td></td><td></td><td></td>
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
	        			<td><b>TOTAL</b></td>
	        			<td><b><?php echo $tSi;?></b></td>
	        			<td><b><?php echo $tNo;?></b></td>
	        			<td><b><?php echo $tt;?></b></td>
	        		</tr>
	        </table>
	        
	    </div>
	</div>
	<div class="panel panel-default" id="area-6">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-6" data-parent="#reports">6. Cantidad de niñ@s según con quién vive por Centro Infantil</div>
	    <div id="report-6" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-6"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Madre</th>
	        			<th>Padre</th>
	        			<th>Ambos</th>
	        			<th>Hermano(a) Mayor</th>
	        			<th>Abuelos</th>
	        			<th>Tios</th>

	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tMa=0; $tPa=0; $tAm=0; $tHe=0; $tAb=0; $tTi=0;
	        	foreach ($data[6] as $key => $list6) { ?>
	        		<tr>
		        		<td class="text-center"><?php echo $key+1; ?></td>
		        		<td><?php echo $list6['nombre']; //$tMa +=$list6['nombre'];?></td>
			            <td class="text-right" ><?php echo $list6['Vive_con_Madre']; $tMa +=$list6['Vive_con_Madre'];?></td>
			            <td class="text-right" ><?php echo $list6['Vive_con_Padre']; $tPa +=$list6['Vive_con_Padre'];?></td>
			            <td class="text-right" ><?php echo $list6['Vive_con_Ambos']; $tAm +=$list6['Vive_con_Ambos'];?></td>
			            <td class="text-right" ><?php echo $list6['Vive_con_Hermano(a)']; $tHe +=$list6['Vive_con_Hermano(a)'];?></td>
			            <td class="text-right" ><?php echo $list6['Vive_con_Abuelos']; $tAb +=$list6['Vive_con_Abuelos'];?></td>
			            <td class="text-right" ><?php echo $list6['Vive_con_Tios']; $tTi +=$list6['Vive_con_Tios'];?></td>
			        </tr>
	        	<?php } ?>	        		
	        	</tbody>
	        	<tfoot>
	        		<tr>
	        			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
	        			<td>TOTAL</td>
	        			<td><?php echo $tMa;?></td>
	        			<td><?php echo $tPa;?></td>
	        			<td><?php echo $tAm;?></td>
	        			<td><?php echo $tHe;?></td>
	        			<td><?php echo $tAb;?></td>
	        			<td><?php echo $tTi;?></td>
	        		</tr>
	        	</tfoot>
	        </table>
	        
	    </div>
	</div>
	<div class="panel panel-default" id="area-7">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-7" data-parent="#reports">7. Cantidad de niñ@s de acuerdo a razones de ausencia de la madre por Centro Infantil</div>
	    <div id="report-7" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-7"><b><i class="fa fa-print"></i> Imprimir</b></span>
	    	<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Trabajo</th>
	        			<th>Estudio</th>
	        			<th>Trabaja en otra ciudad</th>
	        			<th>Trabaja en el extranjero</th>
	        			<th>Abandono</th>
	        		</tr>				
	        	</thead>
	        	<tbody>
	        	<?php $tTr=0; $tEs=0; $tOc=0; $tEx=0; $tAb=0;
	        	foreach ($data[7] as $key => $list7) { ?>
	        		<tr>
		        		<td class="text-center"><?php echo $key + 1; ?></td>
				        <td><?php echo $list7['nombre'];?></td>
			            <td class="text-right"><?php echo $list7['AM_Trabajo']; $tTr+=$list7['AM_Trabajo']; ?></td>
			            <td class="text-right"><?php echo $list7['AM_Estudio']; $tEs+=$list7['AM_Estudio'];?></td>
			            <td class="text-right"><?php echo $list7['AM_Trabaja_otra_ciudad']; $tOc+=$list7['AM_Trabaja_otra_ciudad'];?></td>
			            <td class="text-right"><?php echo $list7['AM_Trabaja_extranjero']; $tEx+=$list7['AM_Trabaja_extranjero'];?></td>
			            <td class="text-right"><?php echo $list7['AM_Abandono']; $tAb+=$list7['AM_Abandono'];?></td>
		        	</tr>
	        	<?php } ?>	        		
	        	</tbody>
	        		<tfoot>
	        			<tr>
	        				<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	        			</tr>
		        		<tr class="strong-right">
		        			<td></td>
		        			<td>TOTAL</td>
		        			<td><?php echo $tTr;?></td>
		        			<td><?php echo $tEs;?></td>
		        			<td><?php echo $tOc;?></td>
		        			<td><?php echo $tEx;?></td>
		        			<td><?php echo $tAb;?></td>
		        		</tr>
	        		</tfoot>
	    	</table>
	    </div>
	</div>
	<div class="panel panel-default" id="area-8">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-8" data-parent="#reports">8. Cantidad de niñ@s de acuerdo a razones de ausencia del padre por Centro Infantil</div>
	    <div id="report-8" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-8"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Trabajo</th>
	        			<th>Estudio</th>
	        			<th>Trabaja en otra ciudad</th>
	        			<th>Trabaja en el extranjero</th>
	        			<th>Abandono</th>
	        		</tr>				
	        	</thead>
	        	<tbody>
	        	<?php $tTr=0; $tEs=0; $tOc=0; $tEx=0; $tAb=0;
	        	foreach ($data[8] as $key => $list8) { ?>
	        		<tr>
		        		<td class="text-center"><?php echo $key + 1; ?></td>
				        <td><?php echo $list8['nombre'];?></td>
			            <td class="text-right"><?php echo $list8['AP_Trabajo']; $tTr+=$list8['AP_Trabajo']; ?></td>
			            <td class="text-right"><?php echo $list8['AP_Estudio']; $tEs+=$list8['AP_Estudio'];?></td>
			            <td class="text-right"><?php echo $list8['AP_Trabaja_otra_ciudad']; $tOc+=$list8['AP_Trabaja_otra_ciudad'];?></td>
			            <td class="text-right"><?php echo $list8['AP_Trabaja_extranjero']; $tEx+=$list8['AP_Trabaja_extranjero'];?></td>
			            <td class="text-right"><?php echo $list8['AP_Abandono']; $tAb+=$list8['AP_Abandono'];?></td>
		        	</tr>
	        	<?php } ?>	        		
	        	</tbody>
	        	<tfoot>
	        		<tr>
	        			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
	        			<td>TOTAL</td>
	        			<td><?php echo $tTr;?></td>
	        			<td><?php echo $tEs;?></td>
	        			<td><?php echo $tOc;?></td>
	        			<td><?php echo $tEx;?></td>
	        			<td><?php echo $tAb;?></td>
	        		</tr>
	        	</tfoot>
	    	</table>
	    </div>
	</div>
	<div class="panel panel-default" id="area-9">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-9" data-parent="#reports">9. Cantidad de niñ@s de acuerdo a razones de ausencia de ambos padres por Centro Infantil</div>
	    <div id="report-9" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-9"><b><i class="fa fa-print"></i> Imprimir</b></span>
	     	<table class="table table-bordered table-reponsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Trabajan</th>
	        			<th>Estudian</th>
	        			<th>Trabajan en otra ciudad</th>
	        			<th>Trabajan en el extranjero</th>
	        			<th>Abandono</th>
	        		</tr>				
	        	</thead>
	        	<tbody>
	        	<?php $tTr=0; $tEs=0; $tOc=0; $tEx=0; $tAb=0;
	        	foreach ($data[9] as $key => $list9) { ?>
	        		<tr>
		        		<td class="text-center"><?php echo $key + 1; ?></td>
				        <td><?php echo $list9['nombre'];?></td>
			            <td class="text-right"><?php echo $list9['Ambos_Trabajo']; $tTr+=$list9['Ambos_Trabajo']; ?></td>
			            <td class="text-right"><?php echo $list9['Ambos_Estudio']; $tEs+=$list9['Ambos_Estudio'];?></td>
			            <td class="text-right"><?php echo $list9['Ambos_Trabaja_otra_ciudad']; $tOc+=$list9['Ambos_Trabaja_otra_ciudad'];?></td>
			            <td class="text-right"><?php echo $list9['Ambos_Trabaja_extranjero']; $tEx+=$list9['Ambos_Trabaja_extranjero'];?></td>
			            <td class="text-right"><?php echo $list9['Ambos_Abandono']; $tAb+=$list9['Ambos_Abandono'];?></td>
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
	        		</tr>
	        		<tr class="strong-right">
	        			<td>TOTAL</td>
	        			<td><?php echo $tTr;?></td>
	        			<td><?php echo $tEs;?></td>
	        			<td><?php echo $tOc;?></td>
	        			<td><?php echo $tEx;?></td>
	        			<td><?php echo $tAb;?></td>
	        		</tr>
	        	</tfoot>
	    	</table>

	    </div>
	</div>
	<div class="panel panel-default" id="area-10">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-10" data-parent="#reports">10. Relación de familias según el ambiente familiar por CI / Numero de niños según el ambiente familiar por CI</div>
	    <div id="report-10" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-10"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del Cento Infantil</th>
	        			<th>Armonioso</th>
	        			<th>Conflictivo</th>
	        			<th>Indiferente</th>
	        			<th>TOTAL</th>
	        		</tr>				
	        	</thead>
	        	<tbody>
	        	<?php $tAr=0; $tCo=0; $tIn=0; $tt=0;
	        	foreach ($data[10] as $key => $list10) { ?>
	        		<tr>
		        		<td class="text-center"><?php echo $key+1 ;?></td>
	        			<td><?php echo $list10['nombre']; ?></td>
            			<td class="text-right"><?php echo $list10['Armonioso']; $tAr+=$list10['Armonioso'] ;?></td>
            			<td class="text-right"><?php echo $list10['Conflictivo']; $tCo+=$list10['Conflictivo'] ;?></td>
            			<td class="text-right"><?php echo $list10['Indiferente']; $tIn+=$list10['Indiferente'] ;?></td>
            			<td class="text-right"><?php echo $list10['TOTAL']; $tt+=$list10['TOTAL'] ;?></td>
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
	        		</tr>
		        	<tr class="strong-right">
		        		<td></td>
	        			<td>TOTAL</td>
	        			<td><?php echo $tAr;?></td>
	        			<td><?php echo $tCo;?></td>
	        			<td><?php echo $tIn;?></td>
	        			<td><?php echo $tt;?></td>
	        		</tr>
		        </tfoot>
		    </table>

	    </div>
	</div>
	<div class="panel panel-default" id="area-11">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-11" data-parent="#reports">11. Relación de familiares registrados por CI / Cantidad de niños según el familiar registrado en su grupo familiar</div>
	    <div id="report-11" class="collapse panel-body">
	        ***
	    </div>
	</div>
	<div class="panel panel-default" id="area-12">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-12" data-parent="#reports">12. Relación de familiares registrados según grado de instrucción por Centro Infantil</div>
	    <div id="report-12" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-12"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Parentesco</th>
	        			<th>Ninguno</th>
	        			<th>Primaria</th>
	        			<th>Secundaria</th>
	        			<th>Auxiliar</th>
	        			<th>Técnico</th>
	        			<th>Universitario</th>
	        			<th>Otro</th>
	        			<th>TOTAL</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tNi=0; $tPr=0; $tSe=0; $tAu=0; $tTe=0; $tUn=0; $tOt=0; $tt=0;
	        	foreach ($data[12] as $key => $list12) { ?>
	        	<tr>
	        		<td class="text-center"><?php echo $key + 1; ?></td>
        			<td><?php echo $list12['parentesco']; ?></td>
        			<td class="text-right"><?php echo $list12['Ninguno']; $tNi += $list12['Ninguno'] ;?></td>
        			<td class="text-right"><?php echo $list12['Primaria']; $tPr += $list12['Primaria'] ;?></td>
        			<td class="text-right"><?php echo $list12['Secundaria']; $tSe += $list12['Secundaria'] ;?></td>
        			<td class="text-right"><?php echo $list12['Auxiliar']; ?></td $list12['Auxiliar']$tAu += ;>
        			<td class="text-right"><?php echo $list12['Tecnico']; $tTe += $list12['Tecnico'] ;?></td>
        			<td class="text-right"><?php echo $list12['Universitario']; $tUn += $list12['Universitario'] ;?></td>
        			<td class="text-right"><?php echo $list12['Otro']; $tOt += $list12['Otro'] ;?></td>
        			<td class="text-right"><?php echo $list12['Total']; $tt += $list12['Total'] ;?></td>
        		</tr>
	        	<?php } ?>	        	
	        	</tbody>
	        	<tfoot>
	        		<tr>
	        			<td></td><td></td><td></td><td></td><td></td>
	        			<td></td><td></td><td></td><td></td><td></td>
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
	        			<td>TOTAL</td>
	        			<td><?php echo $tNi; ?></td>
	        			<td><?php echo $tPr; ?></td>
	        			<td><?php echo $tSe; ?></td>
	        			<td><?php echo $tAu; ?></td>
	        			<td><?php echo $tTe; ?></td>
	        			<td><?php echo $tUn; ?></td>
	        			<td><?php echo $tOt; ?></td>
	        			<td><?php echo $tt; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>

	    </div>
	</div>
	<div class="panel panel-default" id="area-13">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-13" data-parent="#reports">13. Relacion de familiares registrados según ocupación por CI</div>
		<div id="report-13" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-13"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        		 	<th>#</th>
	        			<th>Familiares registrados</th>
	        			<th>Ocupación 1</th>
	        			<th>Ocupación 2</th>
	        			<th>Ocupación 3</th>
	        		</tr>
	        		<tbody>
	        		<?php $tOc1=0; $tOc2=0; $tOc3=0; 
			        	foreach ($data[13] as $key => $list13) { ?>
			        	<tr>
			        		<td class="text-center"><?php echo $key + 1; ?></td>
							<td><?php echo $list13['parentesco'];?></td>
            				<td class="text-right"><?php echo $list13['ocupacion1']; $tOc1+=$list13['ocupacion1'];?></td>
            				<td class="text-right"><?php echo $list13['ocupacion2']; $tOc2+=$list13['ocupacion2'];?></td>
            				<td class="text-right"><?php echo $list13['ocupacion3']; $tOc3+=$list13['ocupacion3'];?></td>
			        	</tr>
	        		<?php } ?>	        		
	        		</tbody>
	        		<tfoot>
	        			<tr>
	        				<td></td><td></td><td></td><td></td><td></td>
	        			</tr>
	        			<tr class="strong-right">
	        				<td></td>
		        			<td>TOTAL</td>
		        			<td><?php echo $tOc1;?></td>
		        			<td><?php echo $tOc2;?></td>
		        			<td><?php echo $tOc3;?></td>
		        		</tr>
	        		</tfoot>
	        	</thead>
	        </table>
		</div>
	</div>
	<div class="panel panel-default" id="area-14">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-14" data-parent="#reports">14. Relacion de familiares registrados según rangos de ingresos por CI</div>
		<div id="report-14" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-14"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Parientes Registrados</th>
	        			<th>Menor a 500 Bs.</th>
	        			<th>500 - 1000 Bs.</th>
	        			<th>1001 - 1500 Bs.</th>
	        			<th>1501 - 2000 Bs.</th>
	        			<th>2001 - 2500 Bs.</th>
	        			<th>Mayor a 2501 Bs.</th>
	        			<th>TOTAL</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tR1=0; $tR2=0; $tR3=0; $tR4=0; $tR5=0; $tR6=0; $tt=0;
	        	foreach ($data[14] as $key => $list14) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key + 1; ?></td>
						<td><?php echo $list14['parentesco'];?></td>
            			<td class="text-right"><?php echo $list14['<500']; $tR1 += $list14['<500']; ?></td>
            			<td class="text-right"><?php echo $list14['500-1000']; $tR2 += $list14['500-1000']; ?></td>
            			<td class="text-right"><?php echo $list14['1001-1500']; $tR3 += $list14['1001-1500']; ?></td>
            			<td class="text-right"><?php echo $list14['1501-2000']; $tR4 += $list14['1501-2000']; ?></td>
            			<td class="text-right"><?php echo $list14['2001-2500']; $tR5 += $list14['2001-2500']; ?></td>
            			<td class="text-right"><?php echo $list14['>2501']; $tR6 += $list14['>2501']; ?></td>
            			<td class="text-right"><?php echo $list14['Total']; $tt += $list14['Total']; ?></td>
	        		</tr>
	        	<?php } ?>	        			        	
	        	</tbody>
	        	<tfoot>
	        		<tr>
	        			<td></td><td></td><td></td>
	        			<td></td><td></td><td></td>
	        			<td></td><td></td><td></td>
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tR1; ?></td>
	        			<td><?php echo $tR2; ?></td>
	        			<td><?php echo $tR3; ?></td>
	        			<td><?php echo $tR4; ?></td>
	        			<td><?php echo $tR5; ?></td>
	        			<td><?php echo $tR6; ?></td>
	        			<td><?php echo $tt; ?></td>
	        		</tr>
      			</tfoot>
	        </table>

		</div>
	</div>
	<div class="panel panel-default" id="area-15">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-15" data-parent="#reports">15. Relacion de tipo de familia por CI / Número de niños según el tipo de familia por CI
		</div>
		<div id="report-15" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-15"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Nuclear</th>
	        			<th>Monoparental</th>
	        			<th>Extendida</th>
	        			<th>Reconstituida</th>
	        			<th>Otro</th>
	        			<th>Total</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tNu=0; $tMo=0; $tEx=0; $tRe=0; $tOt=0; $tt=0;
	        	foreach ($data[15] as $key => $list15) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key + 1; ?></td>
						<td><?php echo $list15['nombre']; ?> </td>
            			<td class="text-right"><?php echo $list15['Nuclear']; $tNu+=$list15['Nuclear']; ?> </td>
            			<td class="text-right"><?php echo $list15['Monoparental']; $tMo+=$list15['Monoparental']; ?> </td>
            			<td class="text-right"><?php echo $list15['Extendida']; $tEx+=$list15['Extendida']; ?> </td>
            			<td class="text-right"><?php echo $list15['Reconstituida']; $tRe+=$list15['Reconstituida']; ?> </td>
            			<td class="text-right"><?php echo $list15['Otro']; $tOt+=$list15['Otro']; ?> </td>
            			<td class="text-right"><?php echo $list15['Total']; $tt +=$list15['Total'];?> </td>
	        		</tr>
	        	<?php } ?>	        		
	        	</tbody>
	        	<tfoot>
	        		<tr>
						<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tNu; ?></td>
	        			<td><?php echo $tMo; ?></td>
	        			<td><?php echo $tEx; ?></td>
	        			<td><?php echo $tRe; ?></td>
	        			<td><?php echo $tOt; ?></td>
	        			<td><?php echo $tt; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>

		</div>
	</div>
	<div class="panel panel-default" id="area-16">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-16" data-parent="#reports">16. Número de familias según el tipo de paredes y pisos de su vivienda por CI</div>
		<div id="report-16" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-16"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-30">
	        			<th class="text-center" rowspan="2">#</th>
	        			<th class="text-center" rowspan="2">Nombre del CIm</th>
	        			<th class="text-center" colspan="4">Paredes</th>
	        			<th class="text-center" colspan="4">Pisos</th>
	        		</tr>
	        		<tr class="inner-30">
	        			<th>Ladrillo</th>
	        			<th>Adobe</th>
	        			<th>Piedra</th>
	        			<th>Otro</th>
	        			<th>Tierra</th>
	        			<th>Cemento</th>
	        			<th>Machimbre</th>
	        			<th>Parket</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tPl=0; $tPa=0; $tPp=0; $tPiT=0; $tPiP=0; $tPiC=0; $tPiM=0; $tPiPa=0;
	        	foreach ($data[16] as $key => $list16) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key + 1;?></td>
						<td><?php echo $list16['nombre']; ?> </td>
			            <td class="text-right"><?php echo $list16['Pared_Ladrillo']; $tPl+=$list16['Pared_Ladrillo'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Pared_Adobe']; $tPa+=$list16['Pared_Adobe'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Pared_Piedra']; $tPp+=$list16['Pared_Piedra'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Piso_Tierra']; $tPiT+=$list16['Piso_Tierra'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Piso_Piedra']; $tPiP+=$list16['Piso_Piedra'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Piso_Cemento']; $tPiC+=$list16['Piso_Cemento'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Piso_Machimbre']; $tPiM+=$list16['Piso_Machimbre'] ; ?> </td>
			            <td class="text-right"><?php echo $list16['Piso_Parket']; $tPiPa+=$list16['Piso_Parket'] ; ?> </td>
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
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tPl;?></td>
	        			<td><?php echo $tPa;?></td>
	        			<td><?php echo $tPp;?></td>
	        			<td><?php echo $tPiT;?></td>
	        			<td><?php echo $tPiP;?></td>
	        			<td><?php echo $tPiC;?></td>
	        			<td><?php echo $tPiM;?></td>
	        			<td><?php echo $tPiPa;?></td>
	        		</tr>
	        	</tfoot>
	        </table>	
		</div>
	</div>
	<div class="panel panel-default" id="area-17">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-17" data-parent="#reports">17. Número de familias según el tipo de vivienda por CI</div>
		<div id="report-17" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-17"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Departamento</th>
	        			<th>Casa Independiente</th>
	        			<th>Casa Compartida</th>
	        			<th>Cuarto Múltiple</th>
	        			<th>Total</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tDe=0; $tCaI=0; $tCaC=0; $tCu=0; $tt=0; 
	        	foreach ($data[17] as $key => $list17) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1 ;?></td>
						<td><?php echo $list17['nombre']; ?></td>
            			<td class="text-right"><?php echo $list17['Departamento']; $tDe+=$list17['Departamento']; ?></td>
            			<td class="text-right"><?php echo $list17['Casa_Independiente']; $tCaI+=$list17['Casa_Independiente']; ?></td>
            			<td class="text-right"><?php echo $list17['Casa_Compartida']; $tCaC+=$list17['Casa_Compartida']; ?></td>
            			<td class="text-right"><?php echo $list17['Cuarto_Multiple']; $tCu+=$list17['Cuarto_Multiple']; ?></td>
            			<td class="text-right"><?php echo $list17['Total']; $tt+=$list17['Total']; ?></td>
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
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tDe; ?></td>
	        			<td><?php echo $tCaI; ?></td>
	        			<td><?php echo $tCaC; ?></td>
	        			<td><?php echo $tCu; ?></td>
	        			<td><?php echo $tt; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>

		</div>
	</div>
	<div class="panel panel-default" id="area-18">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-18" data-parent="#reports">18. Número de familias según la propiedad de su vivienda por CI
		</div>
		<div id="report-18" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-18"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Propia</th>
	        			<th>Anticretico</th>
	        			<th>Alquiler</th>
	        			<th>Cedida</th>
	        			<th>Compartida</th>
	        			<th>Cuidadora</th>
	        			<th>Total</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tPr=0; $tAn=0; $tAl=0; $tCe=0; $tCo=0; $tCu=0; $tt=0; 
	        	foreach ($data[18] as $key => $list18) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1 ;?></td>
						<td><?php echo $list18['nombre']; ?></td>
            			<td class="text-right"><?php echo $list18['Propia']; $tPr +=$list18['Propia']; ?></td>
            			<td class="text-right"><?php echo $list18['Anticretico']; $tAn +=$list18['Anticretico']; ?></td>
            			<td class="text-right"><?php echo $list18['Alquiler']; $tAl +=$list18['Alquiler']; ?></td>
            			<td class="text-right"><?php echo $list18['Cedida']; $tCe +=$list18['Cedida']; ?></td>
            			<td class="text-right"><?php echo $list18['Compartida']; $tCo +=$list18['Compartida']; ?></td>
            			<td class="text-right"><?php echo $list18['Cuidadora']; $tCu +=$list18['Cuidadora']; ?></td>
            			<td class="text-right"><?php echo $list18['Total']; $tt +=$list18['Total']; ?></td>
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
		        		<td>TOTAL</b></td>
	        			<td><?php echo $tPr; ?></td>
	        			<td><?php echo $tAn; ?></td>
	        			<td><?php echo $tAl; ?></td>
	        			<td><?php echo $tCe; ?></td>
	        			<td><?php echo $tCo; ?></td>
	        			<td><?php echo $tCu; ?></td>
	        			<td><?php echo $tt; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>

		</div>
	</div>
	<div class="panel panel-default" id="area-19">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-19" data-parent="#reports">19. Número de familias según servicios básicos y que cuentan con vehículo por CI
		</div>
		<div id="report-19" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-19"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-10">
	        			<th>#</th>
	        			<th>Nombre del CIM</th>
	        			<th>Energia Eléctrica</th>
	        			<th>Agua</th>
	        			<th>Potable</th>
	        			<th>Vertiente</th>
	        			<th>Gas Domiciliario</th>
	        			<th>Alcantarillado</th>
	        			<th>Internet</th>
	        			<th>TV por cable</th>
	        			<th>Teléfono Fijo</th>
	        			<th>Vehículo Propio</th>
	        			<th>Vehículo de Trabajo</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tEn=0; $tAg=0; $tVe=0; $tGa=0; $tAl=0; $tIn=0; $tTv=0; $tTeF=0; $tTeM=0; $tVeP=0; $tVeT=0; $tt=0; 
	        	foreach ($data[19] as $key => $list19) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1 ;?></td>
						<td><?php echo $list19['nombre'] ?></td>
			            <td class="text-right"><?php echo $list19['Energia_Electrica']; $tEn+=$list19['Energia_Electrica'];?></td>
			            <td class="text-right"><?php echo $list19['Agua_Potable']; $tAg+=$list19['Agua_Potable'];?></td>
			            <td class="text-right"><?php echo $list19['Vertiente']; $tVe+=$list19['Vertiente'];?></td>
			            <td class="text-right"><?php echo $list19['Gas_Domiciliario']; $tGa+=$list19['Gas_Domiciliario'];?></td>
			            <td class="text-right"><?php echo $list19['Alcantarillado']; $tAl+=$list19['Alcantarillado'];?></td>
			            <td class="text-right"><?php echo $list19['Internet']; $tIn+=$list19['Internet'];?></td>
			            <td class="text-right"><?php echo $list19['Tv_Cable']; $tTv+=$list19['Tv_Cable'];?></td>
			            <td class="text-right"><?php echo $list19['Telefono_Fijo']; $tTeF+=$list19['Telefono_Fijo'];?></td>
			            <td class="text-right"><?php echo $list19['Telefono_Movil']; $tTeM+=$list19['Telefono_Movil'];?></td>
			            <td class="text-right"><?php echo $list19['Vehiculo_Propio']; $tVeP+=$list19['Vehiculo_Propio'];?></td>
			            <td class="text-right"><?php echo $list19['Vehiculo_Medio_Trabajo']; $tVeT+=$list19['Vehiculo_Medio_Trabajo'];?></td>
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
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tEn; ?></td>
	        			<td><?php echo $tAg; ?></td>
	        			<td><?php echo $tVe; ?></td>
	        			<td><?php echo $tGa; ?></td>
	        			<td><?php echo $tAl; ?></td>
	        			<td><?php echo $tIn; ?></td>
	        			<td><?php echo $tTv; ?></td>
	        			<td><?php echo $tTeF; ?></td>
	        			<td><?php echo $tTeM; ?></td>
	        			<td><?php echo $tVeP; ?></td>
	        			<td><?php echo $tVeT; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>

		</div>
	</div>
	<div class="panel panel-default" id="area-20">
		<div class="panel-heading" data-toggle="collapse" data-target="#report-20" data-parent="#reports">20. Número de familias según el medio de transporte que utilizan para llegar al Centro Infantil
		</div>
		<div id="report-20" class="collapse panel-body display">
			<span class="pull-right btn btn-info" id="print-area-20"><b><i class="fa fa-print"></i> Imprimir</b></span>
			<table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
						<th>Nombre del CIM</th>
						<th>A pie</th>
						<th>Micro o bus</th>
						<th>Minibus</th>
						<th>Otro</th>
						<th>Total</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tAp=0; $tMb=0; $tMnb=0; $tOt=0; $tt=0; 
	        	foreach ($data[20] as $key => $list20) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1 ;?></td>
			 			<td><?php echo $list20['nombre']; ?> </td>
             			<td class="text-right"><?php echo $list20['A_pie']; $tAp+=$list20['A_pie']; ?> </td>
             			<td class="text-right"><?php echo $list20['Micro_o_Bus']; $tMb+=$list20['Micro_o_Bus']; ?> </td>
             			<td class="text-right"><?php echo $list20['Minibus']; $tMnb+=$list20['Minibus']; ?> </td>
             			<td class="text-right"><?php echo $list20['Otro']; $tOt+=$list20['Otro']; ?> </td>
             			<td class="text-right"><?php echo $list20['Total']; $tt+=$list20['Total']; ?> </td>
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
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tAp; ?></td>
	        			<td><?php echo $tMb; ?></td>
	        			<td><?php echo $tMnb; ?></td>
	        			<td><?php echo $tOt; ?></td>
	        			<td><?php echo $tt; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>


		</div>
	</div>
	<div class="panel panel-default" id="area-21">
	    <div class="panel-heading" data-toggle="collapse" data-target="#report-21" data-parent="#reports">21. Número de parientes según tipo de trabajo por CI</div>
	    <div id="report-21" class="collapse panel-body display">
	    	<span class="pull-right btn btn-info" id="print-area-21"><b><i class="fa fa-print"></i> Imprimir</b></span>
	        <table class="table table-bordered table-responsive display">
	        	<thead>
	        		<tr class="inner-20">
	        			<th>#</th>
						<th>Nombre del CIM</th>
						<th>Permanente</th>
						<th>Eventual</th>
						<th>Desempleado</th>
						<th>Independiente formal</th>
						<th>Independiente informal</th>
						<th>Total</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        	<?php $tPe=0; $tEv=0; $tDe=0; $tIf=0; $tIi=0; $tOt=0; $tt=0; 
	        	foreach ($data[21] as $key => $list21) { ?>
	        		<tr>
	        			<td class="text-center"><?php echo $key+1 ;?></td>
	        			<td><?php echo $list21['nombre']; ?> </td>
            			<td class="text-right"><?php echo $list21['Permanente']; $tPe+=$list21['Permanente']; ?> </td>
            			<td class="text-right"><?php echo $list21['Eventual']; $tEv+=$list21['Eventual']; ?> </td>
            			<td class="text-right"><?php echo $list21['Desempleado']; $tDe+=$list21['Desempleado']; ?> </td>
            			<td class="text-right"><?php echo $list21['Independiente_formal']; $tIf+=$list21['Independiente_formal']; ?> </td>
            			<td class="text-right"><?php echo $list21['Independiente_informal']; $tIi+=$list21['Independiente_informal']; ?> </td>
            			<td class="text-right"><?php echo $list21['Total']; $tt+=$list21['Total']; ?> </td>
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
	        		</tr>
	        		<tr class="strong-right">
	        			<td></td>
		        		<td>TOTAL</td>
	        			<td><?php echo $tPe; ?></td>
	        			<td><?php echo $tEv; ?></td>
	        			<td><?php echo $tDe; ?></td>
	        			<td><?php echo $tIf; ?></td>
	        			<td><?php echo $tIi; ?></td>
	        			<td><?php echo $tOt; ?></td>
	        		</tr>
	        	</tfoot>
	        </table>
	    </div>
	</div>-->
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
        //"aLengthMenu": [ [25, 50, 100, 200, -1], [25, 50, 100, 200, "All"]],
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
		    }
		}

    });


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
	$("#print-area-5").click(function (){
		print_area('area-5');
	});
	$("#print-area-6").click(function (){
		print_area('area-6');
	});
	
	$("#print-area-7").click(function (){
		print_area('area-7');
	});
	
	$("#print-area-8").click(function (){
		print_area('area-8');
	});
	
	$("#print-area-9").click(function (){
		print_area('area-9');
	});
	
	$("#print-area-10").click(function (){
		print_area('area-10');
	});
	
	$("#print-area-11").click(function (){
		print_area('area-11');
	});
	
	$("#print-area-12").click(function (){
		print_area('area-12');
	});
	
	$("#print-area-13").click(function (){
		print_area('area-13');
	});
		
	$("#print-area-14").click(function (){
		print_area('area-14');
	});
		
	$("#print-area-15").click(function (){
		print_area('area-15');
	});
		
	$("#print-area-16").click(function (){
		print_area('area-16');
	});
		
	$("#print-area-17").click(function (){
		print_area('area-17');
	});
		
	$("#print-area-18").click(function (){
		print_area('area-18');
	});
		
	$("#print-area-19").click(function (){
		print_area('area-19');
	});
		
	$("#print-area-20").click(function (){
		print_area('area-20');
	});
		
	$("#print-area-21").click(function (){
		print_area('area-21');
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

	
});

</script>