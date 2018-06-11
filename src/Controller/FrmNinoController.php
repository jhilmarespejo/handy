<?php 

    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Event\Event;
    use Cake\ORM\TableRegistry;
    use Cake\Datasource\ConnectionManager;

    //use Cake\I18n\Time;

class FrmNinoController extends AppController {
        //var $uses = array('Datosnino');
    //var $test = 'T E S T';
    public function index(){

        /*$conn = ConnectionManager::get('default');
        $stmt = $conn->query('SELECT c.nombre,d.nombres,d.paterno,d.materno,d.fecha_registro,d.num_ci,d.ci_expedido,d.sexo,d.discapacidad,d.municipio,d.macrodistrito,d.zona_barrio,d.calle_avenida,d.fono FROM datosnino d, cim c where c.id_cim=d.id_cim ORDER by d.paterno');
        $ninos = $stmt->fetchAll('assoc');
        $this->set(compact('ninos'));*/
        $this->loadmodel('Cim');
        $this->set('cims', $this->Cim->find('all')->where(['fecha_cierre is Null'])->order(['nombre' => 'ASC']));
    }

    public function add( $id_nino = null ){
        $this->loadmodel('Datosnino');
        
        $cim = TableRegistry::get('Cim');
        $cims = $cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
        $this->set(compact('cims'));


        if ($this->request->is('post')) {
            $idiomas ='';
            /*if( isset($this->request->data['familiares']) ){
                foreach ($this->request->data['familiares'] as $k => $value) {
                    if( is_array($this->request->data['familiares'][$k]['ocupacion']) ){
                        $this->request->data['familiares'][$k]['ocupacion']= json_encode($this->request->data['familiares'][$k]['ocupacion']);
                    }
                }
            }*/

            $this->request->data['vacunas']['id_nino'] = $this->request->data['datosnino']['id_nino'] ;
            $this->request->data['situacionfamiliar']['id_nino'] = $this->request->data['datosnino']['id_nino'] ;
            $this->request->data['caracteristicasvivienda']['id_nino'] = $this->request->data['datosnino']['id_nino'] ;
            $this->request->data['aspectoseconomicos']['id_nino'] = $this->request->data['datosnino']['id_nino']; 
            $this->request->data['consideraciones']['id_nino'] = $this->request->data['datosnino']['id_nino'];
            $this->request->data['consideraciones']['usuario'] = $this->request->session()->read('Auth.User.username');
            $this->request->data['consideraciones']['fecha_hora'] = strtotime ( '-4 hour' , strtotime (date('Y-m-d H:i:s')) );


            $datosnino = $this->Datosnino->newEntity();
            $this->loadmodel('Vacunas');
            $vacunas = $this->Vacunas->newEntity();
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

            $datosnino = $this->Datosnino->patchEntity($datosnino, $this->request->data['datosnino']);
            $vacunas = $this->Vacunas->patchEntity($vacunas, $this->request->data['vacunas'] );
            $situacionfamiliar = $this->Situacionfamiliar->patchEntity($situacionfamiliar, $this->request->data['situacionfamiliar'] );
            $caracteristicasvivienda = $this->Caracteristicasvivienda->patchEntity($caracteristicasvivienda, $this->request->data['caracteristicasvivienda'] );
            $aspectoseconomicos = $this->Aspectoseconomicos->patchEntity($aspectoseconomicos, $this->request->data['aspectoseconomicos'] );
            $consideraciones = $this->Consideraciones->patchEntity($consideraciones, $this->request->data['consideraciones'] );



            if( $this->Datosnino->save($datosnino) && $this->Situacionfamiliar->save($situacionfamiliar) && 
            $this->Caracteristicasvivienda->save($caracteristicasvivienda) && $this->Vacunas->save($vacunas) && $this->Aspectoseconomicos->save($aspectoseconomicos) && $this->Consideraciones->save($consideraciones)) {
                $success = true;
                if( isset($this->request->data['familiares']) ){
                //if($this->request->data['familiares']){
                    foreach ($this->request->data['familiares'] as $key => $value) {
                        $this->request->data['familiares'][$key]['id_nino'] = $this->request->data['datosnino']['id_nino'];
                    }
                    $familiares = TableRegistry::get('Familiares');
                    $entities = $familiares->newEntities($this->request->data['familiares']);
                    foreach ($entities as $entity) {
                        if( $familiares->save($entity) ){
                            $success = true;
                        } else {
                            $success = false;
                        }
                    }
                }
         } 
            if($success) {
                $this->Flash->success(__('Datos guardados correctamente'));
                $this->redirect('/frm-nino');
            } else {
                $this->Flash->error(__('Error en el almacenamiento de datos'));
            }
            
       } if( $id_nino ) {
            $datosnino= $this->Datosnino->find('all')->where(['id_nino' => $id_nino])->toArray();
            /*$situacionfamiliar= $this->Situacionfamiliar->find('all')->where(['id_nino' => $id_nino])->toArray();
            $familiares= $this->Familiares->find('all')->where(['id_nino' => $id_nino])->toArray();
            $caracteristicasvivienda= $this->Caracteristicasvivienda->find('all')->where(['id_nino' => $id_nino])->toArray();
            $aspectoseconomicos= $this->Aspectoseconomicos->find('all')->where(['id_nino' => $id_nino])->toArray();
            $consideraciones= $this->Consideraciones->find('all')->where(['id_nino' => $id_nino])->toArray();
           // $vacunas= $this->Vacunas->get($id_nino);*/
    
            //$this->set(['nino' => $datosnino, 'situacionfamiliar' => $situacionfamiliar, 'familiares' => $familiares, 'caracteristicasvivienda' => $caracteristicasvivienda, 'aspectoseconomicos' => $aspectoseconomicos, 'consideraciones' => $consideraciones]);
            
            $this->set(['nino' => $datosnino]);
        }
    }



