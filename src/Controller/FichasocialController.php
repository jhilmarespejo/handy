<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;


class FichasocialController extends AppController
{
	public function index(){

		$this->loadmodel('Datosnino');

		$cim = TableRegistry::get('Cim');
		$cims = $cim->find()->select(['id_cim', 'nombre']);

		$this->set(compact('cims'));
		$datosNino = $this->Datosnino->newEntity();
		$this->set('datosNino',$datosNino);
	}

	public function add(){
		pr( $this->request->data );
		exit;
	}



	public function saveDatosNino(){
		//$this->request->data['paterno'] = 'ssss';*

		$this->loadmodel('Datosnino');
		$this->loadmodel('Consideraciones');
		
		$datosNino = $this->Datosnino->newEntity();

		if ($this->request->is('post')) {
			//$datosNino = $this->Datosnino->patchEntity($datosNino, $this->request->data);
				if (true/*$this->Datosnino->save($datosNino)*/) {
					$session = $this->request->session();
					$session->write('Datosnino', $this->request->data); 
					/*pr($this->request->data);exit;
					echo '--------------------<br>';
					pr($session->read('Datosnino')); 
					echo '--------------------<br>';
					pr($datosNino);exit;*/
					$this->Flash->success(__('Your data has been saved.'));
					
					return $this->redirect(['action' => 'saveSituacionFamiliar']);
					
				}
			}
			
		$this->Flash->error(__('Unable to add your Data.')); 
		return $this->redirect(['action' => 'index', 'consideraciones'] );
		$this->set($datosNino);

	}
	public function saveSituacionFamiliar(){
		//pr( $session->read() ); exit;
		

		$this->loadmodel('Situacionfamiliar');
		$situacionfamiliar = $this->Situacionfamiliar->newEntity();

		if ($this->request->is('post')) {
			$session = $this->request->session();
			//pr($this->request->data); exit;
			//$situacionfamiliar = $this->Situacionfamiliar->patchEntity($situacionfamiliar, $this->request->data);
				if (true /*$this->Situacionfamiliar->save($situacionfamiliar)*/) {
					$this->request->data['id_nino'] = $session->read('Datosnino.id_nino');
					$session->write('Situacionfamiliar', $this->request->data); 
					pr($session->read('Situacionfamiliar')); 
					exit;
					//exit(' form situacion familiar guardado');
					$this->Flash->success(__('situacion familiar Ok'));
					//guarda el form de situacion familiar y habilita el form de familiares

					//return $this->redirect(['action' => 'saveFamiliares']);
				}

		} else {
			/*$this->loadmodel('Datosnino');
			$datosNino = $this->Datosnino->newEntity();*/
			$this->loadmodel('Familiares');
			$familiares = $this->Familiares->newEntity();

			$datosNino = 'Datosnino';
			$sitFam = $situacionfamiliar;
			$this->set('sent',[$sitFam,'sit_familiar', $datosNino, $familiares]);
			$this->render('/Fichasocial/index');
		}
	}

	public function saveFamiliares(){

		$this->loadmodel('Familiares');
		$familiares = $this->Familiares->newEntity();

		if( $this->request->is('post') ){
			$session = $this->request->session();
			$familiares = $this->Familiares->patchEntity($familiares, $this->request->data);
			if (true/*$this->Familiares->save($familiares)*/) {
				if( is_array($session->read('Familiares')) ){
					$count = count($session->read('Familiares'));
					$this->request->data['id_nino'] = $session->read('Datosnino.id_nino');
					$session->write("Familiares.$count", $this->request->data);					
					//pr( count($session->read('Familiares')) );
				} else {
					$this->request->data['id_nino'] = $session->read('Datosnino.id_nino');
					$session->write('Familiares.0', $this->request->data);					
				}

				//$session->write('Familiares.1', $this->request->data);
				//pr( $session->read() ); exit;

				$this->viewBuilder()->layout(false);
				$this->set('familiares', $session->read('Familiares'));
				$this->render('/Element/fichasocial/familia');
				
			}
		} else {
			$this->set('dataSent',[$familiares]);
			$this->render('/Fichasocial/index');
		}

	}

