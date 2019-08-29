<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;

class CuadroSignosVitalesController extends AppController
{
	public function index(){
		/* $this->loadmodel('Datosnino');
		$this->loadmodel('Personal');
		$datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres','fecha_nacimiento','sexo','peso','talla']);
		$personal = $this->Personal->find()->select(['id','cargo','paterno','materno','nombres']);
		$this->set('sent',[$datosnino, $personal]);*/

		//pr($datosnino);	exit;
		//$this->loadmodel('Cim');
        //$this->set('cims', $this->Cim->find('all')->order(['nombre' => 'ASC']));
        //$this->viewBuilder()->layout(false);
    	return $this->redirect(['action' => 'add']);

	}

	public function add( $id_nino = null ){
		

		/*JE: get listing of childrens*/
		if( $this->request->is('post') ){
			if($this->request->data['data']['1']=='get_list'){
				$idCim = $this->request->data['data']['0'];
				$this->loadmodel('Datosnino');

				$datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres', 'sala', 'fecha_nacimiento','sexo','peso','talla', /*+otros*/])->where(['id_cim'=>$idCim, 'causas_retiro is Null'])->order(['paterno', 'sexo']);


				/*$connetion = ConnectionManager::get('default');
				$datosnino = $connetion
				->newQuery()
				->select ("select d.paterno, d.materno, d.nombres, d.sexo, d.fecha_nacimiento, d.sexo, d.peso, d.talla, c.nombre from datosnino d, escala e where d.id_nino = e.id_nino and d.id_nino= $id_nino")
				->from('datosnino d, cim c')
				->where([],[])
				->execute()
				->fetchAll('assoc');
				unset($stmt1);
				
				/*JE: set list of datosnino to other single view */
				$this->viewBuilder()->layout(false);
				$this->set(['datosnino'=>$datosnino]);
				$this->render('/CuadroSignosVitales/boy_list');

			}
		}


		if ( is_numeric($id_nino) ) {

			//sacar los datos del mes anterior para mandarlos al mes actual
			//$this->loadmodel('marzo');
			//$datosmarzo = $this->Marzo->find()->select(['fecha_nacimiento', 'anios', 'meses', 'peso', 'talla', 'fecha_registro']);


			//JE: get this information from the table of month past
			$this->loadmodel('Datosnino');
			$datosNino = $this->Datosnino->find()->select(['id_nino', 'paterno', 'materno', 'nombres', 'id_nino', 'fecha_nacimiento','sexo','sala','edad_nino'])->where(['id_nino' => $id_nino])->first();

			$connection = ConnectionManager::get('default');
			$datosNino = $connection
			->newQuery()
			->select('d.paterno, d.materno, d.nombres, d.fecha_nacimiento, d.sexo, d.peso, d.talla, d.sala, c.nombre')
			->from('datosnino d, cim c')
			->where(['d. id_nino =' => $id_nino, 'c.id_cim = d.id_cim' ])
			//->order(['title' => 'DESC'])
			->execute()
			->fetchAll('assoc');

			$this->set('datosNino', [($datosNino)]/*, +otros del mes anterior*/);
			
			// JE: render personal form to fill the vital signs
  			$this->render('/CuadroSignosVitales/personal_form');
		} else {
			$this->loadmodel('Cim');
			$cims = $this->Cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
			$this->set(['cims'=>$cims]);
		} 

		if ( false ){

		}
		if (false) { // when the array comes with data

			/*if($this->request->data['data']['1']=='get_list'){
				$idCim = $this->request->data['data']['0'];
				$this->loadmodel('Datosnino');
				$this->loadmodel('Personal');

				$datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres','fecha_nacimiento','sexo','peso','talla'])->where(['id_cim'=>$idCim])->order(['paterno', 'sexo']);
				$personal = $this->Personal->find()->select(['id','cargo','paterno','materno','nombres'])->where(['id_cim'=>$idCim])->order(['cargo','paterno']);

				$this->viewBuilder()->layout(false);
				$this->set(['datosnino'=>$datosnino,'personal'=>$personal]);
				$this->render('/CuadroSignosVitales/board_list');
			}*/

			//pr($this->request->data);
			//exit;
			
			$escala = TableRegistry::get('Escala');
			$escalaEntities = $escala->newEntities($this->request->data['escala']);
			foreach ($escalaEntities as $escalaEntity) {
		    	$escala->save($escalaEntity);
			}

			$nutricion = TableRegistry::get('Nutricion');
			$nutricionEntities = $nutricion->newEntities($this->request->data['nutricion']);
			foreach ($nutricionEntities as $nutricionEntity) {
		    	$nutricion->save($nutricionEntity);
			}

			$suplementos = TableRegistry::get('Suplementos');
			$suplementosEntities = $suplementos->newEntities($this->request->data['suplementos']);
			foreach ($suplementosEntities as $suplementosEntity) {
		    	$suplementos->save($suplementosEntity);
			}

			foreach ($this->request->data['asistencia'] as $key => $value) {
				$calendario = json_encode($value['calendario']);
				$this->request->data['asistencia'][$key]['calendario'] = $calendario;
			}
			$asistencia = TableRegistry::get('Asistencia');
			$asistenciaEntities = $asistencia->newEntities($this->request->data['asistencia']);
			foreach ($asistenciaEntities as $asistenciaEntity) {
		    	$asistencia->save($asistenciaEntity);
			}

			foreach ($this->request->data['asistencia_personal'] as $key => $value) {
				$calendario = json_encode($value['calendario']);
				$this->request->data['asistencia_personal'][$key]['calendario'] = $calendario;
			}
			$asistenciap = TableRegistry::get('AsistenciaPersonal');
			$asistenciapEntities = $asistenciap->newEntities($this->request->data['asistencia_personal']);
			foreach ($asistenciapEntities as $asistenciapEntity) {
		    	$asistenciap->save($asistenciapEntity);
			}
			
			$proteccion = TableRegistry::get('Proteccion');
			$proteccionEntities = $proteccion->newEntities($this->request->data['proteccion']);
			foreach ($proteccionEntities as $proteccionEntity) {
		    	$proteccion->save($proteccionEntity);
			}

			$this->Flash->success(__('Los datos se guardaron correctamente'));
			return $this->redirect(['action' => 'index']);
		}
		
		
	}

