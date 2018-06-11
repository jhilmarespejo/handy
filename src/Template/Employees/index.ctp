<h1>Employees INDEX</h1>

<?php echo $this->Html->link('Agregar eployee', ['controller' => 'Employees', 'action' => 'save']) ?>


<?//php 

echo $this->Form->create($employ);
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('body');
echo $this->Form->button('Submit');
echo $this->Form->end();

?>