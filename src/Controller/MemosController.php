<?php 


	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;

class MemosController extends AppController
{
	public function index(){
		/*$cims = $this->Cim->find('all')->order(['nombre' => 'ASC']);
		$this->set(compact('cims'));
		//pr($cims);exit;*/
		$this->redirect(['action'=>'add']);
		

	}

	public function add()
	{
		$this->loadModel('Memos');
		$memo = $this->Memos->newEntity();
		if ($this->request->is('post')) {
			$this->request->data['username'] = $this->request->session()->read('Auth.User.username'); 
			$this->request->data['date'] = date('Y-m-d h:i:s');
			$memo = $this->Memos->patchEntity($memo, $this->request->data);
			//pr($this->request->data);
			//exit;
			//pr($this->request->data); exit;
			/*if ($this->Memos->save($memo)) {
				$this->Flash->success(__('Guardado correctamente'));
			}else{ 
				$this->Flash->error(__('Error al guardar'));
			}*/

			try {
			    	$this->Memos->save($memo);
					$this->Flash->success(__('Guardado correctamente'));
				} catch (\Exception $e) {
				    $this->Flash->error(__('Error al guardar, posible duplicado'));
				}

			return $this->redirect(['action' => 'add']);
		}
		//pr($memo); exit;
		$this->set('memo', $memo);
		//exit;
	}

	public function search(){
		if( $this->request->is('post') ){

			$cite = $this->request->data['data'][0];
			$ci = $this->request->data['data'][1];
			$this->loadmodel('Personal');
			$staff = $this->Personal->find()->select(['ci','paterno','materno','nombres','cargo'])->where(['ci'=>$ci])->first();

			$this->loadmodel('Memos');
			$cite = $this->Memos->find()->select(['cite','id'])->where(['cite'=>$cite])->first();
			$records = $this->Memos->find()->select(['sancion','fecha', 'fecha'])->where(['ci'=>$ci])->order(['fecha asc']);

			//pr($staff);
			//pr($dataMemo);
			//exit;
			
			$this->viewBuilder()->layout(false);
			$this->set(['staff'=>$staff, 'cite'=>$cite, 'records' => $records]);
			$this->render('/Memos/staff');

		}
	}

}

?>