	public function saveVivienda(){
		
		/*$session = $this->request->session();
		pr($session->read('Familiares'));exit;*/

		$this->loadmodel('Caracteristicasvivienda');
		$caracteristicasvivienda = $this->Caracteristicasvivienda->newEntity();
		//$session = $this->request->session();
		//pr( $session->read() );exit;
		if ($this->request->is('post')) {
			$session = $this->request->session();
			//$caracteristicasvivienda = $this->Caracteristicasvivienda->patchEntity($caracteristicasvivienda, $this->request->data);
			$this->request->data['id_nino'] = $session->read('Datosnino.id_nino');
			$session->write('Caracteristicasvivienda', $this->request->data); 
			///pr( $session->read() );
			//exit;
			$this->Flash->success(__('Your data has been saved.'));
			return $this->redirect(['action' => 'saveAspectoseconomicos']);	

		} else {
			$this->loadmodel('Situacionfamiliar');
			$situacionfamiliar = $this->Situacionfamiliar->newEntity();

			$this->loadmodel('Familiares');
			$familiares = $this->Familiares->newEntity();
			
			$datosNino = 'Datosnino';
			$this->set('sent',[$situacionfamiliar,'vivienda', $datosNino, $familiares, $caracteristicasvivienda]);
			$this->render('/Fichasocial/index');
		}
	}
	
