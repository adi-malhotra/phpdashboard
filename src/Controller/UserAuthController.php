<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Auth\DigestAuthenticate;
use Cake\View\ViewBuilder;

/**
 * UserAuth Controller
 *
 *
 * @method \App\Model\Entity\UserAuth[] paginate($object = null, array $settings = [])
 */
class UserAuthController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
    */
    public function initialize(){
      parent::initialize();
      $this->Auth->config('authenticate', [
          'Form' => [
            'fields' => ['username' => 'login_id'],
            'userModel' => 'UserAuth'
          ]
      ]);
      $this->Auth->allow(['logout','register']);
    }
    public function isAuthorized($user){
      $action = $this->request->getParam('action');
      if(in_array($action,['index','add','edit','delete','view']) && isset($user) && $user['user_role']=='admin'){
        return true;
      }
      return false;
    }
    public function index()
    {
        $userAuth = $this->paginate($this->UserAuth);
        $this->set(compact('userAuth'));
        $this->set('_serialize', ['userAuth']);
    }

    protected function _setPassword($password){
      if(strlen($password) > 0){
        return (new DefaultPasswordHasher)->hash($password);
      }
    }

    /**
     * View method
     *
     * @param string|null $id User Auth id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function login(){
      // $this->viewBuilder()->setLayout('default');
      if ($this->request->is('post')) {
       $user = $this->Auth->identify();
       if ($user) {
           $this->Auth->setUser($user);
           return $this->redirect($this->Auth->redirectUrl());
       }
       $this->Flash->error('Your username or password is incorrect.');
    }
      // $auth_users = $this->UserAuth->find()
      //                    ->toArray();
      // if($this->request->is('post')){
      //   $user = $this->request->getData();
      //   $auth_users = $this->UserAuth->find()
      //                    ->toArray();
      //   $found = false;
      //   foreach($auth_users as $users){
      //     if($users->login_id==$user["login_id"]){
      //       $found = true;
      //       $found_user = $users;
      //       break;
      //     }
      //   }
      //   if($found==false || $found_user->password!=$user["password"]){
      //     $this->Flash->error(__('Invalid username or password, try again'));
      //   }
      //   else{
      //     return $this->redirect(
      //       ["controller"=>"ApplicationMaster",
      //         "action" => "index"
      //       ]
      //     );
      //   }
      // }
      // $this->set('userAuth',$userAuth);
      // $this->set('auth_users',$auth_users);
    }
   public function logout(){
      $this->Flash->success('You are now logged out.');
      return $this->redirect($this->Auth->logout());
   }
    public function view($id = null)
    {
        $userAuth = $this->UserAuth->get($id, [
            'contain' => []
        ]);

        $this->set('userAuth', $userAuth);
        $this->set('_serialize', ['userAuth']);
    }

    public function register() {
      if($this->request->is('post')){
      $data = $this->request->getData();
      // debug($data);
      // die;
      $newuser['login_id'] = $data['login_id'];
      $newuser['password'] = $this->_setPassword($data['password']);
      $newuser['org_id'] = $data['org_id'];
      $newuser['emp_code'] = $data['emp_code'];
      $user = $this->UserAuth->newEntity($newuser);
      if ($this->UserAuth->save($user)) {
          $this->Auth->setUser($user->toArray());
          return $this->redirect([
              'controller' => 'Pages',
              'action' => 'display',
              'home'
          ]);
      }
    }
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAuth = $this->UserAuth->newEntity();
        if ($this->request->is('post')) {
          $postData = $this->request->getData();
          $data = array();
          $data = array_merge($data,$postData);
          $data = array_merge($data,array(
            "created_by"  => "",
            "created_date" => "",
            "modified_by" => "",
            "modified_date" => ""
          ));
          $cdate = date('Y-m-d H:i:s');
          $data['created_date']['year'] = date('Y',strtotime($cdate));
          $data['created_date']['month'] = date('m',strtotime($cdate));
          $data['created_date']['day'] = date('d',strtotime($cdate));
          $data['created_date']['hour'] = date('H',strtotime($cdate . '+5 hours'));
          $data['created_date']['minute'] = date('i',strtotime($cdate. '+30 minutes'));
          $userAuth = $this->UserAuth->patchEntity($userAuth, $data);
          if ($this->UserAuth->save($userAuth)) {
              $this->Flash->success(__('The user auth has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The user auth could not be saved. Please, try again.'));
        }
        $this->set(compact('userAuth'));
        $this->set('_serialize', ['userAuth']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Auth id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAuth = $this->UserAuth->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
          $postData = $this->request->getData();
          $data = array();
          $data = array_merge($data,$postData);
          $data = array_merge($data,array(
            "created_by"  => "",
            "created_date" => "",
            "modified_by" => "",
            "modified_date" => ""
          ));
          $cdate = date('Y-m-d H:i:s');
          $data['modified_date']['year'] = date('Y',strtotime($cdate));
          $data['modified_date']['month'] = date('m',strtotime($cdate));
          $data['modified_date']['day'] = date('d',strtotime($cdate));
          $data['modified_date']['hour'] = date('H',strtotime($cdate . '+5 hours'));
          $data['modified_date']['minute'] = date('i',strtotime($cdate. '+30 minutes'));
          $userAuth = $this->UserAuth->patchEntity($userAuth,$data);
          if ($this->UserAuth->save($userAuth)) {
              $this->Flash->success(__('The user auth has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The user auth could not be saved. Please, try again.'));
        }
        $this->set(compact('userAuth'));
        $this->set('_serialize', ['userAuth']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Auth id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAuth = $this->UserAuth->get($id);
        if ($this->UserAuth->delete($userAuth)) {
            $this->Flash->success(__('The user auth has been deleted.'));
        } else {
            $this->Flash->error(__('The user auth could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
