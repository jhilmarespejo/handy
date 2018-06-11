<?php 
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;
	use Cake\I18n\Time;
	setlocale(LC_ALL, 'Spanish');

class AportesController extends AppController
{
	public function index(){

	}

	public function add(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
		if($this->request->is('post')){
			$totalMonetario=0;
			$totalNomonetario=0;
			$apCompleto=0;
			$apParcial=0;
			$sinAp=0;

			foreach ($this->request->data['Aportes'] as $key => $value) {
			/*suma de totales*/
				if ($value['tipo_aporte'] == 'Monetario') {
					$totalMonetario += $value['total_recaudado'];
				}
				if ($value['tipo_aporte'] == 'No monetario') {
					$totalNomonetario += $value['total_recaudado'];
				}
				if($value['aporte'] == 'Completo'){
					$apCompleto++;
				}
				if($value['aporte'] == 'Parcial'){
					$apParcial++;
				}
				if($value['aporte'] == 'Sin Aporte'){
					$sinAp++;
				}
			}

			//APORTES 

			$aportes = TableRegistry::get('Aportes');
			$aportesEntities = $aportes->newEntities($this->request->data['Aportes']);
			foreach ($aportesEntities as $aportesEntity) {
		    	if($aportes->save($aportesEntity)){
		    		$ap = true;
		    	} else {
		    		$ap = false;
		    	}
			}
			

			/*OTROS APORTES*/
			/*foreach ($this->request->data['otrosaportes'] as $key => $value) {
				$this->request->data['otrosaportes'][$key]['fecha_aporte']=$value['fecha_aporte']['year'].'-'.$value['fecha_aporte']['month'].'-'.$value['fecha_aporte']['month'];
			}
			if($this->request->data['otrosaportes'][0]['razon_social']){
				$otrosaportes = TableRegistry::get('otrosaportes');
				$otrosaportesEntities = $otrosaportes->newEntities($this->request->data['otrosaportes']);
				foreach ($otrosaportesEntities as $otrosaportesEntity) {
			    	if($otrosaportes->save($otrosaportesEntity)){
			    		$otAp = true;
			    	} else {
			    		$otAp = false;
			    	}
				}
			// actualiza la tabla CONTROLNM que contiene el periodo actual 
				$periodo = $this->request->data['Control']['periodo'];
				$idCim = $this->request->data['Control']['id_cim'];
				$ControlnmTable = TableRegistry::get('Controlnm');
				$query = $ControlnmTable->find()->select('id')->where(['periodo' => $periodo,'id_cim'=>$idCim]);
				$id = $query->first()->id;
				$controlnm['id'] = $id;
				$controlnm['total_ingreso_nomonetario_actual'] = $this->request->data['otrosaportes'][0]['total_recaudado'];

				$controlnmEntity = $ControlnmTable->newEntity($controlnm);
				$ControlnmTable->save($controlnmEntity);
			}*/

			/* ACTUALIZA Tabla control *** actualizar esta tabla con los datos de la nueva insercion revisar tabla control*** */			
			
			$controlTable = TableRegistry::get('Control');
			$query = $controlTable->find()->select(['id', 'saldo_periodo_anterior'])->where( ['periodo' => $this->request->data['Control']['periodo'],'id_cim'=>$this->request->data['Control']['id_cim']] )->first();
			$saldoAnterior = ( is_null($query['saldo_periodo_anterior']) )? 0 : $query['saldo_periodo_anterior'];
			//pr( $totalMonetario );
			//pr( $saldoAnterior );
			//exit;

			$this->request->data['Control']['id'] = $query['id'] ;
			$this->request->data['Control']['aporte_completo'] = $apCompleto;
			$this->request->data['Control']['aporte_parcial'] = $apParcial;
			$this->request->data['Control']['sin_aporte'] = $sinAp;
			$this->request->data['Control']['total_aportes'] = $totalMonetario;
			$this->request->data['Control']['total_ingreso_periodo_actual'] = $totalMonetario + $saldoAnterior;
			$this->request->data['Control']['total_ingreso_nomonetario_actual'] = $totalNomonetario;
			$this->request->data['Control']['fecha'] = date('Y-m-d');
			
			//pr($this->request->data['Control']);

			$Control = TableRegistry::get('Control');
			$controlEntity = $Control->newEntity($this->request->data['Control']);

			if ( $Control->save($controlEntity) ) {
				$ctrl = true;
			}else{$ctrl = false;}

			if( $ap && $ctrl ){
				$this->Flash->success(__('Datos guardados correctamente'));
			}else{
				$this->Flash->error(__('Error al guardar los datos!'));
			}
			return $this->redirect(['action' => 'add']);
		}
		$this->set('data', [$cims]);
	}

