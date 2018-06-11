<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class FamiliaresTable extends Table{
	var $name = 'Familiares';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	
	/*OK public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('nombres');
			->notEmpty('id_cim')
			->notEmpty('fecha_registro')
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');
	}*/
}//class

?>