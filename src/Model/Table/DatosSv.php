<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class DatosSvTable extends Table{
	//var $name = 'Familiares';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		
	}

	/*public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('id_cim')
			->notEmpty('cantidad_educadoras')
			->notEmpty('cantidad_manipuladoras');
	}*/
}
