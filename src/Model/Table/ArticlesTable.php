<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table{
	
	 var $name = 'Articles';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	
	public function validationDefault(Validator $validator)
	{ 
		//$validator = new Validator();
		/*return $validator
		->notEmpty('title', 'porfavor llene el campo')
		->notEmpty('body', 'mensaje');*/

		return $validator
		->add('title', 'notEmpty', ['rule' => 'notEmpty','message' => __('You need to provide a title')])
		->add('body', 'notEmpty', ['rule' => 'notEmpty','message' => __('A body is required')]);
	}
}

?>