	public function saveAspectoseconomicos(){
		$this->loadmodel('Aspectoseconomicos');
		$aspectoseconomicos = $this->Aspectoseconomicos->newEntity();
		
		if($this->request->is('post')){
			//$aspectoseconomicos = $this->Aspectoseconomicos->patchEntity($aspectoseconomicos, $this->request->data);
				if (true /*$this->Aspectoseconomicos->save($aspectoseconomicos)*/) {
					$session = $this->request->session();
					$this->request->data['id_nino'] = $session->read('Datosnino.id_nino');
					$session->write('Aspectoseconomicos', $this->request->data); 
					//pr($session->read()); 
					//exit;
					return $this->redirect(['action' => 'saveConsideraciones']);
				}

		} else {
			$this->loadmodel('Situacionfamiliar');
			$situacionfamiliar = $this->Situacionfamiliar->newEntity();

			$this->loadmodel('Familiares');
			$familiares = $this->Familiares->newEntity();
			
			$datosNino = 'Datosnino';

			$this->loadmodel('Caracteristicasvivienda');
			$caracsVivienda = $this->Caracteristicasvivienda->newEntity();
			
			$this->set('sent',[$situacionfamiliar,'asp_economicos', $datosNino, $familiares, $caracsVivienda,$aspectoseconomicos]);
			$this->render('/Fichasocial/index');
		}

	}
	public function saveConsideraciones(){
		$session = $this->request->session();

		$this->loadmodel('Datosnino');
		$datosnino = $this->Datosnino->newEntity();
		
		$this->loadmodel('Situacionfamiliar');
		$situacionfamiliar = $this->Situacionfamiliar->newEntity();
		
		$this->loadmodel('Familiares');
		$familiares = $this->Familiares->newEntity();

		$this->loadmodel('Caracteristicasvivienda');
		$caracteristicasvivienda = $this->Caracteristicasvivienda->newEntity();
		
		$this->loadmodel('Aspectoseconomicos');
		$aspectoseconomicos = $this->Aspectoseconomicos->newEntity();

		$this->loadmodel('Consideraciones');
		$consideraciones = $this->Consideraciones->newEntity();
		
		if($this->request->is('post')){
			$this->request->data['id_nino'] = $session->read('Datosnino.id_nino');
			$session->write('Consideraciones', $this->request->data); 

			$sumatoria =$session->read('Datosnino.valor_tipo_seguro_salud')+$session->read('Datosnino.valor_carnet_vacunas')+$session->read('Datosnino.valor_vacunacion_completa')+$session->read('Datosnino.valor_tipo_discapacidad')+$session->read('Situacionfamiliar.valor_nino_vive_con')+$session->read('Situacionfamiliar.valor_ausencia_madre')+$session->read('Situacionfamiliar.valor_ausencia_padre')+$session->read('Situacionfamiliar.valor_ausencia_ambos')+$session->read('Situacionfamiliar.valor_ambiente_familiar')+$session->read('Situacionfamiliar.valor_numero_hijos')+$session->read('Situacionfamiliar.valor_tipo_familia')+$session->read('Familiares.0.valor_edad')+$session->read('Familiares.0.valor_grado_instruccion')+$session->read('Familiares.0.valor_ocupacion')+$session->read('Familiares.0.valor_ingresos')+$session->read('Familiares.1.valor_edad')+$session->read('Familiares.1.valor_grado_instruccion')+$session->read('Familiares.1.valor_ocupacion')+$session->read('Familiares.1.valor_ingresos')+$session->read('Caracteristicasvivienda.valor_paredes')+$session->read('Caracteristicasvivienda.valor_piso')+$session->read('Caracteristicasvivienda.valor_tipo_vivienda')+$session->read('Caracteristicasvivienda.valor_vivienda_es')+$session->read('Caracteristicasvivienda.valor_cocina')+$session->read('Caracteristicasvivienda.valor_sala')+$session->read('Caracteristicasvivienda.valor_comedor')+$session->read('Caracteristicasvivienda.valor_bano')+$session->read('Caracteristicasvivienda.valor_energia_electrica')+$session->read('Caracteristicasvivienda.valor_agua_potable')+$session->read('Caracteristicasvivienda.valor_vertiente')+$session->read('Caracteristicasvivienda.valor_gas_domiciliario')+$session->read('Caracteristicasvivienda.valor_alcantarillado')+$session->read('Caracteristicasvivienda.valor_internet')+$session->read('Caracteristicasvivienda.valor_tv_cablee')+$session->read('Caracteristicasvivienda.valor_telefono_fijo')+$session->read('Caracteristicasvivienda.valor_telefono_movil')+$session->read('Caracteristicasvivienda.valor_vehiculo_propio')+$session->read('Caracteristicasvivienda.valor_vehiculo_medio_trabajo')+$session->read('Caracteristicasvivienda.valor_transporte_trasladarse_cim')+$session->read('Aspectoseconomicos.valor_deuda_grupo_familiar');


					echo $sumatoria.'<br>';
					echo $sumatoria/40;
					exit;
		} else {
			$this->set('sent',[$situacionfamiliar,'consideraciones', $datosnino, $familiares, $caracteristicasvivienda,$aspectoseconomicos, $consideraciones]);
			$this->render('/Fichasocial/index');
		}
	}

