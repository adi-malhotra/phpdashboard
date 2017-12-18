<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserRole Controller
 *
 *
 * @method \App\Model\Entity\UserRole[] paginate($object = null, array $settings = [])
 */
class UserRoleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pages = $this->paginate($this->UserRole);
        $userRole = $this->UserRole->find()
                         ->contain(['RoleMaster','UserAuth'])
                         ->toArray();
        $this->set(compact('userRole'));
        $this->set('_serialize', ['userRole']);
    }

    /**
     * View method
     *
     * @param string|null $id User Role id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $current = $this->UserRole->get($id, [
            'contain' => []
        ]);
        $userRole = $this->UserRole->find()
                         ->contain(['RoleMaster','UserAuth'])
                         ->where(['RoleMaster.role_id'=>$current->role_id])
                         ->where(['UserAuth.user_id'=>$current->auth_user_id])
                         ->toArray();
        $this->set('userRole', $userRole[0]);
        $this->set('_serialize', ['userRole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userRole = $this->UserRole->newEntity();
        if ($this->request->is('post')) {
          $postData = $this->request->getData();
          $data = array();
          $data = array_merge($data,$postData);
          $data = array_merge($data,array(
            "created_by"  => "7",
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
          $userRole = $this->UserRole->patchEntity($userRole, $data);
          if ($this->UserRole->save($userRole)) {
              $this->Flash->success(__('The user role has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The user role could not be saved. Please, try again.'));
        }
        $x = $this->UserRole->UserAuth->find()->toArray();
        $users = [];
        foreach($x  as $user){
          $users[$user->user_id]=$user->login_id;
        }
        $y = $this->UserRole->RoleMaster->find()->toArray();
        $roles = [];
        foreach($y as $role){
          $roles[$role->role_id] = $role->role_desc;
        }
        $this->set('users',$users);
        $this->set('roles',$roles);
        $this->set(compact('userRole'));
        $this->set('_serialize', ['userRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userRole = $this->UserRole->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
          $postData = $this->request->getData();
          $data = array();
          $data = array_merge($data,$postData);
          $data = array_merge($data,array(
            "modified_by" => "",
            "modified_date" => ""
          ));
          $cdate = date('Y-m-d H:i:s');
          $data['modified_date']['year'] = date('Y',strtotime($cdate));
          $data['modified_date']['month'] = date('m',strtotime($cdate));
          $data['modified_date']['day'] = date('d',strtotime($cdate));
          $data['modified_date']['hour'] = date('H',strtotime($cdate . '+5 hours'));
          $data['modified_date']['minute'] = date('i',strtotime($cdate. '+30 minutes'));
          $userRole = $this->UserRole->patchEntity($userRole, $data);
          if ($this->UserRole->save($userRole)) {
              $this->Flash->success(__('The user role has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The user role could not be saved. Please, try again.'));
        }
        $x = $this->UserRole->UserAuth->find()->toArray();
        $users = [];
        foreach($x  as $user){
          $users[$user->user_id]=$user->login_id;
        }
        $y = $this->UserRole->RoleMaster->find()->toArray();
        $roles = [];
        foreach($y as $role){
          $roles[$role->role_id] = $role->role_desc;
        }
        $this->set('users',$users);
        $this->set('roles',$roles);
        $this->set(compact('userRole'));
        $this->set('_serialize', ['userRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRole = $this->UserRole->get($id);
        if ($this->UserRole->delete($userRole)) {
            $this->Flash->success(__('The user role has been deleted.'));
        } else {
            $this->Flash->error(__('The user role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
