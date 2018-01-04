<?php
namespace App\Controller;

use App\Controller\AppController;

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
    public function index()
    {
        $userAuth = $this->paginate($this->UserAuth);
        $this->set(compact('userAuth'));
        $this->set('_serialize', ['userAuth']);
    }

    /**
     * View method
     *
     * @param string|null $id User Auth id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function login(){
      $userAuth = $this->UserAuth->newEntity();
      $auth_users = $this->UserAuth->find()
                         ->toArray();
      if($this->request->is('post')){
        $user = $this->request->getData();
        $auth_users = $this->UserAuth->find()
                         ->toArray();
        $found = false;
        foreach($auth_users as $users){
          if($users->login_id==$user["login_id"]){
            $found = true;
            $found_user = $users;
            break;
          }
        }
        if($found==false || $found_user->password!=$user["password"]){
          $this->Flash->error(__('Invalid username or password, try again'));
        }
        else{
          return $this->redirect(
            ["controller"=>"ApplicationMaster",
              "action" => "index"
            ]
          );
        }
      }
      $this->set('userAuth',$userAuth);
      $this->set('auth_users',$auth_users);
    }
   // public function logout(){
   //     return $this->redirect($this->Auth->logout());
   // }
    public function view($id = null)
    {
        $userAuth = $this->UserAuth->get($id, [
            'contain' => []
        ]);

        $this->set('userAuth', $userAuth);
        $this->set('_serialize', ['userAuth']);
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
