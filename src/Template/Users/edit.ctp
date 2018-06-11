
<h3 class="title2 text-center"> Edicion de datos de Usuario </h3>

<div class="board col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<div class="users form">
		<?php echo $this->Form->create($user) ?>
		<fieldset class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
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
			<div class="pull-left">
				<?php echo  $this->Form->button('Guardar datos', ['class' => 'btn btn-save btn-lg']);?>
			</div>
			<div class="pull-right">
				<?php echo  $this->Html->link('Cancelar', ['controller'=>'users', 'action'=>'index'], ['class' => 'btn btn-danger btn-lg']);?>
			</div>
		</div>

	<?php echo $this->Form->end(); ?>
		</fieldset>
	</div>
</div>