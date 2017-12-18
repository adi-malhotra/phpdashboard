<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LinkTypeMaster Controller
 *
 *
 * @method \App\Model\Entity\LinkTypeMaster[] paginate($object = null, array $settings = [])
 */
class LinkTypeMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $linkTypeMaster = $this->paginate($this->LinkTypeMaster);

        $this->set(compact('linkTypeMaster'));
        $this->set('_serialize', ['linkTypeMaster']);
    }

    /**
     * View method
     *
     * @param string|null $id Link Type Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $linkTypeMaster = $this->LinkTypeMaster->get($id, [
            'contain' => []
        ]);

        $this->set('linkTypeMaster', $linkTypeMaster);
        $this->set('_serialize', ['linkTypeMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $linkTypeMaster = $this->LinkTypeMaster->newEntity();
        if ($this->request->is('post')) {
            $linkTypeMaster = $this->LinkTypeMaster->patchEntity($linkTypeMaster, $this->request->getData());
            if ($this->LinkTypeMaster->save($linkTypeMaster)) {
                $this->Flash->success(__('The link type master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link type master could not be saved. Please, try again.'));
        }
        $this->set(compact('linkTypeMaster'));
        $this->set('_serialize', ['linkTypeMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Link Type Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $linkTypeMaster = $this->LinkTypeMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $linkTypeMaster = $this->LinkTypeMaster->patchEntity($linkTypeMaster, $this->request->getData());
            if ($this->LinkTypeMaster->save($linkTypeMaster)) {
                $this->Flash->success(__('The link type master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link type master could not be saved. Please, try again.'));
        }
        $this->set(compact('linkTypeMaster'));
        $this->set('_serialize', ['linkTypeMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Link Type Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $linkTypeMaster = $this->LinkTypeMaster->get($id);
        if ($this->LinkTypeMaster->delete($linkTypeMaster)) {
            $this->Flash->success(__('The link type master has been deleted.'));
        } else {
            $this->Flash->error(__('The link type master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
