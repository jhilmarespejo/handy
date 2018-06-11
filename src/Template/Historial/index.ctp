<h3 class="title2 text-center">Historial de aportes y gastos</h3><br/>


<div>
	<?php echo $this->Form->create('', ['url' => ['action' => 'reports'], 'id' => 'frm-aportes-gastos']); ?>
	<fielset>
		<legend>Selecciones las opciones</legend>
		<div class="form-group  col-xs-12 col-sm-10 col-md-4 col-lg-6">
				<label for="">Gestión</label>
				<?php $dep = [[ 'text' => '2015', 'value' => '2015'],[ 'text' => '2016', 'value' => '2016']];	?>
				<?php echo $this->Form->select('gestion', $dep, ['class'=>'form-control', 'id'=>'gestion']);?>
		</div>
		<div class="form-group  col-xs-12 col-sm-10 col-md-4 col-lg-6">
				<label for="">Periodo</label>
				<?php $dep = [[ 'text' => 'Febrero', 'value' => 'Febrero'],[ 'text' => 'Marzo', 'value' => 'Marzo'],[ 'text' => 'Abril', 'value' => 'Abril'],[ 'text' => 'Mayo', 'value' => 'Mayo'],[ 'text' => 'Junio', 'value' => 'Junio'],[ 'text' => 'Julio', 'value' => 'Julio'],[ 'text' => 'Agosto', 'value' => 'Agosto'],[ 'text' => 'Septiembre', 'value' => 'Septiembre'],[ 'text' => 'Octubre', 'value' => 'Octubre'],[ 'text' => 'Noviembre', 'value' => 'Noviembre']];	?>
				<?php echo $this->Form->select('periodo', $dep, ['class'=>'form-control', 'id'=>'periodo']);?>
		</div>
	</fielset>
	<?php echo $this->Form->button('OK'); ?>
	<?php echo $this->Form->end() ?>
</div>


<div id='aportes-gastos'> </div>

