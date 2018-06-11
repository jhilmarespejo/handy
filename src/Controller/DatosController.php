<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;



class DatosController extends AppController
{
	public function index(){
	}

	public function search(){
		if($this->request->is('post')){}
	}
}

?>