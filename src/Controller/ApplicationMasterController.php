<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ApplicationMaster Controller
 *
 *
 * @method \App\Model\Entity\ApplicationMaster[] paginate($object = null, array $settings = [])
 */
class ApplicationMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $applicationMaster = $this->paginate($this->ApplicationMaster);

        $this->set(compact('applicationMaster'));
        $this->set('_serialize', ['applicationMaster']);
    }

    /**
     * View method
     *
     * @param string|null $id Application Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $applicationMaster = $this->ApplicationMaster->get($id, [
            'contain' => []
        ]);

        $this->set('applicationMaster', $applicationMaster);
        $this->set('_serialize', ['applicationMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $applicationMaster = $this->ApplicationMaster->newEntity();
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            $data = array();
            $data = array_merge($data,$postData);
            $data = array_merge($data,array(
              "created_by"  => "5",
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
            $applicationMaster = $this->ApplicationMaster->patchEntity($applicationMaster, $data);
            if ($this->ApplicationMaster->save($applicationMaster)) {
                $this->Flash->success(__('The application master has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application master could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationMaster'));
        $this->set('_serialize', ['applicationMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Application Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $applicationMaster = $this->ApplicationMaster->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicationMaster = $this->ApplicationMaster->patchEntity($applicationMaster, $this->request->getData());
            if ($this->ApplicationMaster->save($applicationMaster)) {
                $this->Flash->success(__('The application master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application master could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationMaster'));
        $this->set('_serialize', ['applicationMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Application Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $applicationMaster = $this->ApplicationMaster->get($id);
        if ($this->ApplicationMaster->delete($applicationMaster)) {
            $this->Flash->success(__('The application master has been deleted.'));
        } else {
            $this->Flash->error(__('The application master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
