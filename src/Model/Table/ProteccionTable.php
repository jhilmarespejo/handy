<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class ProteccionTable extends Table{
	var $name = 'Proteccion';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}
	
	/*public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('id_cim')
			->notEmpty('nombre')
			->notEmpty('responsable');
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');
	}*/
}//class

?>