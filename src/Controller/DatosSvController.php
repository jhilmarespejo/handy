<?php 

	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;


class DatosSvController extends AppController
{
	public function index(){
	}

	public function search(){
		if($this->request->is('post')){

			//pr($this->request->data['data']);//exit;
			$nombre1 = $this->request->data['data'][0];
			$nombre2 = $this->request->data['data'][1];
			$paterno = $this->request->data['data'][2];
			$materno = $this->request->data['data'][3];
			//$cim = $this->request->data['data'][4];
/*$datosSv = $this->DatosSv->find('all')->where(['nombre1'=>$nombre1, 'nombre2'=>$nombre2, 'paterno'=>$paterno, , '	materno'=>$materno]] )->order('mes asc');*/
			if( !empty($nombre1) && empty($nombre2) && empty($materno) && empty($paterno) ){
				$datosSv = $this->DatosSv->find('all')->where([ ["nombre1 like '$nombre1%'"] ] )->order('mes asc');
			}
			if( !empty($nombre2) && empty($nombre1) && empty($materno) && empty($paterno) ){
				$datosSv = $this->DatosSv->find('all')->where([ ["nombre2 like '$nombre2%'"] ] )->order('mes asc');
			}
			if( !empty($paterno) && empty($nombre2) && empty($materno) && empty($nombre1) ){
				$datosSv = $this->DatosSv->find('all')->where([ ["paterno like '$paterno%' "] ] )->order('mes asc');
			}
			if( !empty($materno) && empty($nombre1) && empty($nombre2) && empty($paterno) ){
				$datosSv = $this->DatosSv->find('all')->where([ ["materno like '$materno%' "] ] )->order('mes asc');
			}
			
			if( !empty($nombre1) && !empty($paterno) && empty($nombre2) && empty($materno) ){
				$datosSv = $this->DatosSv->find('all')->where([ "nombre1 like '$nombre1%' and paterno like '$paterno%' " ] )->order('mes asc');
			}

			if( !empty($paterno) && !empty($materno) && empty($nombre1) && empty($nombre2) ){
				$datosSv = $this->DatosSv->find('all')->where([ "paterno like '$paterno%' and materno like '$materno%' " ] )->order('mes asc');
			}

			if( !empty($nombre1) && !empty($paterno) && !empty($materno) && empty($nombre2) ){
				$datosSv = $this->DatosSv->find('all')->where([ "nombre1 like '$nombre1%' and paterno like '$paterno%' and materno like '$materno%' " ] )->order('mes asc');
			}


			if( !empty($nombre1) && empty($paterno) && !empty($materno) && empty($nombre2) ){
				$datosSv = $this->DatosSv->find('all')->where([ "nombre1 like '$nombre1%' and materno like '$materno%' " ] )->order('mes asc');
			}

			if( !empty($nombre1) && empty($paterno) && !empty($materno) && !empty($nombre2) ){
				$datosSv = $this->DatosSv->find('all')->where([ "nombre1 like '$nombre1%' and nombre2 like '$nombre2%' and materno like '$materno%' " ] )->order('mes asc');
			}

			if( empty($nombre1) && empty($paterno) && !empty($nombre2) && empty($materno) ){
				$datosSv = $this->DatosSv->find('all')->where([ "nombre2 like '$nombre2%' and materno like '$materno%' " ] )->order('mes asc');
			}

			if(empty($datosSv)){
				exit('Sin resultados');
			}

			//pr($datosSv); exit;
			$this->viewBuilder()->layout(false);
			$this->set(['datosSv'  => $datosSv]);
			$this->render('/DatosSv/result');
			//$cims = $cim->find()->select(['id_cim', 'nombre'])->where(['fecha_cierre is Null'])->order('nombre');
		}
	}
}


?>