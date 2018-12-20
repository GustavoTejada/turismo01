<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opinions Controller
 *
 * @property \App\Model\Table\OpinionsTable $Opinions
 *
 * @method \App\Model\Entity\Opinion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpinionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Transmitters', 'Receptors']
        ];
        $opinions = $this->paginate($this->Opinions);

        $this->set(compact('opinions'));
    }

    /**
     * View method
     *
     * @param string|null $id Opinion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opinion = $this->Opinions->get($id, [
            'contain' => ['Transmitters', 'Receptors']
        ]);

        $this->set('opinion', $opinion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opinion = $this->Opinions->newEntity();
        if ($this->request->is('post')) {
            $opinion = $this->Opinions->patchEntity($opinion, $this->request->getData());
            if ($this->Opinions->save($opinion)) {
                $this->Flash->success(__('The opinion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opinion could not be saved. Please, try again.'));
        }
        $transmitters = $this->Opinions->Transmitters->find('list', ['limit' => 200]);
        $receptors = $this->Opinions->Receptors->find('list', ['limit' => 200]);
        $this->set(compact('opinion', 'transmitters', 'receptors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opinion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opinion = $this->Opinions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opinion = $this->Opinions->patchEntity($opinion, $this->request->getData());
            if ($this->Opinions->save($opinion)) {
                $this->Flash->success(__('The opinion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opinion could not be saved. Please, try again.'));
        }
        $transmitters = $this->Opinions->Transmitters->find('list', ['limit' => 200]);
        $receptors = $this->Opinions->Receptors->find('list', ['limit' => 200]);
        $this->set(compact('opinion', 'transmitters', 'receptors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opinion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opinion = $this->Opinions->get($id);
        if ($this->Opinions->delete($opinion)) {
            $this->Flash->success(__('The opinion has been deleted.'));
        } else {
            $this->Flash->error(__('The opinion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
