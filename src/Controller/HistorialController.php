<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;

class HistorialController extends AppController
{
		//var $uses = array('Datosnino');
	//var $test = 'T E S T';
	public function index(){

	}

	public function reports(){

			//echo 'xxxxx'; exit;
		if ($this->request->is('post')) {
			$gestion = $this->request->data['gestion'];
			$periodo = $this->request->data['periodo'];
			
			//echo $gestion.', '.$periodo;
			$this->viewBuilder()->layout(false);
			echo $this->render('/Historial/reports');
			exit;
		}

        /*$conn = ConnectionManager::get('default');
        $stmt = $conn->query('SELECT * FROM h_aportes_gastos');
        $ninos = $stmt->fetchAll('assoc');
        //pr($ninos); exit;
        $this->set(compact('ninos'));*/
	}

	public function beforeFilter(Event $event)
	{
		//if( $this->Auth->user('role') == 'admin' ){
			$this->Auth->allow(['index', 'add', 'edit', 'reports']);
		/*} else {
			$this->Auth->deny(['index', 'add', 'edit', 'reports']);
			return $this->redirect('/');
		}*/
	}
}