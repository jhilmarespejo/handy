<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class PersonalTable extends Table{
	var $name = 'Personal';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');

		/*$this->belongsTo('Cim', [
			//'foreignKey' => 'id_cim',
		]);*/
	}

	
	public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('id_cim');
			/*->notEmpty('nombre')
			->notEmpty('responsable');
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');*/
	}
}//class

?>