<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inventory Controller
 *
 * @property \App\Model\Table\InventoryTable $Inventory
 *
 * @method \App\Model\Entity\Inventory[] paginate($object = null, array $settings = [])
 */
class InventoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pages = $this->paginate($this->Inventory);
        $inventory = $this->Inventory->find()
                          ->contain('ApplicationMaster')
                          ->toArray();
        // pr($inventory);
        // die;
        $this->set('pages',$pages);
        $this->set(compact('inventory'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * View method
     *
     * @param string|null $id Inventory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $current = $this->Inventory->get($id, [
            'contain' => []
        ]);
        $inventory = $this->Inventory->find('all')
                          ->contain('ApplicationMaster')
                          ->where(['ApplicationMaster.application_id'=>$current->application_id])
                          ->where(['Inventory.id'=>$id])
                          ->toArray();
        // pr($inventory);
        // die;
        $this->set('inventory', $inventory[0]);
        $this->set('_serialize', ['inventory']);
    }
    public function isAuthorized($user){
      $action = $this->request->getParam('action');
      if(in_array($action,['index','delete','view']) && isset($user) && $user['user_role']=='admin')
        return true;
      else if(in_array($action,['index','view']) && isset($user) && $user['user_role']=='checker')
        return true;
      return false;
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventory = $this->Inventory->newEntity();
        if ($this->request->is('post')) {
            $inventory = $this->Inventory->patchEntity($inventory, $this->request->getData());
            if ($this->Inventory->save($inventory)) {
                $this->Flash->success(__('The inventory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
        }
        $this->set(compact('inventory'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventory = $this->Inventory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventory = $this->Inventory->patchEntity($inventory, $this->request->getData());
            if ($this->Inventory->save($inventory)) {
                $this->Flash->success(__('The inventory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
        }
        $x = $this->Inventory->ApplicationMaster->find()->toArray();
        $applications = [];
        foreach($x as $application){
          $applications[$application->application_id]=$application->application_name;
        }
        $this->set('applications',$applications);
        $this->set(compact('inventory'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventory = $this->Inventory->get($id);
        if ($this->Inventory->delete($inventory)) {
            $this->Flash->success(__('The inventory has been deleted.'));
        } else {
            $this->Flash->error(__('The inventory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
