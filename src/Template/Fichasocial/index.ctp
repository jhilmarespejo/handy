<!-- index FICHA SOCIAL controller-->
<!-- <?php 
if(!isset($sent[1]) ){
	$tab='';
}else{
	$tab = $sent[1];
}
if(!isset($datosNino)){
	$datosNino = 'null';
}

if( isset($dataSent) ){
	$sent[0] = $dataSent;
}
?> -->

<h2 class="title2 text-center">Registro de la ficha social</h2>

<div class="col-xs-16 col-sm-12 col-md-12 col-lg-12 fadeInUp animated">
	<div id="loading" class="text-center hidden">
		Procesando...
		<br/>
		<?php echo $this->Html->image('loading.gif', ['class' => 'indicator'])?>
		<br/><br/>
	</div>
	<h4 id="msg-box-danger" class='alert-danger text-center hidden'>Rellene los espacios vacíos</h4>
	<div id="content">
	    <ul id="tabs" class="nav nav-tabs">
			<li class="datos_nino active text-center"> <a href="#datos_nino" data-toggle="tab">Datos del niño@</a></li>

			<li class="sit_familiar text-center"><a href="#sit_familiar" data-toggle="tab">Situaci&oacute;n familiar</a></li>

			<li class="vivienda text-center"><a href="#vivienda" data-toggle="tab">Vivienda</a></li>

			<li class="asp_economicos  text-center"><a href="#asp_economicos" data-toggle="tab">Aspectos econ&oacute;micos</a></li>

			<li class="consideraciones text-center"><a href="#consideraciones" data-toggle="tab">Consideraciones</a></li>
	    </ul>
		
	    <?php echo $this->Form->create('', ['url'=>[ 'action'=>'add'], 'id'=>"datosnino"] );?>
	    <div id="my-tab-content" class="tab-content" >
	        <div class="tab-pane <?php echo ($tab=='')? 'active':''; ?>" id="datos_nino">
	            <?php echo $this->element('fichasocial/datosnino', ['cims' => $cims]); ?>
	        </div>
	        <div class="tab-pane" id="sit_familiar">
				<?php echo $this->element('fichasocial/situacionfamiliar'); ?>
	        </div>
	        <div class="tab-pane" id="vivienda">
				<?php echo $this->element('fichasocial/vivienda' ); ?>
	        </div>
	        <div class="tab-pane" id="asp_economicos">
				<?php echo $this->element('fichasocial/aspectoseconomicos'); ?>
	        </div>
	        <div class="tab-pane" id="consideraciones">
				<?php echo $this->element('fichasocial/consideraciones'); ?>
	        </div>
	    </div>
	    <?php echo $this->Form->end(); ?>
	</div>
</div>
<!-- <?php pr($this->request->params['pass'][0]); ?> -->
