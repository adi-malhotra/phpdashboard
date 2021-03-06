<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requests Controller
 *
 * @property \App\Model\Table\RequestsTable $Requests
 *
 * @method \App\Model\Entity\Request[] paginate($object = null, array $settings = [])
 */
class RequestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pages = $this->paginate($this->Requests);
        $requests = $this->Requests->find()
                  ->contain('ApplicationMaster')
                  ->toArray();
        $this->set("pages",$pages);
        $this->set(compact('requests'));
        $this->set('_serialize', ['requests']);
    }
    public function isAuthorized($user){
      $action = $this->request->getParam('action');
      if(in_array($action,['add','index']) && isset($user) && $user['user_role']=='maker'){
        // pr($user);
        // die;
        return true;
      }
      else if(in_array($action,['edit','delete']) && isset($user) && $user['user_role']=='maker'){
        $id = (int)$this->request->getParam('pass.0');
        $userAuth = $this->Requests->find()
                        ->contain('UserAuth')
                        ->where(['Requests.id'=>$id])
                        ->toArray();
        if($userAuth && $userAuth[0]->user_id==$user['user_id'])
          return true;
      }
      else if(in_array($action,['edit','index','delete']) && isset($user) && $user['user_role']=='checker')
        return true;
      return false;
    }
    /**
     * View method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $current = $this->Requests->get($id, [
            'contain' => []
        ]);
        $request = $this->Requests->find('all')
                          ->contain(['ApplicationMaster','UserAuth'])
                          ->where(['ApplicationMaster.application_id'=>$current->application_id])
                          // ->where(['UserAuth.user_id'=>$current->user_id])
                          ->where(['Requests.id'=>$id])
                          ->toArray();
        $this->set('request', $request[0]);
        $this->set('_serialize', ['request']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $request = $this->Requests->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['user_id'] = $this->Auth->user('user_id');
            // pr($data);
            // die;
            $request = $this->Requests->patchEntity($request,$data);
            if ($this->Requests->save($request)) {
                $this->Flash->success(__('The request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The request could not be saved. Please, try again.'));
        }
        $x = $this->Requests->ApplicationMaster->find()->toArray();
        $applications = [];
        foreach($x as $application){
          $applications[$application->application_id]=$application->application_name;
        }
        $this->set('applications',$applications);
        $this->set(compact('request'));
        $this->set('_serialize', ['request']);
    }

    public function approve_request($id = null){
      $request = $this->Requests->get($id, [
          'contain' => []
      ]);
      $current = $this->Requests->find('all')
                        ->contain(['ApplicationMaster'])
                        ->where(['ApplicationMaster.application_id'=>$request->application_id])
                        ->where(['Requests.id'=>$id])
                        ->toArray();
      if ($this->request->is(['patch', 'post', 'put'])) {
          $request = $this->Requests->patchEntity($request, $this->request->getData());
          if ($this->Requests->save($request)) {
              $this->Flash->success(__('The request has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The request could not be saved. Please, try again.'));
      }
      $x = $this->Requests->ApplicationMaster->find()->toArray();
      $applications = [];
      foreach($x as $application){
        $applications[$application->application_id]=$application->application_name;
      }
      $this->set('current',$current[0]);
      $this->set('applications',$applications);
      $this->set(compact('request'));
      $this->set('_serialize', ['request']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $role=$this->Auth->user('user_role');
        if($role=='checker'){
          $this->approve_request($id);
          $this->render('approveRequest');
        }
        else{
          $request = $this->Requests->get($id, [
              'contain' => []
          ]);
          if ($this->request->is(['patch', 'post', 'put'])) {
              $request = $this->Requests->patchEntity($request, $this->request->getData());
              if ($this->Requests->save($request)) {
                  $this->Flash->success(__('The request has been saved.'));

                  return $this->redirect(['action' => 'index']);
              }
              $this->Flash->error(__('The request could not be saved. Please, try again.'));
          }
          $x = $this->Requests->ApplicationMaster->find()->toArray();
          $applications = [];
          foreach($x as $application){
            $applications[$application->application_id]=$application->application_name;
          }
          $this->set('applications',$applications);
          $this->set(compact('request'));
          $this->set('_serialize', ['request']);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $request = $this->Requests->get($id);
        if ($this->Requests->delete($request)) {
            $this->Flash->success(__('The request has been deleted.'));
        } else {
            $this->Flash->error(__('The request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
