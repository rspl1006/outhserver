<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{
	public function beforeFilter(Event $event)
        {
            parent::beforeFilter($event);
            if($this->Auth->isAuthorized()){
                $this->Auth->allow('add');
            }else{
                $this->Auth->allow(array('add','logout'));
            }
        }
	
	public function logintest()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				$redirectUri = $this->Auth->redirectUrl();				
				if ($this->request->query['redir'] === 'oauth') {
					$redirectUri = [
						'plugin' => 'OAuthServer',
						'controller' => 'OAuth',
						'action' => 'authorize',
						'?' => $this->request->query
					];
				}
				return $this->redirect($redirectUri);
			} else {
				$this->Flash->error(
					__('Username or password is incorrect'),
					'default',
					[],
					'auth'
				);
			}
		}
	}
	
	public function add()
        {
            $user = $this->Users->newEntity();
            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'add']);
                }
                $this->Flash->error(__('Unable to add the user.'));
            }
            $this->set('user', $user);
        }
	public function logouttest()
        {
            return $this->redirect($this->Auth->logout());
        }
        public function getuserbalance(){
            echo "111";exit;
        }
}
?>