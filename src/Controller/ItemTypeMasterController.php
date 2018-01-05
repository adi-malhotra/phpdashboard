<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemTypeMaster Controller
 *
 * @property \App\Model\Table\ItemTypeMasterTable $ItemTypeMaster
 *
 * @method \App\Model\Entity\ItemTypeMaster[] paginate($object = null, array $settings = [])
 */
class ItemTypeMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
      
        $itemTypeMaster = $this->paginate($this->ItemTypeMaster);

        $this->set(compact('itemTypeMaster'));
        $this->set('_serialize', ['itemTypeMaster']);
    }
    public function isAuthorized($user){
      $action = $this->request->getParam('action');
      if(in_array($action,['index','view','delete','edit','add']) && isset($user) && $user['user_role']=='sadmin')
        return true;
      return false;
    }
    /**
     * View method
     *
     * @param string|null $id Item Type Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemTypeMaster = $this->ItemTypeMaster->get($id, [
            'contain' => ['ItemTypes']
        ]);

        $this->set('itemTypeMaster', $itemTypeMaster);
        $this->set('_serialize', ['itemTypeMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemTypeMaster = $this->ItemTypeMaster->newEntity();
        if ($this->request->is('post')) {
            $itemTypeMaster = $this->ItemTypeMaster->patchEntity($itemTypeMaster, $this->request->getData());
            if ($this->ItemTypeMaster->save($itemTypeMaster)) {
                $this->Flash->success(__('The item type master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item type master could not be saved. Please, try again.'));
        }
        $itemTypes = $this->ItemTypeMaster->ItemTypes->find('list', ['limit' => 200]);
        $this->set(compact('itemTypeMaster', 'itemTypes'));
        $this->set('_serialize', ['itemTypeMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Type Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemTypeMaster = $this->ItemTypeMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemTypeMaster = $this->ItemTypeMaster->patchEntity($itemTypeMaster, $this->request->getData());
            if ($this->ItemTypeMaster->save($itemTypeMaster)) {
                $this->Flash->success(__('The item type master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item type master could not be saved. Please, try again.'));
        }
        $itemTypes = $this->ItemTypeMaster->ItemTypes->find('list', ['limit' => 200]);
        $this->set(compact('itemTypeMaster', 'itemTypes'));
        $this->set('_serialize', ['itemTypeMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Type Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemTypeMaster = $this->ItemTypeMaster->get($id);
        if ($this->ItemTypeMaster->delete($itemTypeMaster)) {
            $this->Flash->success(__('The item type master has been deleted.'));
        } else {
            $this->Flash->error(__('The item type master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
