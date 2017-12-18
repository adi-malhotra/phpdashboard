<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoleMaster Controller
 *
 *
 * @method \App\Model\Entity\RoleMaster[] paginate($object = null, array $settings = [])
 */
class RoleMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roleMaster = $this->paginate($this->RoleMaster);

        $this->set(compact('roleMaster'));
        $this->set('_serialize', ['roleMaster']);
    }

    /**
     * View method
     *
     * @param string|null $id Role Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roleMaster = $this->RoleMaster->get($id, [
            'contain' => []
        ]);

        $this->set('roleMaster', $roleMaster);
        $this->set('_serialize', ['roleMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roleMaster = $this->RoleMaster->newEntity();
        if ($this->request->is('post')) {
          $postData = $this->request->getData();
          $data = array();
          $data = array_merge($data,$postData);
          $data = array_merge($data,array(
            "created_by"  => "4",
            "creation_date" => "",
            "modified_by" => "",
            "modified_date" => ""
          ));
          $cdate = date('Y-m-d H:i:s');
          $data['creation_date']['year'] = date('Y',strtotime($cdate));
          $data['creation_date']['month'] = date('m',strtotime($cdate));
          $data['creation_date']['day'] = date('d',strtotime($cdate));
          $data['creation_date']['hour'] = date('H',strtotime($cdate . '+5 hours'));
          $data['creation_date']['minute'] = date('i',strtotime($cdate. '+30 minutes'));
          $roleMaster = $this->RoleMaster->patchEntity($roleMaster, $data);
          if ($this->RoleMaster->save($roleMaster)) {
              $this->Flash->success(__('The role master has been saved.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The role master could not be saved. Please, try again.'));
        }
        $this->set(compact('roleMaster'));
        $this->set('_serialize', ['roleMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Role Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roleMaster = $this->RoleMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // debug($this->request->getData());
            // die;
            $postData = $this->request->getData();
            $data = array();
            $data = array_merge($data,$postData);
            $cdate = date('Y-m-d H:i:s');
            $data['modified_date']['year'] = date('Y',strtotime($cdate));
            $data['modified_date']['month'] = date('m',strtotime($cdate));
            $data['modified_date']['day'] = date('d',strtotime($cdate));
            $data['modified_date']['hour'] = date('H',strtotime($cdate . '+5 hours'));
            $data['modified_date']['minute'] = date('i',strtotime($cdate. '+30 minutes'));
            // debug($data);
            // die;
            $roleMaster = $this->RoleMaster->patchEntity($roleMaster, $data);
            if ($this->RoleMaster->save($roleMaster)) {
                $this->Flash->success(__('The role master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role master could not be saved. Please, try again.'));
        }
        $this->set(compact('roleMaster'));
        $this->set('_serialize', ['roleMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Role Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roleMaster = $this->RoleMaster->get($id);
        if ($this->RoleMaster->delete($roleMaster)) {
            $this->Flash->success(__('The role master has been deleted.'));
        } else {
            $this->Flash->error(__('The role master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
