<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class DatosninoTable extends Table{
	var $name = 'Datosnino';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	
	/*OK public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('id_nino')
			->notEmpty('id_cim')
			->notEmpty('fecha_registro')
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');
	}*/
}//class

?>