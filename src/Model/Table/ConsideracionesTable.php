<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class ConsideracionesTable extends Table{
	var $name = 'Consideraciones';


	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		
	}

	
	
	/*public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('historia_social');
			/*->notEmpty('id_cim')
			->notEmpty('fecha_registro')
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');
	}*/
}//class

?>