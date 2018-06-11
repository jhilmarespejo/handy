<h1>Añadir EMployees</h1>
<?php
	echo $this->Form->create();
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('companyName');
		echo $this->Form->input('designation');

		echo $this->Form->input('Employees.name', array('error' => array('date' => __('Se debe agregar una fecha'))) );

		echo $this->Form->button(__('Guardar datos'));
	echo $this->Form->end();
?>
