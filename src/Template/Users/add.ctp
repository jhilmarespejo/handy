<!-- src/Template/Users/add.ctp -->
<!--<div class="users form">
	<?//= $this->Form->create($user) ?>
	<fieldset>
		<legend>Nuevo Usuario</legend>
		<?//= $this->Form->input('username', ['label' => 'Nombre de Usuario']) ?>
		<?//= $this->Form->input('password') ?>
		<?//= $this->Form->input('role', ['options' => ['admin' => 'Admin', 'ficha' => 'Ficha', 'article' => 'Article']	]) ;?>
	</fieldset>
		<?//= $this->Form->button(__('Submit')); ?>
		<?//= $this->Form->end() ?>
</div>-->

<?php
	$options_name = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	$options_id = [[ 'text' => '', 'value' => '', 'selected', 'disabled']];	
	
	foreach ($cims as $key => $cim) {
		$options_name[$key+1]['text'] = $cim->nombre;
		$options_name[$key+1]['value'] = $cim->id_cim;
}?>

<div class="users form">
	<?= $this->Form->create($user) ?>
	<fieldset class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<legend>Nuevo Usuario</legend>
		<div class="form-group">
			<?php echo $this->Form->input('username', ['label' => 'Nombre de Usuario', 'class'=>'form-control', 'type' => 'text', 'required'] );?>
		</div>	
		<div class="form-group">
			<?php echo $this->Form->input('password', ['label' => 'Password', 'class'=>'form-control', 'type' => 'password', 'required'] );?>
		</div>
		
		<div class="form-group">
			<label>Rol</label>
			<?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'Admin', 'value' => 'admin'],[ 'text' => 'Educadora', 'value' => 'educadora'],[ 'text' => 'Trabajo social', 'value' => 'Trabajo social']]; echo $this->Form->select('role', $options, ['class'=>'form-control', 'required']);?>
		</div>
		<!--<div class="form-group">
			<label>Centro Infantil al que pertenece</label>
			<?php// echo $this->Form->select('nombre', $options_name, ['class'=>'form-control', 'id'=>'id-centro-infantil']);?>
		</div>-->
		<?= $this->Form->button(__('Guardar datos')); ?>
		<?= $this->Form->end() ?>
	</fieldset>
</div>
