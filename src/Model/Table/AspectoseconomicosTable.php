<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class AspectoseconomicosTable extends Table{
	var $name = 'Aspectoseconomicos';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	/*
	public function validationDefault(Validator $validator)
	{
		$validator = new Validator();
		return $validator
			->notEmpty('alimentacion');
			/*->notEmpty('id_cim')
			->notEmpty('fecha_registro')
			->notEmpty('paterno')
			->notEmpty('materno')
			->notEmpty('nombres');
	}*/
}//class

?>