	public function edit($id_nino = null){
		$this->loadmodel('Datosnino');

		if( $id_nino || !isset($this->request->data['data']['1'])  ) {
			/*Consulta la informacion para ser envida al formulario de edicion de datos*/
		}
		if( isset($this->request->data['data']['1']) && $this->request->data['data']['1']=='getNinos'){
            /*Consulta la lista de los niños pertenencientes a un determinado CIM*/
            $idCim = $this->request->data['data']['0'];

            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(['id_cim'=>$idCim])->order(['paterno', 'sexo']);
        
            $this->viewBuilder()->layout(false);
            $this->set(['ninos'=>$datosnino]);
          $this->render('/CuadroSignosVitales/ninos');
        }
		if ($this->request->is(['post', 'put']) && !isset($this->request->data['data']['1'])) {
			/*Se recive y se guarda la infromacion desde el formulario*/
		}
	}

	public function actions($escala = null){
		 
		//$this->viewBuilder()->layout(false);
		$this->loadmodel('Escala');
		if( $this->request->data['data'][1] == 'update-escala' && $this->request->is(['post']) ){
			//pr( $this->request->data['data'][0] ); 
			unset( $this->request->data['data'][0]['_method']);

			//pr( $this->request->data['data'][0] ); exit;
			foreach ($this->request->data['data'][0] as $key => $escala) {
                $escala_data = $this->Escala->find()->where( ['id'=>$escala['id'] ] )->first();
                $this->Escala->patchEntity($escala_data, $escala);

                if ($this->Escala->save($escala_data)) {
                    $success = true;
                } else {
                    $success = false;
                }
			}
			/*if($success) {
                $this->Flash->success(__('Datos actualizados correctamente'));
            } else {
                $this->Flash->error(__('Error en la actualización de datos'));
            }*/

            $this->set(['success'=>$success]);
            $this->viewBuilder()->layout(false);
			$this->render('/Element/csv/edit_escala');
			//exit;
		}

		if( $this->request->data['data'][0] == 'Escala Abreviada' ){
			$id_nino = $this->request->data['data'][1];

			$conn = ConnectionManager::get('default');

			$stmt1 = $conn->query("select d.paterno, d.materno, d.nombres, d.sexo, d.fecha_nacimiento, e.* from datosnino d, escala e where d.id_nino = e.id_nino and d.id_nino= $id_nino");
			$escala = $stmt1->fetchAll('assoc');
			unset($stmt1);
			$this->viewBuilder()->layout(false);
			//$esc = (object)$escala;
			$this->set(['escala_array'=>$escala]);
			$this->render('/Element/csv/edit_escala');
			//pr($escala); exit;

		}
		if( $this->request->data['data'][0] == 'Estado Nutricional' ){
			exit;
		}
		if( $this->request->data['data'][0] == 'Suplementos Alimenticios' ){
			exit;
		}
		if( $this->request->data['data'][0] == 'Asistencia' ){
			exit;
		}
		if( $this->request->data['data'][0] == 'Asistencia del Personal' ){
			exit;
		}
		if( $this->request->data['data'][0] == 'Proteccion' ){
			exit;
		}
		//exit;
	}