    public function control( $id_nino = null ){

         if( $id_nino ) {
            $this->loadmodel('Datosnino');
            //$this->loadmodel('Vacunas');
            $this->loadmodel('Consideraciones');
            $this->loadmodel('Situacionfamiliar');
            $this->loadmodel('Familiares');
            $this->loadmodel('Caracteristicasvivienda');
            $this->loadmodel('Aspectoseconomicos');



            $datosnino = $this->Datosnino->find('all')->where(['id_nino' => $id_nino])->toArray();
            $situacionfamiliar = $this->Situacionfamiliar->find('all')->where(['id_nino' => $id_nino])->toArray();
            $familiares = $this->Familiares->find('all')->where(['id_nino' => $id_nino])->toArray();
            $caracteristicasvivienda = $this->Caracteristicasvivienda->find('all')->where(['id_nino' => $id_nino])->toArray();
            $aspectoseconomicos = $this->Aspectoseconomicos->find('all')->where(['id_nino' => $id_nino])->toArray();
            $consideraciones = $this->Consideraciones->find('all')->where(['id_nino' => $id_nino])->toArray();
            /*$vacunas= $this->Vacunas->get($id_nino);*/
    
           /* pr($datosnino);
            pr($situacionfamiliar);
            pr($familiares);
            pr($caracteristicasvivienda);
            pr($aspectoseconomicos);
            pr($consideraciones);
            exit;*/

            $this->set(['datosnino' => $datosnino, 'situacionfamiliar' => $situacionfamiliar, 'familiares' => $familiares, 'caracteristicasvivienda' => $caracteristicasvivienda, 'aspectoseconomicos' => $aspectoseconomicos, 'consideraciones' => $consideraciones]);
        }
        else{
            $this->loadmodel('Consideraciones');
            $consideraciones = $this->Consideraciones->find()->select(['id_nino', 'usuario', 'fecha_hora'])->order(['fecha_hora' => 'DESC'])->toArray();

            $this->set(['consideraciones'=>$consideraciones]);
            $this->render('/FrmNino/seguimiento');
        }
    }

