<?php 
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;

class ModeloController extends AppController
{
		//var $uses = array('Datosnino');
	//var $test = 'T E S T';
	public function index(){
	}

	public function add(){
		if ($this->request->is('post')) {
			//pr($this->request->data);exit;

			$modelo = TableRegistry::get('Modelo');
			$modeloEntities = $modelo->newEntities($this->request->data);
			foreach ($modeloEntities as $modeloEntity) {
		    	if($modelo->save($modeloEntity)){
		    		$success = true;
		    	} else {
		    		$success = false;
		    	}
			}
			if($success){
				$this->Flash->success(__('Guardado correctamente'));
				return $this->redirect(['action' => 'add']);
			} else {
				$this->Flash->error(__('Error al guardar los datos'));
				return $this->redirect(['action' => 'add']);
			}
		}

		$this->loadmodel('Cim');
		$cim = $this->Cim->find()->select(['id_cim','nombre'])->order('nombre')->order('nombre')->where(['fecha_cierre is Null']);
		$this->set('sent',[$cim]);	
	}
	public function reports(){
		$conn = ConnectionManager::get('default');

        $stmt1 = $conn->query('call reports("report16")');
        $data1 = $stmt1->fetchAll('assoc');
        unset($stmt1);
        $this->set('data', [null, $data1]);
	}

	public function beforeFilter(Event $event) {
        $admin = array('index', 'add', 'reports', 'edit');
        $guest = array('reports');

        if( $this->Auth->user('role') == 'admin' /*|| $this->Auth->user('role') == 'trabajo social' */ ){ 
            if ( !in_array($this->request->action, $admin) ) {
                return $this->redirect(['controller' => 'users', 'action' => 'login']);
            } 
        } else {
            if ( !in_array($this->request->action, $guest) ) {
                $this->Flash->error(__('No tiene autorizado el ingreso'));
                return $this->redirect(['controller' => 'users', 'action' => 'login']);
            } 
        }
    }
}