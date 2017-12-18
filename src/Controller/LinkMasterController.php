<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LinkMaster Controller
 *
 *
 * @method \App\Model\Entity\LinkMaster[] paginate($object = null, array $settings = [])
 */
class LinkMasterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pages = $this->paginate($this->LinkMaster);
        $linkMaster = $this->LinkMaster->find()
                      ->contain('ApplicationMaster')
                      ->toArray();
        $this->set(compact('linkMaster'));
        $this->set("pages",$pages);
        $this->set('_serialize', ['linkMaster']);
    }

    /**
     * View method
     *
     * @param string|null $id Link Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $current = $this->LinkMaster->get($id, [
            'contain' => []
        ]);

        $linkMaster=$this->LinkMaster->find('all')
        ->contain('ApplicationMaster')
        ->where(['ApplicationMaster.application_id' => $current->application_id ])
        ->where(['LinkMaster.id' => $id])
        ->toArray();
        $this->set('linkMaster', $linkMaster[0]);
        $this->set('_serialize', ['linkMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $linkMaster = $this->LinkMaster->newEntity();
        if ($this->request->is('post')) {
          $postData = $this->request->getData();
          $data = array();
          $data = array_merge($data,$postData);
          $data = array_merge($data,array(
            "created_by"  => "0",
            "creation_at" => "",
          ));
          $cdate = date('Y-m-d H:i:s');
          $data['creation_at']['year'] = date('Y',strtotime($cdate));
          $data['creation_at']['month'] = date('m',strtotime($cdate));
          $data['creation_at']['day'] = date('d',strtotime($cdate));
          $data['creation_at']['hour'] = date('H',strtotime($cdate . '+5 hours'));
          $data['creation_at']['minute'] = date('i',strtotime($cdate. '+30 minutes'));
          // debug($data);
          // die;
          $linkMaster = $this->LinkMaster->patchEntity($linkMaster, $data);
          if ($this->LinkMaster->save($linkMaster)) {
              $this->Flash->success(__('The link master has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The link master could not be saved. Please, try again.'));
        }
        $x = $this->LinkMaster->ApplicationMaster->find()->toArray();
        $applications = [];
        foreach($x as $application){
          $applications[$application->application_id]=$application->application_name;
        }
        $y = $this->LinkMaster->find()->toArray();
        $links = [];
        foreach($y as $link){
          $links[$link->id] = $link->link_name;
        }
        $this->set('links',$links);
        $this->set('applications',$applications);
        $this->set(compact('linkMaster'));
        $this->set('_serialize', ['linkMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Link Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $linkMaster = $this->LinkMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $linkMaster = $this->LinkMaster->patchEntity($linkMaster, $this->request->getData());
            if ($this->LinkMaster->save($linkMaster)) {
                $this->Flash->success(__('The link master has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link master could not be saved. Please, try again.'));
        }
        $x = $this->LinkMaster->ApplicationMaster->find()->toArray();
        $applications = [];
        foreach($x as $application){
          $applications[$application->application_id]=$application->application_name;
        }
        $y = $this->LinkMaster->find()->toArray();
        $links = [];
        foreach($y as $link){
          $links[$link->id] = $link->link_name;
        }
        $this->set(compact('linkMaster'));
        $this->set('links',$links);
        $this->set('applications',$applications);
        $this->set('_serialize', ['linkMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Link Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $linkMaster = $this->LinkMaster->get($id);
        if ($this->LinkMaster->delete($linkMaster)) {
            $this->Flash->success(__('The link master has been deleted.'));
        } else {
            $this->Flash->error(__('The link master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
