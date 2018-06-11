<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class MemosTable extends Table
{
	/*public function isOwnedBy($articleId, $userId)
	{
		return $this->exists(['id' => $articleId, 'user_id' => $userId]);
	}*/

	/*public function validationDefault(Validator $validator)
	{
		return $validator
		->notEmpty('username', 'A username is required')
		->notEmpty('password', 'A password is required')
		->notEmpty('role', 'A role is required');*/
		/*->add('role', 'inList', [
			'rule' => ['inList', ['admin', 'article', 'author']],
			'message' => 'Please enter a valid role'
			]);*/
	//}
}
?>