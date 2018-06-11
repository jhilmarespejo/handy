<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;


class SpdmController extends AppController
{
	public function index(){
	}

	public function add(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
		$spdm = $this->Spdm->newEntity();
		if($this->request->is('post')){
			$spdm = $this->Spdm->patchEntity($spdm, $this->request->data);
			//pr($this->request->data);	exit;

			if ($this->Spdm->save($spdm)) {
				$this->Flash->success(__('Datos guardados correctamente.'));
				return $this->redirect(['action' => 'add']);
			}
		}

		$this->set('data', [$spdm, $cims]);
	}

	public function reports(){
		$conn = ConnectionManager::get('default');

        $stmt1 = $conn->query('call reports("report14")');
        $data1 = $stmt1->fetchAll('assoc');
        unset($stmt1);
        $this->set('data', [null, $data1]);
	}
	public function beforeFilter(Event $event) {
        $admin = array('index', 'add', 'reports');
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