<?php 

// src/Controller/UsersController.php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
class UsersController extends AppController
{
	/*public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow('add');
	}*/
	public function index()
	{
		//pr($this->request->params['controller']);
		$this->set('users', $this->Users->find('all'));
		//exit('User index');
	}
	public function view($id)
	{
		if (!$id) {
			throw new NotFoundException(__('Invalid user'));
		}
		exit('User view');

		$user = $this->Users->get($id);
		$this->set(compact('user'));
	}
	public function add()
	{
		if($this->Auth->user('role') == 'admin'){
			$user = $this->Users->newEntity();
			if ($this->request->is('post')) {
				$user = $this->Users->patchEntity($user, $this->request->data);
				//pr($this->request->data);exit;
				if ($this->Users->save($user)) {
					$this->Flash->success(__('Usuario creado correctamente'));
					return $this->redirect(['action' => 'add']);
				}
				$this->Flash->error(__('Error al guardar usuario'));
			}
			$this->set('user', $user);

			$this->loadmodel('Cim');
			$cims = $this->Cim->find('all')->order(['nombre' => 'ASC']);
			$this->set(compact('cims'));

		} else {
			$this->Flash->success(__('No autorizado.'));
			return $this->redirect(['controller' => 'Articles', 'action' => 'index']);
		}

	}

	public function edit( $id = null){
		$user = $this->Users->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				$this->Flash->success(__('Datos actualizados correctamente.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Error en la actualización de datos'));
		}
		$this->set('user', $user);
	}



	public function beforeFilter(Event $event)
	{
		//parent::beforeFilter($event);
// Allow users to register and logout.
// You should not add the "login" action to allow list. Doing so would
// cause problems with normal functioning of AuthComponent.
		//$this->Auth->allow('logout');
		/*$role = $this->Auth->user('role');
		$url = $this->Auth->request->url;
		if( !$role ) {
			$this->redirect('/');
		}*/

	}

	
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ( $user ) {
				$this->Auth->setUser($user);
				if($user['role'] == 'trabajo social'){
					return $this->redirect(['controller' => 'Fichasocial', 'action' => 'index']);
				} elseif($user['role'] == 'equipo tecnico'){
					return $this->redirect(['controller' => 'Cim', 'action' => 'index']);
				}  elseif($user['role'] == 'admin'){
					//pr($this->request->session()->read('Auth'));exit;
					return $this->redirect(['controller' => 'index', 'action' => 'index']);
				}
				else {
					return $this->redirect('/');
				}
			}
			$this->Flash->error(__('Nombre de usuario o contraseña incorrecto'));
		}
	}
	public function logout()
	{
		$session = $this->request->session();
		$session->destroy();
		$this->Auth->logout();
		return $this->redirect('/');


	}




}
?>