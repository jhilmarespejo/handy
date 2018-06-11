<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EmployeesTable extends Table{


	/*public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}*/

	public function validationDefault(Validator $validator){ 
		$validator = new Validator();
		$validator
		->notEmpty('name', 'msj de error!')
		->notEmpty('email', 'msj de error!')
		->notEmpty('companyName', 'msj de error!')
		->notEmpty('designation', 'msj de error!');
		return $validator;
	}

}

?>
