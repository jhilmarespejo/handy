<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;


class CimController extends AppController
{
	public function index(){
		$cims = $this->Cim->find('all')->order(['nombre' => 'ASC']);
		$this->set(compact('cims'));
		//pr($cims);exit;
	}

	public function add(){
		$cims = $this->Cim->newEntity();
		if($this->request->is('post')){
			$cims = $this->Cim->patchEntity($cims, $this->request->data);

			if ($this->Cim->save($cims)) {
				$this->Flash->success(__('Datos guardados correctamente.'));
				return $this->redirect(['action' => 'add']);
			}
		} else {
			//$this->Flash->error(__('Error al Guardar los datos. Intente nuevamente .')); 
			//$this->set('cims', $cims);
		}
		$this->set('cims', $cims);
	}
	public function edit($id_cim = null){

		$cim = $this->Cim->get($id_cim);
		if ($this->request->is(['post', 'put'])) {
			if( empty($this->request->data['fecha_cierre']) ){
				$this->request->data['fecha_cierre'] = null;
			}
			$this->Cim->patchEntity($cim, $this->request->data);
			if ($this->Cim->save($cim)) {
				$this->Flash->success( 'Datos actualizados correctamente >> '.$this->request->data['nombre'].' <<');
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Error en la actualización de datos'));
		}
		$this->set('cim', $cim);
	}
	public function reports(){
		$conn = ConnectionManager::get('default');
		$stmt1 = $conn->query('SELECT nombre, fecha_inauguracion, responsable, zona, distrito, numero_ninos from cim');
		$data1 = $stmt1->fetchAll('assoc');

		$stmt2 = $conn->query('SELECT administracion, COUNT(*) FROM cim GROUP BY administracion');
		$data2 = $stmt2->fetchAll('assoc');

		$stmt3 = $conn->query('SELECT infraestructura_pertenece, COUNT(*) FROM cim GROUP BY infraestructura_pertenece');
		$data3 = $stmt3->fetchAll('assoc');

		/*$stmt4 = $conn->query('SELECT nombre,cocina,bano,patio,muro_perimetral,almacen,comedor,sala_psicomotricidad,otro_ambiente from cim');
		$data4 = $stmt4->fetchAll('assoc');*/
		$stmt4 = $conn->query('call ccim("report4")');
		$data4 = $stmt4->fetchAll('assoc');
		unset($stmt4);

		$stmt5 = $conn->query('call ccim("report5")');
		$data5 = $stmt5->fetchAll('assoc');
		unset($stmt5);

		$stmt6 = $conn->query('call ccim("report6")');
		$data6 = $stmt6->fetchAll('assoc');
		unset($stmt6);

		$stmt7 = $conn->query('call ccim("report7")');
		$data7 = $stmt7->fetchAll('assoc');
		unset($stmt7);

		$stmt8 = $conn->query('call ccim("report8")');
		$data8 = $stmt8->fetchAll('assoc');
		unset($stmt8);

		//pr($data9);	exit;

		$this->set('data', [null, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8]);


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
?>