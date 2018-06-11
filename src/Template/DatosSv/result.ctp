<table class="table table-bordered table-hover table-responsive display">

	<thead>
		<tr class="text-center">
			<th> mes </th>
			<th> paterno </th>
			<th> materno </th>
			<th> nombre1 </th>
			<th> 2nombre </th>
			<!-- <th> sexo </th> -->
			<th> fec. nac. </th>
			<!-- <th> edad </th> -->
			<th> cim </th>
			<th> peso </th>
			<th> talla </th>
			<th> peso talla </th>
			<th> talla dad </th>
			<th> mot. gruesa</th>
			<th> mot. fina </th>
			<th> aud. leng </th>
			<th> per soc </th>
			<th> total </th>
			<th> obs </th>
			<th> iras </th>
			<th> edas </th>
			<th> malt. inf</th>
			<!-- <th> fec.actual </th>	 -->
			<!-- <th> EDITAR </th>	 -->
		</tr>
	</thead>
	<tbody>
	<?php

	 foreach ($datosSv as $datoSv) { ?>
	 	<!-- <?//php echo $this->Form->create($datoSv) ?> -->
		<tr>
			<td><?php echo $datoSv->mes; ?> </td> 
			<td><?php echo $datoSv->paterno; ?> </td>
			<td><?php echo $datoSv->materno; ?> </td>
			<td><?php echo $datoSv->nombre1; ?> </td>
			<td><?php echo $datoSv->nombre2; ?> </td>
		<!-- 	<td><?php echo $datoSv->sexo; ?> </td> -->
			<td><?php echo ( !empty($datoSv->fecha_nacimiento) )? $datoSv->fecha_nacimiento:''; ?> </td>
			<!-- <td><?php echo $datoSv->edad; ?> </td> -->
			<td><?php echo $datoSv->cim; ?> </td>
			<td><?php echo $datoSv->peso; ?> </td>
			<td><?php echo $datoSv->talla; ?> </td>
			<td><?php echo $datoSv->peso_talla; ?> </td>
			<td><?php echo $datoSv->talla_dad; ?> </td>
			<td><?php echo $datoSv->motricidad_gruesa; ?> </td>
			<td><?php echo $datoSv->motricidad_fina; ?> </td>
			<td><?php echo $datoSv->audicion_lenguaje; ?> </td>
			<td><?php echo $datoSv->personal_social; ?> </td>
			<td><?php echo $datoSv->total; ?> </td>
			<td><?php echo $datoSv->obs; ?> </td>
			<td><?php echo $datoSv->iras; ?> </td>
			<td><?php echo $datoSv->edas; ?> </td>
			<td><?php echo $datoSv->maltrato_infantil; ?> </td>
			<!-- <td><?php echo $datoSv->fecha_actual; ?> </td> -->
			<!-- <td><?//php echo  $this->Form->button('Guardar', ['class' => 'save', 'id' => 'edit_row_'.$datoSv->id]);?></td> -->
		</tr>
		<!-- <?//php echo $this->Form->end() ?> -->
	<?php } ?>
	</tbody>
</table>

<!-- <?//php pr($datosSv);?> -->

