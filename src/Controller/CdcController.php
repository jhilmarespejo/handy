<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;


class CdcController extends AppController
{
	public function index(){
	}

	public function add() {
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->where(['fecha_cierre is Null'])->order('nombre');
		$cdc = $this->Cdc->newEntity();
		if($this->request->is('post')){
			//pr($this->request->data);	exit;
			$cdc = $this->Cdc->patchEntity($cdc, $this->request->data['cdc']);

			if ($this->Cdc->save($cdc)) {
				 $saveCdc = true;

				/*FALTA PONER LE VALOR DE $entity['cdc_id'] CON EL ID DEL ULTIMO CDC GUARDADO*/
				$nominaCdc = TableRegistry::get('Nominacdc');
                $entities = $nominaCdc->newEntities($this->request->data['nominacdc']);
                    foreach ($entities as $entity) {
                    	if($entity['nombres'] != ''){
	                    	$entity['cdc_id'] = $cdc->id;
	                        $nominaCdc->save($entity);
	                        $saveNomina = true;
                    	} else{
                    		$saveNomina = false;
                    	}
                    }
                if($saveNomina || $saveCdc){
					$this->Flash->success(__('Datos guardados correctamente'));
					return $this->redirect(['action' => 'add']);
                } else {
                	$this->Flash->error(__('Error al guardar los datos'));
					return $this->redirect(['action' => 'add']);
                }

			}
		}
		$this->set('data', [$cdc, $cims]);
		
	}
	public function reports(){
		$conn = ConnectionManager::get('default');
		$stmt1 = $conn->query("call reports('report3')");
		$data1 = $stmt1->fetchAll('assoc');
		unset($stmt1);

		$stmt2 = $conn->query("call reports('report4')");
		$data2 = $stmt2->fetchAll('assoc');
		unset($stmt2);

		$this->set('data', [null, $data1, $data2]);
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