	public function saveAll(){
		$session = $this->request->session();

		$this->loadmodel('Datosnino');
		$datosnino = $this->Datosnino->newEntity();
		$this->loadmodel('Situacionfamiliar');
		$situacionfamiliar = $this->Situacionfamiliar->newEntity();
		$this->loadmodel('Familiares');
		$familiares = $this->Familiares->newEntity();
		$this->loadmodel('Caracteristicasvivienda');
		$caracteristicasvivienda = $this->Caracteristicasvivienda->newEntity();
		$this->loadmodel('Aspectoseconomicos');
		$aspectoseconomicos = $this->Aspectoseconomicos->newEntity();
		$this->loadmodel('Consideraciones');
		$consideraciones = $this->Consideraciones->newEntity();


//pr($session->read());exit('------');

		$datosnino = $this->Datosnino->patchEntity($datosnino, $session->read('Datosnino'));
		$situacionfamiliar = $this->Situacionfamiliar->patchEntity($situacionfamiliar, $session->read('Situacionfamiliar'));
		$caracteristicasvivienda = $this->Caracteristicasvivienda->patchEntity($caracteristicasvivienda, $session->read('Caracteristicasvivienda'));
		$aspectoseconomicos = $this->Aspectoseconomicos->patchEntity($aspectoseconomicos, $session->read('Aspectoseconomicos'));
		$consideraciones = $this->Consideraciones->patchEntity($consideraciones, $session->read('Consideraciones'));

		if(	$this->Datosnino->save($datosnino) && $this->Situacionfamiliar->save($situacionfamiliar) && 
			$this->Caracteristicasvivienda->save($caracteristicasvivienda) && $this->Aspectoseconomicos->save($aspectoseconomicos) && $this->Consideraciones->save($consideraciones) )
		{
			 //exit;
			$familiares = TableRegistry::get('Familiares');
			$entities = $familiares->newEntities($session->read("Familiares"));
			foreach ($entities as $entity) {
		    	$familiares->save($entity);
			}
			echo 'Exito!';


			$session->write('Datosnino', ''); 
			$session->write('Situacionfamiliar', ''); 
			$session->write('Familiares', '');					
			$session->write('Caracteristicasvivienda', ''); 
			$session->write('Aspectoseconomicos', ''); 
			$session->write('Consideraciones', ''); 


			$this->redirect(['action' => 'viewFicha']);
		} else {
			$this->Flash->error(__('No se pudieron guardar los datos!.')); 
			$this->set('sent',[$situacionfamiliar,'consideraciones', $datosnino, $familiares, $caracteristicasvivienda,$aspectoseconomicos, $consideraciones]);
			$this->render('/Fichasocial/index');
		}
	}

	public function viewFicha(){
		//exit('view ficha');
		$this->loadmodel('Datosnino');
		//$datosnino = $this->Datosnino->find('id_nino','id_cim','fecha_registro','paterno','materno','nombres','fecha_nacimiento','edad_nino','sexo','num_ci','ci_expedido','peso','talla','tipo_discapacidad','discapacidad','valor_tipo_discapacidad');
		//$articles = $this->Articles->find('all');

		$datosnino = $this->Datosnino->find()->select(['id_nino','id_cim','fecha_registro','paterno','materno','nombres','fecha_nacimiento','edad_nino','sexo','num_ci','ci_expedido','peso','talla','tipo_discapacidad','discapacidad','valor_tipo_discapacidad']);
		//pr($datosnino);	exit;
		$this->set(compact('datosnino'));
	}

/*
'id_nino','id_cim','fecha_registro','paterno','materno','nombres','fecha_nacimiento','edad_nino','sexo','num_ci','ci_expedido','peso','talla','tipo_discapacidad','discapacidad','valor_tipo_discapacidad',*/
	public function allInfo(){
		exit('toda la info');
	}
	public function beforeFilter(Event $event)
	{
		if( $this->Auth->user('role') == 'Trabajo social' || $this->Auth->user('role') == 'admin' ){
			$this->Auth->allow(['index', 'saveDatosNino', 'saveSituacionFamiliar', 'saveFamiliares']);
		} else {
			$this->Auth->deny(['index', 'saveDatosNino', 'saveSituacionFamiliar', 'saveFamiliares']);
			return $this->redirect('/');
		}
	}


} 