<script type="text/javascript">
	
	$('.save').click(function(){

	});

	$('table.display').DataTable( {
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




// =SI( H2=Hoja2!$B$2;Hoja2!$E$2; SI( H2=Hoja2!$B$3;Hoja2!$E$3;SI( H2=Hoja2!$B$4;Hoja2!$E$4;SI( H2=Hoja2!$B$4;Hoja2!$E$4;SI( H2=Hoja2!$B$5;Hoja2!$E$5;SI( H2=Hoja2!$B$6;Hoja2!$E$6;SI( H2=Hoja2!$B$7;Hoja2!$E$7;SI( H2=Hoja2!$B$8;Hoja2!$E$8;SI( H2=Hoja2!$B$9;Hoja2!$E$9;SI( H2=Hoja2!$B$10;Hoja2!$E$10;SI( H2=Hoja2!$B$11;Hoja2!$E$11;SI( H2=Hoja2!$B$12;Hoja2!$E$12;SI( H2=Hoja2!$B$13;Hoja2!$E$13;SI( H2=Hoja2!$B$14;Hoja2!$E$14;SI( H2=Hoja2!$B$15;Hoja2!$E$15;SI( H2=Hoja2!$B$16;Hoja2!$E$16;SI( H2=Hoja2!$B$17;Hoja2!$E$17;SI( H2=Hoja2!$B$18;Hoja2!$E$18;SI( H2=Hoja2!$B$19;Hoja2!$E$19;SI( H2=Hoja2!$B$20;Hoja2!$E$20;SI( H2=Hoja2!$B$21;Hoja2!$E$21;SI( H2=Hoja2!$B$22;Hoja2!$E$22;SI( H2=Hoja2!$B$23;Hoja2!$E$23;SI( H2=Hoja2!$B$24;Hoja2!$E$24;SI( H2=Hoja2!$B$25;Hoja2!$E$25;SI( H2=Hoja2!$B$26;Hoja2!$E$26;SI( H2=Hoja2!$B$27;Hoja2!$E$27;SI( H2=Hoja2!$B$28;Hoja2!$E$28;SI( H2=Hoja2!$B$29;Hoja2!$E$29;SI( H2=Hoja2!$B$30;Hoja2!$E$30;SI( H2=Hoja2!$B$31;Hoja2!$E$31;SI( H2=Hoja2!$B$32;Hoja2!$E$32;SI( H2=Hoja2!$B$33;Hoja2!$E$33;SI( H2=Hoja2!$B$34;Hoja2!$E$34;SI( H2=Hoja2!$B$35;Hoja2!$E$35;SI( H2=Hoja2!$B$36;Hoja2!$E$36;SI( H2=Hoja2!$B$37;Hoja2!$E$37;SI( H2=Hoja2!$B$38;Hoja2!$E$38;SI( H2=Hoja2!$B$39;Hoja2!$E$39;SI( H2=Hoja2!$B$40;Hoja2!$E$40;SI( H2=Hoja2!$B$41;Hoja2!$E$41;SI( H2=Hoja2!$B$42;Hoja2!$E$42;SI( H2=Hoja2!$B$43;Hoja2!$E$43;SI( H2=Hoja2!$B$44;Hoja2!$E$44;SI( H2=Hoja2!$B$45;Hoja2!$E$45;SI( H2=Hoja2!$B$46;Hoja2!$E$46;SI( H2=Hoja2!$B$47;Hoja2!$E$47;SI( H2=Hoja2!$B$48;Hoja2!$E$48;SI( H2=Hoja2!$B$49;Hoja2!$E$49;SI( H2=Hoja2!$B$50;Hoja2!$E$50;SI( H2=Hoja2!$B$51;Hoja2!$E$51;SI( H2=Hoja2!$B$52;Hoja2!$E$52;SI( H2=Hoja2!$B$53;Hoja2!$E$53;SI( H2=Hoja2!$B$54;Hoja2!$E$54;SI( H2=Hoja2!$B$55;Hoja2!$E$55;SI( H2=Hoja2!$B$56;Hoja2!$E$56;SI( H2=Hoja2!$B$57;Hoja2!$E$57;SI( H2=Hoja2!$B$58;Hoja2!$E$58;SI( H2=Hoja2!$B$59;Hoja2!$E$59;SI( H2=Hoja2!$B$60;Hoja2!$E$60;SI( H2=Hoja2!$B$61;Hoja2!$E$61;SI( H2=Hoja2!$B$62;Hoja2!$E$62;SI( H2=Hoja2!$B$63;Hoja2!$E$63;SI( H2=Hoja2!$B$64;Hoja2!$E$64;SI( H2=Hoja2!$B$65;Hoja2!$E$65;SI( H2=Hoja2!$B$66;Hoja2!$E$66;SI( H2=Hoja2!$B$67;Hoja2!$E$67;SI( H2=Hoja2!$B$68;Hoja2!$E$68;SI( H2=Hoja2!$B$69;Hoja2!$E$69;SI( H2=Hoja2!$B$70;Hoja2!$E$70;SI( H2=Hoja2!$B$71;Hoja2!$E$71;SI( H2=Hoja2!$B$72;Hoja2!$E$72;SI( H2=Hoja2!$B$73;Hoja2!$E$73;SI( H2=Hoja2!$B$74;Hoja2!$E$74;SI( H2=Hoja2!$B$75;Hoja2!$E$75;SI( H2=Hoja2!$B$76;Hoja2!$E$76;SI( H2=Hoja2!$B$77;Hoja2!$E$77;SI( H2=Hoja2!$B$78;Hoja2!$E$78;SI( H2=Hoja2!$B$79;Hoja2!$E$79;SI( H2=Hoja2!$B$80;Hoja2!$E$80;SI( H2=Hoja2!$B$81;Hoja2!$E$81;SI( H2=Hoja2!$B$82;Hoja2!$E$82;SI( H2=Hoja2!$B$84;Hoja2!$E$84;"xx")))))))))))))))))))))))  ))))))))))))))))))))))))))))))))))))))))))))))))))))))))))) )





// =SI( H2=Hoja2!$B$2;Hoja2!$E$2; SI( H2=Hoja2!$B$3;Hoja2!$E$3;SI( H2=Hoja2!$B$4;Hoja2!$E$4;SI( H2=Hoja2!$B$4;Hoja2!$E$4;SI( H2=Hoja2!$B$5;Hoja2!$E$5;SI( H2=Hoja2!$B$6;Hoja2!$E$6;SI( H2=Hoja2!$B$7;Hoja2!$E$7;SI( H2=Hoja2!$B$8;Hoja2!$E$8;SI( H2=Hoja2!$B$9;Hoja2!$E$9;SI( H2=Hoja2!$B$10;Hoja2!$E$10;SI( H2=Hoja2!$B$11;Hoja2!$E$11;SI( H2=Hoja2!$B$12;Hoja2!$E$12;SI( H2=Hoja2!$B$13;Hoja2!$E$13;SI( H2=Hoja2!$B$14;Hoja2!$E$14;SI( H2=Hoja2!$B$15;Hoja2!$E$15;SI( H2=Hoja2!$B$16;Hoja2!$E$16;SI( H2=Hoja2!$B$17;Hoja2!$E$17;SI( H2=Hoja2!$B$18;Hoja2!$E$18;SI( H2=Hoja2!$B$19;Hoja2!$E$19;SI( H2=Hoja2!$B$20;Hoja2!$E$20;SI( H2=Hoja2!$B$21;Hoja2!$E$21;SI( H2=Hoja2!$B$22;Hoja2!$E$22;SI( H2=Hoja2!$B$23;Hoja2!$E$23;SI( H2=Hoja2!$B$24;Hoja2!$E$24;SI( H2=Hoja2!$B$25;Hoja2!$E$25;SI( H2=Hoja2!$B$26;Hoja2!$E$26;SI( H2=Hoja2!$B$27;Hoja2!$E$27;SI( H2=Hoja2!$B$28;Hoja2!$E$28;SI( H2=Hoja2!$B$29;Hoja2!$E$29;SI( H2=Hoja2!$B$30;Hoja2!$E$30;SI( H2=Hoja2!$B$31;Hoja2!$E$31;SI( H2=Hoja2!$B$32;Hoja2!$E$32;SI( H2=Hoja2!$B$33;Hoja2!$E$33;SI( H2=Hoja2!$B$34;Hoja2!$E$34;SI( H2=Hoja2!$B$35;Hoja2!$E$35;SI( H2=Hoja2!$B$36;Hoja2!$E$36;SI( H2=Hoja2!$B$37;Hoja2!$E$37;SI( H2=Hoja2!$B$38;Hoja2!$E$38;SI( H2=Hoja2!$B$39;Hoja2!$E$39;SI( H2=Hoja2!$B$40;Hoja2!$E$40;SI( H2=Hoja2!$B$41;Hoja2!$E$41;SI( H2=Hoja2!$B$42;Hoja2!$E$42;SI( H2=Hoja2!$B$43;Hoja2!$E$43;SI( H2=Hoja2!$B$44;Hoja2!$E$44;SI( H2=Hoja2!$B$45;Hoja2!$E$45;SI( H2=Hoja2!$B$46;Hoja2!$E$46;SI( H2=Hoja2!$B$47;Hoja2!$E$47;SI( H2=Hoja2!$B$48;Hoja2!$E$48;SI( H2=Hoja2!$B$49;Hoja2!$E$49;SI( H2=Hoja2!$B$50;Hoja2!$E$50;SI( H2=Hoja2!$B$51;Hoja2!$E$51;SI( H2=Hoja2!$B$52;Hoja2!$E$52;SI( H2=Hoja2!$B$53;Hoja2!$E$53;SI( H2=Hoja2!$B$54;Hoja2!$E$54;SI( H2=Hoja2!$B$55;Hoja2!$E$55;SI( H2=Hoja2!$B$56;Hoja2!$E$56;SI( H2=Hoja2!$B$57;Hoja2!$E$57;SI( H2=Hoja2!$B$58;Hoja2!$E$58;SI( H2=Hoja2!$B$59;Hoja2!$E$59;SI( H2=Hoja2!$B$60;Hoja2!$E$60; ))))))))))))))))))))))))))))))))))))))))))))))))))))))))))) )



// =SI( H3313=Hoja2!$B$61;Hoja2!$E$61;SI( H3313=Hoja2!$B$62;Hoja2!$E$62;SI( H3313=Hoja2!$B$63;Hoja2!$E$63;SI( H3313=Hoja2!$B$64;Hoja2!$E$64;SI( H3313=Hoja2!$B$65;Hoja2!$E$65;SI( H3313=Hoja2!$B$66;Hoja2!$E$66;SI( H3313=Hoja2!$B$67;Hoja2!$E$67;SI( H3313=Hoja2!$B$68;Hoja2!$E$68;SI( H3313=Hoja2!$B$69;Hoja2!$E$69;SI( H3313=Hoja2!$B$70;Hoja2!$E$70;SI( H3313=Hoja2!$B$71;Hoja2!$E$71;SI( H3313=Hoja2!$B$72;Hoja2!$E$72;SI( H3313=Hoja2!$B$73;Hoja2!$E$73;SI( H3313=Hoja2!$B$74;Hoja2!$E$74;SI( H3313=Hoja2!$B$75;Hoja2!$E$75;SI( H3313=Hoja2!$B$76;Hoja2!$E$76;SI( H3313=Hoja2!$B$77;Hoja2!$E$77;SI( H3313=Hoja2!$B$78;Hoja2!$E$78;SI( H3313=Hoja2!$B$79;Hoja2!$E$79;SI( H3313=Hoja2!$B$80;Hoja2!$E$80;SI( H3313=Hoja2!$B$81;Hoja2!$E$81;SI( H3313=Hoja2!$B$82;Hoja2!$E$82;SI( H3313=Hoja2!$B$84;Hoja2!$E$84;"xx"))))))))))))))))))))))) 





</script>










<!-- <td><?//php echo $this->Form->input('id', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('mes', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('nombre1', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('nombre2', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('paterno', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('materno', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('sexo', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('fecha_nacimiento', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('cim', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('peso', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('talla', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('peso_talla', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('talla_edad', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('motricidad_gruesa', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('motricidad_fina', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('audicion_lenguaje', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('personal_social', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('total', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('obs', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('iras', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('edas', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('maltrato_infantil', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('edad', ['label' => false, 'class' => '']); ?></td> -->
<!-- <td><?//php echo $this->Form->input('fecha_actual', ['label' => false, 'class' => '']); ?></td> -->