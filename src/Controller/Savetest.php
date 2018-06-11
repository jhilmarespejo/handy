<?php 

	namespace App\Controller;
	use App\Controller\AppController;


class TestController extends AppController{

	public function index(){
		//$articles = $this->Articles->find('all');
		$this->set(compact('test'));
	}
}



?>