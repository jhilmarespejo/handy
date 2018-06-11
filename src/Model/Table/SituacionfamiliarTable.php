<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class SituacionfamiliarTable extends Table{
	//var $name = 'Sitfam';


	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	
	/*OK public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('nino_vive_con')
			->notEmpty('ausencia_madre')
			->notEmpty('ausencia_padre')
			->notEmpty('ausencia_ambos')
			->notEmpty('ambiente_familiar');
	}*/
}//class

?>