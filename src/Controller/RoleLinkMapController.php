<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoleLinkMap Controller
 *
 *
 * @method \App\Model\Entity\RoleLinkMap[] paginate($object = null, array $settings = [])
 */
class RoleLinkMapController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pages = $this->paginate($this->RoleLinkMap);
        $roleLinkMap = $this->RoleLinkMap->find()
                        ->contain(['RoleMaster','LinkMaster'])
                        ->toArray();
        $this->set(compact('roleLinkMap'));
        $this->set('_serialize', ['roleLinkMap']);
    }

    /**
     * View method
     *
     * @param string|null $id Role Link Map id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $current = $this->RoleLinkMap->get($id, [
            'contain' => []
        ]);
        $roleLinkMap = $this->RoleLinkMap->find()
                            ->contain(['LinkMaster','RoleMaster'])
                            ->where(['LinkMaster.id'=>$current->link_id])
                            ->where(['RoleMaster.role_id'=>$current->role_id])
                            ->toArray();
        $this->set('roleLinkMap', $roleLinkMap[0]);
        $this->set('_serialize', ['roleLinkMap']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roleLinkMap = $this->RoleLinkMap->newEntity();
        if ($this->request->is('post')) {
            $roleLinkMap = $this->RoleLinkMap->patchEntity($roleLinkMap, $this->request->getData());
            if ($this->RoleLinkMap->save($roleLinkMap)) {
                $this->Flash->success(__('The role link map has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role link map could not be saved. Please, try again.'));
        }
        $x = $this->RoleLinkMap->RoleMaster->find()->toArray();
        $roles = [];
        foreach($x as $role){
          $roles[$role->role_id]=$role->role_desc;
        }
        $y = $this->RoleLinkMap->LinkMaster->find()->toArray();
        $links = [];
        foreach($y as $link){
          $links[$link->id] = $link->link_name;
        }
        $this->set(compact('roleLinkMap'));
        $this->set('links',$links);
        $this->set('roles',$roles);
        $this->set('_serialize', ['roleLinkMap']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Role Link Map id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roleLinkMap = $this->RoleLinkMap->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roleLinkMap = $this->RoleLinkMap->patchEntity($roleLinkMap, $this->request->getData());
            if ($this->RoleLinkMap->save($roleLinkMap)) {
                $this->Flash->success(__('The role link map has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role link map could not be saved. Please, try again.'));
        }
        $x = $this->RoleLinkMap->RoleMaster->find()->toArray();
        $roles = [];
        foreach($x as $role){
          $roles[$role->role_id]=$role->role_desc;
        }
        $y = $this->RoleLinkMap->LinkMaster->find()->toArray();
        $links = [];
        foreach($y as $link){
          $links[$link->id] = $link->link_name;
        }
        $this->set(compact('roleLinkMap'));
        $this->set('links',$links);
        $this->set('roles',$roles);
        $this->set('_serialize', ['roleLinkMap']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Role Link Map id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roleLinkMap = $this->RoleLinkMap->get($id);
        if ($this->RoleLinkMap->delete($roleLinkMap)) {
            $this->Flash->success(__('The role link map has been deleted.'));
        } else {
            $this->Flash->error(__('The role link map could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