/*
$sumatoria = 
$session->read('Datosnino.valor_tipo_seguro_salud')+
$session->read('Datosnino.valor_carnet_vacunas')+
$session->read('Datosnino.valor_vacunacion_completa')+
$session->read('Datosnino.valor_tipo_discapacidad')+
$session->read('Situacionfamiliar.valor_nino_vive_con')+
$session->read('Situacionfamiliar.valor_ausencia_madre')+
$session->read('Situacionfamiliar.valor_ausencia_padre')+
$session->read('Situacionfamiliar.valor_ausencia_ambos')+
$session->read('Situacionfamiliar.valor_ambiente_familiar')+
$session->read('Situacionfamiliar.valor_numero_hijos')+
$session->read('Situacionfamiliar.valor_tipo_familia')+
$session->read('Familiares.0.valor_edad')+
$session->read('Familiares.0.valor_grado_instruccion')+
$session->read('Familiares.0.valor_ocupacion')+
$session->read('Familiares.0.valor_ingresos')+
$session->read('Familiares.1.valor_edad')+
$session->read('Familiares.1.valor_grado_instruccion')+
$session->read('Familiares.1.valor_ocupacion')+
$session->read('Familiares.1.valor_ingresos')+
$session->read('Caracteristicasvivienda.valor_paredes')+
$session->read('Caracteristicasvivienda.valor_piso')+
$session->read('Caracteristicasvivienda.valor_tipo_vivienda')+
$session->read('Caracteristicasvivienda.valor_vivienda_es')+
$session->read('Caracteristicasvivienda.valor_cocina')+
$session->read('Caracteristicasvivienda.valor_sala')+
$session->read('Caracteristicasvivienda.valor_comedor')+
$session->read('Caracteristicasvivienda.valor_bano')+
$session->read('Caracteristicasvivienda.valor_energia_electrica')+
$session->read('Caracteristicasvivienda.valor_agua_potable')+
$session->read('Caracteristicasvivienda.valor_vertiente')+
$session->read('Caracteristicasvivienda.valor_gas_domiciliario')+
$session->read('Caracteristicasvivienda.valor_alcantarillado')+
$session->read('Caracteristicasvivienda.valor_internet')+
$session->read('Caracteristicasvivienda.valor_tv_cable')+
$session->read('Caracteristicasvivienda.valor_telefono_fijo')+
$session->read('Caracteristicasvivienda.valor_telefono_movil')+
$session->read('Caracteristicasvivienda.valor_vehiculo_propio')+
$session->read('Caracteristicasvivienda.valor_vehiculo_medio_trabajo')+
$session->read('Caracteristicasvivienda.valor_transporte_trasladarse_cim')+
$session->read('Aspectoseconomicos.valor_deuda_grupo_familiar');










Array
(
    [Datosnino] => Array
        (
           $session->read('Datosnino.valor_tipo_seguro_salud')+
           $session->read('Datosnino.valor_carnet_vacunas')+
           $session->read('Datosnino.valor_vacunacion_completa')+
           $session->read('Datosnino.valor_tipo_discapacidad')+
        )

    [Situacionfamiliar] => Array
        (
            $session->read('Situacionfamiliar.valor_nino_vive_con')+
            $session->read('Situacionfamiliar.valor_ausencia_madre')+
            $session->read('Situacionfamiliar.valor_ausencia_padre')+
            $session->read('Situacionfamiliar.valor_ausencia_ambos')+
            $session->read('Situacionfamiliar.valor_ambiente_familiar')+
            $session->read('Situacionfamiliar.valor_numero_hijos')+
            $session->read('Situacionfamiliar.valor_tipo_familia')+
        )

    [Familiares] => Array
        (
            [0] => Array
                (
                    $session->read('Familiares.0.valor_edad')+
                    $session->read('Familiares.0.valor_grado_instruccion')+
                    $session->read('Familiares.0.valor_ocupacion')+
                    $session->read('Familiares.0.valor_ingresos')+
                )

            [1] => Array
                (
                    $session->read('Familiares.1.valor_edad')+
                    $session->read('Familiares.1.valor_grado_instruccion')+
                    $session->read('Familiares.1.valor_ocupacion')+
                    $session->read('Familiares.1.valor_ingresos')+
                )
            
        )

    [Caracteristicasvivienda] => Array
        (
            $session->read('Caracteristicasvivienda.valor_paredes')+
            $session->read('Caracteristicasvivienda.valor_piso')+
            $session->read('Caracteristicasvivienda.valor_tipo_vivienda')+
            $session->read('Caracteristicasvivienda.valor_vivienda_es')+
            $session->read('Caracteristicasvivienda.valor_cocina')+
            $session->read('Caracteristicasvivienda.valor_sala')+
            $session->read('Caracteristicasvivienda.valor_comedor')+
            $session->read('Caracteristicasvivienda.valor_bano')+
            $session->read('Caracteristicasvivienda.valor_energia_electrica')+
            $session->read('Caracteristicasvivienda.valor_agua_potable')+
            $session->read('Caracteristicasvivienda.valor_vertiente')+
            $session->read('Caracteristicasvivienda.valor_gas_domiciliario')+
            $session->read('Caracteristicasvivienda.valor_alcantarillado')+
            $session->read('Caracteristicasvivienda.valor_internet')+
            $session->read('Caracteristicasvivienda.valor_tv_cable')+
            $session->read('Caracteristicasvivienda.valor_telefono_fijo')+
            $session->read('Caracteristicasvivienda.valor_telefono_movil')+
            $session->read('Caracteristicasvivienda.valor_vehiculo_propio')+
            $session->read('Caracteristicasvivienda.valor_vehiculo_medio_trabajo')+
            $session->read('Caracteristicasvivienda.valor_transporte_trasladarse_cim')+
        )

    [Aspectoseconomicos] => Array
        (
            ('Aspectoseconomicos.valor_deuda_grupo_familiar')
        )

    [Consideraciones] => Array
        (
            $session->read('Consideraciones.id_nino')+
            $session->read('Consideraciones.historia_social')+
            $session->read('Consideraciones.diagnostico_social')+
            $session->read('Consideraciones.acciones_realizar')+
            $session->read('Consideraciones.seguimiento_trabajo_social')+
            $session->read('Consideraciones.seguimiento_psicologia')+
            $session->read('Consideraciones.observaciones')+
        )

)





Array
(

    [Datosnino] => Array
        (
            [id_nino] => cod nino
            [id_cim] => cod CI
            [fecha_registro] => 2016-07-04 21:16:39
            [paterno] => aaa
            [materno] => aaa
            [nombres] => aaa
            [fecha_nacimiento] => 2010-02-02
            [edad_nino] => 6.5
            [sexo] => f
            [municipio] => municipio
            [macrodistrito] => macrodistrito
            [zona_barrio] => zona
            [calle_avenida] => calle
            [num_vivienda] => #3
            [certificado_nacimiento] => s
            [ci] => s
            [num_ci] => 6165654
            [ci_expedido] => lp
            [tipo_seguro_salud] => Otro
            [otro_tipo_seguro_salud] => otro
            [valor_tipo_seguro_salud] => 50
            [valor_carnet_vacunas] => 50
            [carnet_vacunas] => Si
            [peso] => 10
            [talla] => 10
            [dk] => dk
            [valor_vacunacion_completa] => 50
            [vacunacion_completa] => Si
            [valor_tipo_discapacidad] => 100
            [tipo_discapacidad] => Si
            [discapacidad] => discapacidad
        )


    [Situacionfamiliar] => Array
        (
            [id_nino] => 11
            [valor_nino_vive_con] => 
            [valor_ausencia_madre] => 
            [valor_ausencia_padre] => 
            [valor_ausencia_ambos] => 
            [valor_ambiente_familiar] => 
            [numero_hijos] => 
            [valor_anumero_hijos] => 
            [valor_tipo_familia] => 
        )

    [Caracteristicasvivienda] => Array
        (
            [id_nino] => 
            [paredes] => Piedra
            [valor_paredes] => 80
            [piso] => Machimbre
            [valor_piso] => 50
            [tipo_vivienda] => Casa-independiente
            [valor_tipo_vivienda] => 50
            [vivienda_es] => Cedidia
            [valor_vivienda_es] => 50
            [numero_personas] => 9
            [numero_dormitorios] => 2
            [cocina] => Si
            [valor_cocina] => 50
            [sala] => No
            [valor_sala] => 100
            [comedor] => No
            [valor_comedor] => 100
            [bano] => Compartido
            [valor_bano] => 100
            [energia_electrica] => Si
            [valor_energia_electrica] => 80
            [agua_potable] => Si
            [valor_agua_potable] => 80
            [vertiente] => Si
            [valor_vertiente] => 100
            [gas_domiciliario] => Si
            [valor_gas_domiciliario] => 80
            [alcantarillado] => Si
            [valor_alcantarillado] => 80
            [internet] => Si
            [valor_internet] => 50
            [tv_cable] => Si
            [valor_tv_cable] => 50
            [telefono_fijo] => Si
            [valor_telefono_fijo] => 50
            [telefono_movil] => Si
            [valor_telefono_movil] => 50
            [vehiculo_propio] => Si
            [valor_vehiculo_propio] => 50
            [cantidad_vehiculos] => 1
            [vehiculo_medio_trabajo] => Si
            [valor_vehiculo_medio_trabajo] => 80
            [transporte_trasladarse_cim] => A-pie
            [valor_transporte_trasladarse_cim] => 100
            [tiempo_demora_cim] => 456
        )

    [Aspectoseconomicos] => Array
        (
            [id_nino] => 11
            [alimentacion] => 10
            [vivienda] => 10
            [luz] => 10
            [agua] => 10
            [vestimenta] => 10
            [panales] => 10
            [transporte] => 10
            [telefono_fijo] => 10
            [telefono_movil] => 10
            [gas] => 10
            [educacion] => 10
            [salud] => 10
            [cable] => 10
            [total] => 
            [deuda_grupo_familiar] => Si
            [valor_deuda_grupo_familiar] => 100
            [monto_adeudado] => 121
            [tipo_inversion] => l
        )

    [Consideraciones] => Array
        (
            [id_nino] => 11
            [historia_social] => 
            [diagnostico_social] => 
            [acciones_realizar] => 
            [seguimiento_trabajo_social] => 
            [seguimiento_psicologia] => 
            [observaciones] => 
        )

    [Familiares] => Array
        (
            [0] => Array
                (
                    [id_nino] => 11
                    [parentesco] => Padre
                    [nombres] => aaa
                    [paterno] => aaa
                    [materno] => aaa
                    [edad] => 18
                    [valor_edad] => 100
                    [sexo] => m
                    [grado_instruccion] => Primaria
                    [valor_grado_instruccion] => 100
                    [ocupacion] => Eventual
                    [valor_ocupacion] => 100
                    [ingresos] => 12
                    [valor_ingresos] => 100
                    [caracteristicas_trabajo_colegio] => sds
                )

            [1] => Array
                (
                    [id_nino] => 11
                    [parentesco] => Madre
                    [nombres] => aaa
                    [paterno] => aaa
                    [materno] => aaa
                    [edad] => 19
                    [valor_edad] => 100
                    [sexo] => f
                    [grado_instruccion] => Secundaria
                    [valor_grado_instruccion] => 80
                    [ocupacion] => Eventual
                    [valor_ocupacion] => 100
                    [ingresos] => 10
                    [valor_ingresos] => 100
                    [caracteristicas_trabajo_colegio] => flkgjhi fgdjoi fdgjoi
                )

            [2] => Array
                (
                    [id_nino] => 11
                    [parentesco] => hermanos
                    [nombres] => aaa
                    [paterno] => aaa
                    [materno] => aaa
                    [edad] => 12
                    [valor_edad] => 
                    [sexo] => f
                    [grado_instruccion] => Primaria
                    [valor_grado_instruccion] => 
                    [ocupacion] => Eventual
                    [valor_ocupacion] => 
                    [ingresos] => 12
                    [valor_ingresos] => 
                    [caracteristicas_trabajo_colegio] => flkgjhi fgdjoi fdgjoi
                )

            [3] => Array
                (
                    [id_nino] => 11
                    [parentesco] => 
                    [nombres] => 
                    [paterno] => 
                    [materno] => 
                    [edad] => 
                    [valor_edad] => 
                    [valor_grado_instruccion] => 
                    [valor_ocupacion] => 
                    [ingresos] => 
                    [valor_ingresos] => 
                    [caracteristicas_trabajo_colegio] => 
                )

        )

)





*/
?>