<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;


class PersonalController extends AppController
{
	

	public function index(){
		//$articles = $this->Articles->find->select([]);
		//$personal = TableRegistry::get('Personal');
		//$personal = $this->Personal->newEntity();

		$conn = ConnectionManager::get('default');
		$stmt = $conn->query('SELECT c.nombre, p.id, p.nombres, p.paterno, p.materno, p.cargo, p.fecha_nacimiento, p.grupo_etareo, p.antiguedad, p.ci, p.ci_expedido, p.num_cel, p.zona, p.direccion from cim c, personal p where c.id_cim = p.id_cim');	
		$data = $stmt->fetchAll('assoc');
		$this->set(compact('data'));
		//pr($data);	exit;
/*
id, id_cim, cargo, grupo_etareo, categoria, fecha_ingreso, antiguedad, evaluacion, fecha_nacimiento, ci, ci_expedido, estado_civil, num_hijos, hijos_cim, hijos_becados, distrito, zona, direccion, fono, num_cel, idiomas, otro_idioma, grado_instruccion, grado_instruccion_detalle,
   experiencia_laboral, 
form_continua, form_continua_anio,
red_municipal, red_municipal_anio, 
nut_alim, nut_alim_anio*/

	}
	public function add(){
		
		//$this->loadmodel('Personal');
		$personal = $this->Personal->newEntity();
		
		if ($this->request->is('post')) {
			/*pr($this->request->data['idiomas']);
			echo count($this->request->data['idiomas']);*/
			$idiomas ='';
			foreach ($this->request->data['idiomas'] as $key => $value) {
				$idiomas .=  $value.', ';
			}
			$this->request->data['idiomas'] = $idiomas;
			//pr($this->request->data);	exit;
			$personal = $this->Personal->patchEntity($personal, $this->request->data);
			if ($this->Personal->save($personal)) {
					$this->Flash->success(__('Guardado correctamente.'));

					return $this->redirect(['action' => 'add']);

			} else {
				$this->Flash->error(__('No se guardaron los datos'));
			}
		} else {
			$cim = TableRegistry::get('Cim');
			$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
			$this->set(compact('cims'));
			$this->set('personal',$personal);
		}
	}

	public function edit( $id = null){
		$person = $this->Personal->get($id);
		if ($this->request->is(['post', 'put'])) {

			if( !empty($this->request->data['idiomas']) ){
				$idiomas ='';
				foreach ($this->request->data['idiomas'] as $key => $value) {
					$idiomas .=  $value.', ';
				}
				$this->request->data['idiomas'] = $idiomas;
			}
			$this->Personal->patchEntity($person, $this->request->data);

			if ($this->Personal->save($person)) {
				$this->Flash->success(__('Datos actualizados correctamente.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Error en la actualización de datos'));
		}
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
		$this->set(compact('cims'));
		
		$this->set('personal', $person);
		$this->set('cims',$cims);
	}

	public function reports(){
		$conn = ConnectionManager::get('default');

        $stmt1 = $conn->query('call reports("report1")');
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