	public function gastos(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order(['nombre' => 'ASC']);
		$this->set('data', [$cims]);
		if( $this->request->is('post') ){
			$totalGastosPeriodoActual = 0;
			foreach ($this->request->data['Gastos'] as $key => $gasto) {
				$totalGastosPeriodoActual =  $totalGastosPeriodoActual + $gasto['monto'];
			}

			//pr( $totalGastosPeriodoActual );
			//exit;

			$saldoSiguientePeriodo = $this->request->data['totalIngresoPeriodoActual'] - $totalGastosPeriodoActual;
			$idCim = $this->request->data['Gastos'][0]['id_cim'];
            $periodo = $this->request->data['Gastos'][0]['periodo'];
			
			/*Guarda los gastos*/
			$gastos = TableRegistry::get('Gastos');
			$gastosEntities = $gastos->newEntities($this->request->data['Gastos']);
			foreach ($gastosEntities as $gastosEntity) {
		    	if($gastos->save($gastosEntity)){
		    		echo $gasto = true;
		    	} else {
		    		$gasto = false;
		    	}
			}

			/*update table Control and actual period*/
			$controlTable = TableRegistry::get('Control');
			$query = $controlTable->find()->select('id')->where(['periodo' => $periodo,'id_cim'=>$idCim]);
			$id = $query->first()->id;

			$control = $controlTable->get($id);
			$control->total_gastos_periodo_actual = $totalGastosPeriodoActual;
			$control->saldo_siguiente_periodo = $saldoSiguientePeriodo;
			$control->fecha = date('Y-m-d h:i:s');
			//pr($control);
			if($controlTable->save($control)){
				$ctrl = true;
			}else{$ctrl = false;}
			unset($control);


			/*Crear nuevo mes en la tabla control actualizar $nuevoMes a principio de cada gestion */		
			$meses = array(null, 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'); 
			$mesActual =  array_search( (explode('-', $periodo)[1]), $meses);
			$nuevoMes = '2017-'.$meses[(string)($mesActual+1)];

			$control['id_cim'] = $idCim;
			$control['periodo'] = $nuevoMes;
			$control['saldo_periodo_anterior'] = $saldoSiguientePeriodo;//del periodo pasado

			//pr($this->request->data);
			pr($control);
			//exit;
			
			$control = $controlTable->newEntity($control);
			if($controlTable->save($control)){
				$NewCtrl = true;
			}else{$NewCtrl = false;}

			if($NewCtrl && $ctrl && $gasto){
				$this->Flash->success(__('Datos guardados correctamente'));
			}else{
				$this->Flash->error(__('Error al guardar los datos!'));
			}
			return $this->redirect(['action' => 'gastos']);
		}
 
	}

	public function gastosNm(){
		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre'])->order(['nombre' => 'ASC']);
		$this->set('data', [$cims]);
		if( $this->request->is('post') ){
			$totalGastosPeriodoActual = 0;
			foreach ($this->request->data['Gastos'] as $key => $value) {
				$this->request->data['Gastos'][$key]['fecha_gasto'] = $value['fecha_gasto']['year'].'-'.$value['fecha_gasto']['month'].'-'.$value['fecha_gasto']['day'];
				$totalGastosPeriodoActual += $value['monto'];
			}

			$saldoSiguientePeriodo = ($this->request->data['totalIngresoPeriodoActual'] + $this->request->data['saldoPeriodoAnterior']) - $totalGastosPeriodoActual;
			$idCim = $this->request->data['Gastos'][0]['id_cim'];
            $periodo = $this->request->data['Gastos'][0]['periodo'];

		/*Guarda los gastos no monetarios*/
		$gastos = TableRegistry::get('Gastos');
		$gastosEntities = $gastos->newEntities($this->request->data['Gastos']);

		foreach ($gastosEntities as $gastosEntity) {
	    	if($gastos->save($gastosEntity)){
	    		echo $gastonm = true;
	    	} else {
	    		$gastonm = false;
	    	}
		}

		/*update Control periodo actual*/
		$controlnmTable = TableRegistry::get('Controlnm');
		$query = $controlnmTable->find()->select('id')->where(['periodo' => $periodo,'id_cim'=>$idCim]);
		$id = $query->first()->id;

		$controlnm = $controlnmTable->get($id);
		$controlnm->total_gastos_nomonetario_actual = $totalGastosPeriodoActual;
		$controlnm->saldo_siguiente_periodo = $saldoSiguientePeriodo;
		$controlnm->fecha = date('Y-m-d h:i:s');
		//pr($controlnm);

		if($controlnmTable->save($controlnm)){
			$ctrlnm = true;
		}else{$ctrlnm = false;}

		/*Crear nuevo periodo en la tabla controlnm */		
		$period = strtotime ('+1 month' , strtotime ( date('Y-m-d') )) ;
		$period = date ('m', $period);

		if( ucfirst(strftime('%B', mktime(0,0,0,($period+1),0,0))) == 'Enero' ){
			//echo $year = date('Y', strtotime ('+1 year' , strtotime ( date('Y') ))) ;
			$newPeriod = (date('Y', strtotime ('+1 year' , strtotime ( date('Y') )))).'-'.ucfirst(strftime('%B', mktime(0,0,0,($period+1),0,0)));
		}else{
			$newPeriod = date('Y').'-'.ucfirst(strftime('%B', mktime(0,0,0,($period+1),0,0)));
		}
		unset($controlnm);
		$controlnm['id_cim'] = $idCim;
		$controlnm['periodo'] = $newPeriod;
		$controlnm['saldo_periodo_anterior'] = $saldoSiguientePeriodo;//del periodo pasado
		$controlnm['fecha'] = date('Y-m-d h:i:s');
		//echo "------------";
		//pr($controlnm);
		//exit;

		$controlnm = $controlnmTable->newEntity($controlnm);
		if($controlnmTable->save($controlnm)){
			$NCtrlnm = true;
		}else{$NCtrlnm = false;}

		if($NCtrlnm && $ctrlnm && $gastonm){
			$this->Flash->success(__('Datos guardados correctamente'));
		}else{
			$this->Flash->error(__('Error al guardar los datos!'));
		}
		return $this->redirect(['action' => 'gastosNm']);
		}
	}
	public function get(){
		$periodo = $this->request->data['data'][1].'-'.(ucfirst(strftime('%B', mktime(0,0,0,($this->request->data['data'][2]+1),0,0)))); 
		$periodoAnterior = $this->request->data['data'][1].'-'.(ucfirst(strftime('%B', mktime(0,0,0,($this->request->data['data'][2]),0,0)))); 
		$idCim = $this->request->data['data'][0];

		/*pr($this->request->data['data']);
		pr($periodoAnterior);
		pr($periodo);
		pr($idCim);
		exit;*/

		if( $this->request->is('post') ){
			if( isset($this->request->data['data']['3']) && $this->request->data['data']['3']=='gastos' ){
				$control = TableRegistry::get('Control');
				$control = $control->find()->select(['total_ingreso_periodo_actual', 'saldo_periodo_anterior'])->where(['id_cim' => $idCim])->where(['periodo' => $periodo])->first();
				$this->viewBuilder()->layout(false);
				if(isset($control)){$control=$control->toArray();}else{$control=false;}
				$this->set(['idCim'=>$idCim,'periodo'=>$periodo, 'control'=>$control]);
				$this->render('/Element/aportes/gastos');

			} elseif( isset($this->request->data['data']['3']) && $this->request->data['data']['3']=='gastosnm' ){
				$controlnm = TableRegistry::get('Controlnm');
				$controlnm = $controlnm->find()->select(['total_ingreso_nomonetario_actual', 'saldo_periodo_anterior'])->where(['id_cim' => $idCim])->where(['periodo' => $periodo])->first();
				$this->viewBuilder()->layout(false);
				if(isset($controlnm)){$controlnm=$controlnm->toArray();}else{$controlnm=false;}
				$this->set(['idCim'=>$idCim,'periodo'=>$periodo, 'controlnm'=>$controlnm]);
				$this->render('/Element/aportes/gastosnm');
			}
			else {
				$cim = TableRegistry::get('Cim');
				$aporteFijado = $cim->find()->select('aportes_ppff')->where(['id_cim' => $idCim])->first();

				$ninos = TableRegistry::get('Datosnino');
				/*$ninos = $ninos->find()->select(['id_nino','paterno', 'materno', 'nombres', 'becado'])->where(['id_cim' => $idCim, 'causas_retiro is Null'])->order(['paterno' => 'ASC']);*/

				$conn = ConnectionManager::get('default');
		        $stmt1 = $conn->query("select d.id_cim, d.id_nino,concat(d.paterno,' ',d.paterno,' ',nombres) as ncompleto,d.causas_retiro, d.id_nino,d.becado,a.saldo from datosnino d, aportes a where d.id_nino = a.id_nino and a.id_cim= '$idCim' and periodo = '$periodoAnterior' and d.causas_retiro is null order by 1");
		        $list = $stmt1->fetchAll('assoc');
				unset($stmt1);

				$this->viewBuilder()->layout(false);
				$this->set(['idCim'=>$idCim,'ninos'=>$list,'mes'=>$periodo, 'aporteFijado'=>$aporteFijado->toArray()['aportes_ppff'] ]);
				$this->render('/Element/aportes/aportantes');
			}
		}
	}
	public function reports(){
		$conn = ConnectionManager::get('default');
        $stmt1 = $conn->query('call reports("report9")');
        $data1 = $stmt1->fetchAll('assoc');
        unset($stmt1);

        $this->set('data', [null, $data1]);
	}

	public function beforeFilter(Event $event) {
        $admin = array('index', 'add', 'gastos', 'gastosNm', 'reports', 'edit', 'get');
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