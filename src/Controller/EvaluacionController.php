<?php 
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\Network\Exception\NotFoundException;
	use Cake\ORM\TableRegistry;
class EvaluacionController extends AppController
{
	/*public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow('add');
	}*/
	public function index()
	{
		$this->set( 'persons', $this->Evaluacion->find('all') );
	}
	public function verifymemos(){

		if( isset($this->request->data) ){
			$memo = TableRegistry::get('Memos');
			$memo = (int) $memo->find()->where(['ci' =>  $this->request->data['data'][0] ])->count();
			$this->viewBuilder()->layout(false);

			echo ( $memo );
			//exit;
			//if( isset($memo) && $memo > 0 ){$memo=$memo->toArray();}else{$memo=false;}

			$this->set( ['memos' => $memo] );
			$this->render('/evaluacion/add');
		} 

	}
	public function add()
	{
		/*JE: send cims for listbox in add */
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
		$this->set(compact('cims'));

		$this->loadModel('Evaluacion');
		$datosEv = $this->Evaluacion->newEntity();
		if ($this->request->is('post')) {

			$this->request->data['telf'] = json_encode($this->request->data['telf']);
			$this->request->data['cim_postulacion'] = json_encode($this->request->data['cim_postulacion']); 
			$this->request->data['fecha_hora'] = date('Y-m-d H:i:s T', time()-14400);
			$this->request->data['user'] = $this->request->session()->read('Auth.User.role');;

			//date('Y-m-d H:i:s T', time()-14400) 
			//pr($this->request->data);exit;

			$datosEv = $this->Evaluacion->patchEntity($datosEv, $this->request->data);

			try {
		    	$this->Evaluacion->save($datosEv);
				$this->Flash->success(__('Guardado correctamente'));
			} catch (\Exception $e) {
			    $this->Flash->error(__('Error al guardar, posible duplicado'));
			}

			/*try {
			    	$this->datosEvs->save($datosEv);
					$this->Flash->success(__('Guardado correctamente'));
				} catch (\Exception $e) {
				    $this->Flash->error(__('Error al guardar, posible duplicado'));
				}*/

			return $this->redirect(['action' => 'index']);
		}
		//pr($datosEv); exit;
		$this->set('datosEv', $datosEv);
		//exit;
	}


	public function edit( $id = null){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
		$this->set(compact('cims'));
		$person = $this->Evaluacion->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->request->data['telf'] = json_encode($this->request->data['telf']);
			$this->request->data['cim_postulacion'] = json_encode($this->request->data['cim_postulacion']); 

			$this->Evaluacion->patchEntity($person, $this->request->data);
			if ($this->Evaluacion->save($person)) {
				$this->Flash->success(__('Datos actualizados correctamente.'));
				return $this->redirect(['action' => 'index']);
			}else{
			$this->Flash->error(__('Error en la actualización de datos'));
			}
		}
		$this->set('datosEv', $person);
	}
}
?>