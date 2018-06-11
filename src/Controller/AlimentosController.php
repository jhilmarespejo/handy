<?php 
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;
	use Cake\I18n\Time;
setlocale(LC_ALL, '');

class AlimentosController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
	public function index(){

	}

	public function add(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
		if($this->request->is('post')){
/* Guarda Acta de entrega */
			$actasTable = TableRegistry::get('Actaalimentos');
			$acta = $actasTable->newEntity($this->request->data['Actaalimentos']);
			
			if ($actasTable->save($acta)) {
				$actaalimentosId = $acta->id;
				$act = true;
			} else {
				$act = false;
			}
			foreach ($this->request->data['Alimentos'] as $key => $value) {
				$this->request->data['Alimentos'][$key]['actaalimentos_id'] = $actaalimentosId;
			}
			//pr($this->request->data);exit;
/* Guarda alimentos */
			$alimentos = TableRegistry::get('Alimentos');
			$alimentosEntities = $alimentos->newEntities($this->request->data['Alimentos']);
			foreach ($alimentosEntities as $alimentosEntity) {
		    	if($alimentos->save($alimentosEntity)){
		    		$al = true;
		    	} else {
		    		$al = false;
		    	}
			}
			if($al){
				$this->Flash->success(__('Datos guardados correctamente'));
			}else{
				$this->Flash->error(__('Error al guardar los datos!'));
			}
			return $this->redirect(['action' => 'add']);
		}
		$this->set('data', [$cims]);
	}

	public function saldos(){

		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order(['nombre' => 'ASC']);
		if($this->request->is('post')){
			pr( $this->request->data ); exit;
			
			$saldoalimentos = TableRegistry::get('Saldoalimentos');
			$saldoalimentosEntities = $saldoalimentos->newEntities($this->request->data['Saldoalimentos']);
			foreach ($saldoalimentosEntities as $saldoalimentosEntity) {
		    	if($saldoalimentos->save($saldoalimentosEntity)){
		    		$sAl = true;
		    	} else {
		    		$sAl = false;
		    	}
			}

			if($sAl){
				$this->Flash->success(__('Datos guardados correctamente'));
			}else{
				$this->Flash->error(__('Error al guardar los datos!'));
			}
			return $this->redirect(['action' => 'saldos']);

		}
		$this->set('data', [$cims]);
	}

	public function reports(){
		$conn = ConnectionManager::get('default');
		$stmt1 = $conn->query("call reports('report2')");
		$data1 = $stmt1->fetchAll('assoc');
		//$data = $this->paginate($data);
		//$this->set(compact('data'));

		$this->set('data', [null, $data1]);
	}


	public function get(){
		if( $this->request->is('post') ){
			if( isset($this->request->data['data']['0']) && $this->request->data['data']['1']=='get1'){
				//pr($this->request->data);exit;
				// $idCim = $this->request->data['data'][0];
				// $fechaIngreso = $this->request->data['data'][1];
				// $acta = TableRegistry::get('Actaalimentos');
				// $query = $acta->find()->select(['id'])->where(['id_cim' => $idCim])->where(['fecha_ingreso' => $fechaIngreso])->first();
				// if($query){
				// 	$id = $query->id;
				// 	$Alimento = TableRegistry::get('Alimentos');
				// 	$alimentos = $Alimento->find()->select(['actaalimentos_id','alimento', 'cantidad_entregada', 'u_medida', 'vencimiento'])->where(['actaalimentos_id'=>$id]);

				// } else {
				// 	$alimentos = false;
				// }

				$saldoalimentos = TableRegistry::get('Saldoalimentos');

				$saldos = $saldoalimentos->find()->select(['id_cim', 'alimento', 'vencimiento', 'fuente_suministro', 'u_medida', 'saldo'])->where( [ 'id_cim' => $this->request->data['data']['0'] ] ) ;

				//pr($saldos);
				//exit;

			}
			$this->viewBuilder()->layout(false);
			$this->set(['alimentos'=>$saldos]);
			$this->render('/Alimentos/alimentos');
			//pr('sss');exit;

		}
	}

	public function beforeFilter(Event $event)
	{

		if( $this->Auth->user('role') == 'admin' ){			
			$admin = array('index','add','saldos','reports','get');
			if ( !in_array($this->request->action, $admin) ) {
		    	return $this->redirect(['controller' => 'users', 'action' => 'login']);
		    } 
        } else {
        	$guest = array('reports');
        	if ( !in_array($this->request->action, $guest) ) {
				//$this->Auth->allow('reports');
		    	return $this->redirect(['controller' => 'users', 'action' => 'login']);
		    } 
		}

	}
}