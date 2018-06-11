<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ActivosTable extends Table{
	//var $name = 'Familiares';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		
	}

}
