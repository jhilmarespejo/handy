<?php 
/*namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class AportesTable extends Table{
	//var $name = 'Familiares';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	
	public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('mot_gruesa');
			/*->notEmpty('nombre')
			->notEmpty('responsable');
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');*/
	//}
//}//class

?>