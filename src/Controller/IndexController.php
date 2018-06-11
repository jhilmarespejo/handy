<?php 
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;

class IndexController extends AppController
{
	public function index(){

	}

	public function reports(){
		/*$this->request->data  = 'reports';
		$UserReports= 'UserReports';
		$this->Auth->user->role = 'UserReports';*/
		//pr( $this->request->reports );
		/*$this->set($UserReports);*/

		$this->request->session()->write('Auth.User.role', 'reports');
		//$this->request->session()->read('Config.language');
		//pr( $this->request->data );exit;
		//$this->redirect('/');
		//exit;
	}
}
