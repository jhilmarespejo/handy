<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ModeloTable extends Table{

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		/*$this->hasMany('Personal', [
			//'foreignKey' => 'id_cim',
		]);*/
	}
}