	public function reports(){
		if($this->request->is('post')){
			if( isset($this->request->data['data']['0']) && $this->request->data['data']['1'] ) {
				$idCim = $this->request->data['data']['0'];
				$periodo = $this->request->data['data']['1'].'-'.$this->request->data['data']['2'];
				//pr($this->request->data['data']); exit;
				$conn = ConnectionManager::get('default');

		        $stmt1 = $conn->query('SELECT c.nombre, dn.nombres, dn.paterno,dn.materno, a.calendario, a.periodo from datosnino dn, asistencia a, cim c WHERE dn.id_nino = a.id_nino and dn.id_cim = c.id_cim and c.id_cim ="'.$idCim.'" and a.periodo = "'.$periodo.'" order by c.nombre');
		        $data1 = $stmt1->fetchAll('assoc');
		        unset($stmt1);

		        $stmt2 = $conn->query('SELECT c.nombre, p.cargo, p.nombres, p.paterno,p.materno, a.calendario, a.periodo from personal p, asistencia_personal a, cim c WHERE p.id = a.personal_id and p.id_cim = c.id_cim and c.id_cim ="'.$idCim.'" and a.periodo = "'.$periodo.'" order by c.nombre');
		        $data2 = $stmt2->fetchAll('assoc');
		        unset($stmt2);

		        $stmt3 = $conn->query('SELECT c.nombre, d.paterno, d.materno, d.nombres,e.mot_gruesa, e.mot_fina, e.aud_leng, e.per_soc, e.total_actual ,e.periodo FROM escala e, cim c, datosnino d WHERE e.id_nino=d.id_nino and c.id_cim=d.id_cim and c.id_cim = "'.$idCim.'" and e.periodo = "'.$periodo.'"');
		        $data3 = $stmt3->fetchAll('assoc');
		        unset($stmt3);


		        $stmt4 = $conn->query('call csv("report4", "'.$idCim.'", "'.$periodo.'")');
		        $data4 = $stmt4->fetchAll('assoc');
		        unset($stmt4);

		        $stmt5 = $conn->query('call csv("report5", "'.$idCim.'", "'.$periodo.'")');
		        $data5 = $stmt5->fetchAll('assoc');
		        unset($stmt5);
		        
		        $stmt6 = $conn->query('call csv("report6", "'.$idCim.'", "'.$periodo.'")');
		        $data6 = $stmt6->fetchAll('assoc');
		        unset($stmt6);

		        $this->viewBuilder()->layout(false);
		        $this->set('data', [null, $data1, $data2, $data3, $data4, $data5, $data6]);
				$this->render('/CuadroSignosVitales/list');


			}
		}

		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->where(['fecha_cierre is Null'])->order('nombre');;
		$this->set('data', [$cims]);
	}
	/*
	funcion que recupera la lista de niños en funcion al CIM seleccionado y renderiza el resultado dentro del archivo /CuadroSignosVitales/board_list.ctp para cargarlo en <div id="list"></div> de add.ctp

	@$idCim -> Id del CIm seleccionado en el listbox de add.ctp
	@$this->request->data['data']['1'] -> palabra clave para solicitar el listado.
	*/
	public function get(){
		if( $this->request->is('post') ){
			if($this->request->data['data']['1']=='get_list'){
				$idCim = $this->request->data['data']['0'];
				$this->loadmodel('Datosnino');
				//$this->loadmodel('Personal');

				$datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres','fecha_nacimiento','sexo','peso','talla'])->where(['id_cim'=>$idCim, 'causas_retiro is Null'])->order(['paterno', 'sexo']);
				//$personal = $this->Personal->find()->select(['id','cargo','paterno','materno','nombres'])->where(['id_cim'=>$idCim])->order(['cargo','paterno']);

				/* $this->set(['datosnino'=>$datosnino, 'personal'=>$personal]);
				$this->render('/CuadroSignosVitales/board_list');
				JE: set list of datosnino to other single view */
				$this->viewBuilder()->layout(false);
				$this->set(['datosnino'=>$datosnino]);
				$this->render('/CuadroSignosVitales/boy_list');

			}
		}

	}
	public function beforeFilter(Event $event)
    {
        $admin = array('index', 'add', 'reports', 'get', 'edit', 'actions');
        $guest = array('reports', 'get');

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