    public function edit( $id_nino = null ){

        /* Consulta la lista de los niños pertenencientes a un CIM 
            usos: 
                frm-nino/index
                cuadro-signos-vitales/add
        */
        $this->loadmodel('Datosnino');
        if( isset($this->request->data['data']['0']) && $this->request->data['data']['1']=='getNinos'){
         //pr($this->request->data['data']); exit;
            $idCim = $this->request->data['data']['0'];

            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(['id_cim'=>$idCim, 'causas_retiro is Null'])->order(['paterno', 'sexo']);
        
            $this->viewBuilder()->layout(false);
            $this->set(['ninos'=>$datosnino]);
            $this->render('/FrmNino/list');
        } else{
            $this->loadmodel('Cim');
            $this->loadmodel('Vacunas');
            $this->loadmodel('Situacionfamiliar');
            $this->loadmodel('Familiares');
            $this->loadmodel('Caracteristicasvivienda');
            $this->loadmodel('Consideraciones');
            $this->loadmodel('Aspectoseconomicos');

            /*Consulta la informacion para ser envida al formulario de edicion de datos*/
            $datosnino = $this->Datosnino->get($id_nino);
            $vacunas = $this->Vacunas->find()->where(['id_nino'=>$id_nino])->first();
            $situacionfamiliar = $this->Situacionfamiliar->find()->where(['id_nino'=>$id_nino])->first();
            $familiares = $this->Familiares->find()->where(['id_nino'=>$id_nino]);
            $cims = $this->Cim->find()->select(['id_cim', 'nombre'])->order('nombre')->where(['fecha_cierre is Null']);
            $caracteristicasvivienda = $this->Caracteristicasvivienda->find()->where(['id_nino'=>$id_nino])->first();
            $consideraciones = $this->Consideraciones->find()->where(['id_nino'=>$id_nino])->first();
            $aspectoseconomicos = $this->Aspectoseconomicos->find()->where(['id_nino'=>$id_nino])->first();

            $cimActual = $this->Cim->find()->select(['id_cim', 'nombre'])->where(['id_cim' => $datosnino['id_cim']])->first();

            if( $id_nino ) {
                $this->set(['cims' => $cims, 'datosnino' => $datosnino, 'vacunas'=>$vacunas, 'situacionfamiliar'=>$situacionfamiliar,'familiares' => $familiares, 'caracteristicasvivienda'=>$caracteristicasvivienda, 'consideraciones' => $consideraciones, 'aspectoseconomicos' =>  $aspectoseconomicos, 'cimActual' => $cimActual]);
            }

            if ( $this->request->is(['post', 'put']) ) {
                
                $this->request->data['vacunas']['id_nino'] = $this->request->data['datosnino']['id_nino'] ;
                $this->request->data['situacionfamiliar']['id_nino'] = $this->request->data['datosnino']['id_nino'] ;
                $this->request->data['caracteristicasvivienda']['id_nino'] = $this->request->data['datosnino']['id_nino'];
                $this->request->data['aspectoseconomicos']['id_nino'] = $this->request->data['datosnino']['id_nino'];
                
                $this->request->data['consideraciones']['id_nino'] = $this->request->data['datosnino']['id_nino'];
                $this->request->data['consideraciones']['usuario'] = $this->request->session()->read('Auth.User.username');
                $this->request->data['consideraciones']['fecha_hora'] = strtotime ( '-4 hour' , strtotime (date('Y-m-d H:i:s')) );

                if( empty($this->request->data['datosnino']['causas_retiro']) ){
                    $this->request->data['datosnino']['causas_retiro'] = Null;
                }

                $datosnino = $this->Datosnino->patchEntity($datosnino, $this->request->data['datosnino']);

                if( empty($vacunas) ){
                    $vacunas = $this->Vacunas->newEntity();
                    $vacunas = $this->Vacunas->patchEntity($vacunas, $this->request->data['vacunas']);
                } else {
                    $vacunas = $this->Vacunas->patchEntity($vacunas, $this->request->data['vacunas'] );
                }

                if( empty($situacionfamiliar) ){
                    $situacionfamiliar = $this->Situacionfamiliar->newEntity();
                    $situacionfamiliar = $this->Situacionfamiliar->patchEntity($situacionfamiliar, $this->request->data['situacionfamiliar']);
                } else {
                    $situacionfamiliar = $this->Situacionfamiliar->patchEntity($situacionfamiliar, $this->request->data['situacionfamiliar'] );
                }
            
                if( empty($caracteristicasvivienda) ){
                    $caracteristicasvivienda = $this->Caracteristicasvivienda->newEntity();
                    $caracteristicasvivienda = $this->Caracteristicasvivienda->patchEntity($caracteristicasvivienda, $this->request->data['caracteristicasvivienda']);
                } else {
                    $caracteristicasvivienda = $this->Caracteristicasvivienda->patchEntity($caracteristicasvivienda, $this->request->data['caracteristicasvivienda'] );                
                }

                if( empty($consideraciones) ){
                    $consideraciones = $this->Consideraciones->newEntity();
                    $consideraciones = $this->Consideraciones->patchEntity($consideraciones, $this->request->data['consideraciones']);
                } else {
                    $consideraciones = $this->Consideraciones->patchEntity($consideraciones, $this->request->data['consideraciones'] );                
                }
                if( empty($aspectoseconomicos) ){
                    $aspectoseconomicos = $this->Aspectoseconomicos->newEntity();
                    $aspectoseconomicos = $this->Aspectoseconomicos->patchEntity($aspectoseconomicos, $this->request->data['aspectoseconomicos']);
                } else {
                    $aspectoseconomicos = $this->Aspectoseconomicos->patchEntity($aspectoseconomicos, $this->request->data['aspectoseconomicos'] );                
                }


                /*JE: actualiza datos de familiares existentes y agrea nuevos si es enecesario */
/*pr($familiares); 
pr($this->request->data) ;exit;*/
                if( isset($this->request->data['familiares']) ){
                    foreach ( $this->request->data['familiares'] as $key => $fam ) {
                        if( !isset($fam['id']) ){
                            $fam['id_nino'] = $id_nino;
                            $familiar = $this->Familiares->newEntity();
                        }else{
                            $familiar = $this->Familiares->find()->where( ['id'=>$fam['id'] ] )->first();
                        }
                        $this->Familiares->patchEntity($familiar, $fam);

                        if ($this->Familiares->save($familiar)) {
                            $success = true;
                        } else {
                                $success = false;
                        }
                    }
                }

               if( $this->Datosnino->save($datosnino) && $this->Situacionfamiliar->save($situacionfamiliar) && $this->Caracteristicasvivienda->save($caracteristicasvivienda) && $this->Vacunas->save($vacunas) && $this->Consideraciones->save($consideraciones) && $this->Aspectoseconomicos->save($aspectoseconomicos) ) {
                    $success = true;
                } else {
                        $success = false;
                }

                if($success) {
                    $this->Flash->success(__('Datos actualizados correctamente'));
                    $this->redirect('/frm-nino/');
                } else {
                    $this->Flash->error(__('Error en la actualización de datos'));
                }
            } 
        }


    }
    public function find(){
        //pr( $this->request->data['paterno'] );
        $this->loadmodel('Datosnino');
        if( isset($this->request->data['paterno']) ) {
            $paterno = '%'.$this->request->data['paterno'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(["paterno LIKE" => $paterno, " causas_retiro is Null"])->order(['paterno', 'sexo']);
        }
        if( isset($this->request->data['nombres']) ) {
            $nombres = '%'.$this->request->data['nombres'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(['Datosnino.nombres LIKE' => $nombres, ' causas_retiro is Null'])->order(['nombres', 'sexo']);
        }   
        if( isset($this->request->data['materno']) ) {
            $materno = '%'.$this->request->data['materno'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(["materno LIKE" => $materno, " causas_retiro is Null"])->order(['materno', 'sexo']);
        }  
        if( isset($this->request->data['paterno']) && isset($this->request->data['materno'])) {
            $paterno = '%'.$this->request->data['paterno'].'%';
            $materno = '%'.$this->request->data['materno'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(["paterno LIKE" => $paterno, "materno LIKE" => $materno, " causas_retiro is Null"])->order(['paterno', 'materno','sexo']);
        }   
        if( isset($this->request->data['paterno']) && isset($this->request->data['nombres'])) {
            $paterno = '%'.$this->request->data['paterno'].'%';
            $nombres = '%'.$this->request->data['nombres'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(["paterno LIKE" => $paterno, "nombres LIKE" => $nombres, " causas_retiro is Null"])->order(['paterno', 'nombres','sexo']);
        }  
        if( isset($this->request->data['materno']) && isset($this->request->data['nombres'])) {
            $materno = '%'.$this->request->data['materno'].'%';
            $nombres = '%'.$this->request->data['nombres'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(["materno LIKE" => $materno, "nombres LIKE" => $nombres, " causas_retiro is Null"])->order(['materno', 'nombres','sexo']);
        }
        if( isset($this->request->data['paterno']) && isset($this->request->data['materno']) && isset($this->request->data['nombres'])) {
            $paterno = '%'.$this->request->data['paterno'].'%';
            $materno = '%'.$this->request->data['materno'].'%';
            $nombres = '%'.$this->request->data['nombres'].'%';
            $datosnino = $this->Datosnino->find()->select(['id_nino','paterno','materno','nombres'])->where(["paterno LIKE" => $paterno,"materno LIKE" => $materno, "nombres LIKE" => $nombres, " causas_retiro is Null"])->order(['paterno','materno', 'nombres','sexo']);
        }

        $this->viewBuilder()->layout(false);
        $this->set(['ninos'=>$datosnino]);
        $this->render('/FrmNino/list');


    }

    public function reports(){
        //exit('ccccc');
        $conn = ConnectionManager::get('default');

        $stmt1 = $conn->query('call nino("report1")');
        $data1 = $stmt1->fetchAll('assoc');
        unset($stmt1);
        //pr($data1);
        //exit;

        /*$stmt2 = $conn->query('call nino("report2")');
        $data2 = $stmt2->fetchAll('assoc');
        unset($stmt2);

        $stmt3 = $conn->query('call nino("report3")');
        $data3 = $stmt3->fetchAll('assoc');
        unset($stmt3);

        $stmt4 = $conn->query('call nino("report4")');
        $data4 = $stmt4->fetchAll('assoc');

        unset($stmt4);

        $stmt5 = $conn->query('call nino("report5")');
        $data5 = $stmt5->fetchAll('assoc');
        unset($stmt5);
       
        $stmt6 = $conn->query('call nino("report6")');
        $data6 = $stmt6->fetchAll('assoc');
        unset($stmt6);

        $stmt7 = $conn->query('call nino("report7")');
        $data7 = $stmt7->fetchAll('assoc');
        unset($stmt7);

        $stmt8 = $conn->query('call nino("report8")');
        $data8 = $stmt8->fetchAll('assoc');
        unset($stmt8);

        $stmt9 = $conn->query('call nino("report9")');
        $data9 = $stmt9->fetchAll('assoc');
        unset($stmt9);

        $stmt10 = $conn->query('call nino("report10")');
        $data10 = $stmt10->fetchAll('assoc');
        unset($stmt10);

        $stmt11 = $conn->query('call nino("report11")');
        $data11 = $stmt11->fetchAll('assoc');
        unset($stmt11);

        $stmt12 = $conn->query('call nino("report12")');
        $data12 = $stmt12->fetchAll('assoc');
        unset($stmt12);

        $stmt13 = $conn->query('call nino("report13")');
        $data13 = $stmt13->fetchAll('assoc');
        unset($stmt13);

        $stmt14 = $conn->query('call nino("report14")');
        $data14 = $stmt14->fetchAll('assoc');
        unset($stmt14);

        $stmt15 = $conn->query('call nino("report15")');
        $data15 = $stmt15->fetchAll('assoc');
        unset($stmt15);

        $stmt16 = $conn->query('call nino("report16")');
        $data16 = $stmt16->fetchAll('assoc');
        unset($stmt16);

        $stmt17 = $conn->query('call nino("report17")');
        $data17 = $stmt17->fetchAll('assoc');
        unset($stmt17);

        $stmt18 = $conn->query('call nino("report18")');
        $data18 = $stmt18->fetchAll('assoc');
        unset($stmt18);

        $stmt19 = $conn->query('call nino("report19")');
        $data19 = $stmt19->fetchAll('assoc');
        unset($stmt19);

        $stmt20 = $conn->query('call nino("report20")');
        $data20 = $stmt20->fetchAll('assoc');
        unset($stmt20);

        $stmt21 = $conn->query('call nino("report21")');
        $data21 = $stmt21->fetchAll('assoc');
        unset($stmt21);*/

       // $this->set('data', [null, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, '$data11', $data12, $data13, $data14, $data15, $data16, $data17, $data18, $data19, $data20, $data21]);

        $this->set('data', [null, $data1]);
    }

    public function beforeFilter(Event $event)
    {
        if( $this->Auth->user('role') == 'Trabajo social' || $this->Auth->user('role') == 'admin' ){
            $this->Auth->allow(['index', 'add', 'edit', 'reports']);
        } else {
            $this->Auth->deny(['index', 'add', 'edit', 'reports']);
            return $this->redirect('/');
        }
    }

}

?>
