<?php 
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;

class ActivosController extends AppController
{
	public function index(){

	}

	public function add(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['motivo_cierre is Null']);
		if($this->request->is('post')){
			$date = implode('-', $this->request->data[0]['fecha']);	
			foreach ($this->request->data as $key => $value) {
				$this->request->data[$key]['id_cim'] = $this->request->data['0']['id_cim'];
				$this->request->data[$key]['sala'] = $this->request->data['0']['sala'];
				$this->request->data[$key]['fecha'] = $date;			
			}
			unset($this->request->data['0']);
			pr($this->request->data);	

			$activos = TableRegistry::get('Activos');
			$activosEntities = $activos->newEntities($this->request->data);
			foreach ($activosEntities as $activosEntity) {
		    	$activos->save($activosEntity);
			}
			$this->Flash->success(__('Datos guardados correctamente.'));
			return $this->redirect(['action' => 'add']);
		}
		$this->set('data', [$cims]);
	}

	public function reports(){
		$conn = ConnectionManager::get('default');

        $stmt1 = $conn->query('call reports("report15")');
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
}//class

?>