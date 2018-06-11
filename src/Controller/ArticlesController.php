<?php 

	namespace App\Controller;
	use App\Controller\AppController;


class ArticlesController extends AppController
{
	public function index(){
		$articles = $this->Articles->find('all');
		$this->set(compact('articles'));
	}

	public function view($id = null){
		$article = $this->Articles->get($id);
		$this->set(compact('article'));
	}

	public function add() {
		
		if ($this->request->is('post')) {
			
			if ($this->Articles->save($article)) {
				$this->Flash->success(__('Your article has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
		}
		$this->Flash->error(__('Unable to add your article.')); 
		$this->set('article', $article);
		//pr($article);exit;
	}

	public function edit($id = null)
	{
		$article = $this->Articles->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->Articles->patchEntity($article, $this->request->data);
			if ($this->Articles->save($article)) {
				$this->Flash->success(__('Tu artículo ha sido actualizado.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Tu artículo no se ha podido actualizar.'));
		}
		$this->set('article', $article);
	}


	public function isAuthorized($user)
	{
		// All registered users can add articles
		if ($this->request->action === 'add') {
			return true;
		}
		// The owner of an article can edit and delete it
		if (in_array($this->request->action, ['edit', 'delete'])) {
			$articleId = (int)$this->request->params['pass'][0];
			if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
				return true;
			}
		}
		return parent::isAuthorized($user);
	}
}//class ArticlesController

?>
