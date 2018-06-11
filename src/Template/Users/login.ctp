<!-- File: src/Template/Users/login.ctp -->
<br/><br/>
<div class="users form text-center">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('Por favor ingrese los datos de Ususario y Contraseña') ?></legend>
		<div class="text-form">
			<label>Nombre de usuario:</label>
			<?= $this->Form->input('username', ['label' => false]); ?>
		</div><br>
		<div class="text-form">
			<label>Contraseña</label>
			<?= $this->Form->input('password', ['label' => false]) ?>
		</div>
	</fieldset><br>
	<?= $this->Form->button(__('Ingresar'),['class' => 'btn btn-save btn-lg']); ?>
	<?= $this->Form->end() ?>
</div>
