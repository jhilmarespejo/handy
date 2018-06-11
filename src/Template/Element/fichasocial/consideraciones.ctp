<?//php pr($consideraciones);?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="group10 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInRight">
		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-12">
			RESULTADOS		
			<div id="result-cons" class="col-lg-12">
				
			</div>
				
		</div>
		<div class="text-center">
			<?php echo $this->Form->button("Ver Resultados de la evaluación", ['class' => 'btn btn-warning btn-md']); ?>
		</div>
		<br> <br>
	</div><!--div group 10-->
	<div class="group9 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInRight">
		<div class="form-group">
			<?php echo $this->Form->hidden('id_nino', ['id'=>'id-nino']);?>
			<?php echo $this->Form->input('historia_social', ['label' => ['text' => 'Historia social'], 'class'=>'form-control', 'type' => 'text', 'id' => 'historia-social'] );?>
		</div>
		<!-- <div class="form-group">
			<?//php echo $this->Form->input('diagnostico_social', ['label' => ['text' => 'Diagnóstico social'], 'class'=>'form-control', 'type' => 'text', 'id' => 'diagnostico-social-social'] );?>
		</div> -->
		<div class="form-group">
			<?php echo $this->Form->input('acciones_realizar', ['label' => ['text' => 'Acciones a realizar'], 'class'=>'form-control', 'type' => 'text', 'id' => 'acciones-realizar'] );?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('seguimiento_trabajo_social', ['label' => ['text' => 'Seguimiento (trabajo social)'], 'class'=>'form-control', 'type' => 'text', 'id' => 'seguimiento-trabajo-social'] );?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('seguimiento_psicologia', ['label' => ['text' => 'Seguimiento (psicología)'], 'class'=>'form-control', 'type' => 'text', 'id' => 'seguimiento-psicologia'] );?>
		</div>

		<div class="form-group">
			<?php echo $this->Form->input('observaciones', ['label' => ['text' => 'Observaciones'], 'class'=>'form-control', 'type' => 'text', 'id' => 'observaciones'] );?>
		</div>
		<br>

	</div><!--div group 9-->
	
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 text-center ">
		<!-- <?php
		echo $this->Html->link('Finalizar y guardar la información', ['controller' => 'Fichasocial', 'action' => 'saveAll'], ['class' => 'btn btn-save btn-lg', 'id' => 'save-all'] );
		?> -->
		 <?php echo $this->Form->button('Finalizar y guardar la información', ['class'=>'btn btn-save btn-lg']); ?>
	</div>
</div>

