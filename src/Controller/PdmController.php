<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;


class PdmController extends AppController
{
	public function index(){
	}

	public function add(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);;
		$pdm = $this->Pdm->newEntity();
		if($this->request->is('post')){
			
			$this->request->data['ind_institucional'] = json_encode($this->request->data['ind_institucional']) ;
			$this->request->data['ind_pedagogico'] = json_encode($this->request->data['ind_pedagogico']);
			$this->request->data['ind_comunidad'] = json_encode($this->request->data['ind_comunidad']);

			$this->request->data['prop_institucional'] = json_encode($this->request->data['prop_institucional']) ;
			$this->request->data['prop_pedagogico'] = json_encode($this->request->data['prop_pedagogico']);
			$this->request->data['prop_comunidad'] = json_encode($this->request->data['prop_comunidad']);
			
			$pdm = $this->Pdm->patchEntity($pdm, $this->request->data);
			if ($this->Pdm->save($pdm)) {
				$this->Flash->success(__('Datos guardados correctamente.'));
				return $this->redirect(['action' => 'add']);
				
			}
		}
		$this->set('data', [$pdm, $cims]);
		//pr($cims);exit;
	}
	public function reports(){
		$conn = ConnectionManager::get('default');
		$stmt1 = $conn->query("call reports('report5')");
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