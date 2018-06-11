<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class NutricionTable extends Table{
	var $name = 'Estadonutricional';

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