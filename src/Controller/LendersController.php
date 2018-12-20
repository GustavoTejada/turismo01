<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lenders Controller
 *
 * @property \App\Model\Table\LendersTable $Lenders
 *
 * @method \App\Model\Entity\Lender[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LendersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lenders = $this->paginate($this->Lenders);

        $this->set(compact('lenders'));
    }

    /**
     * View method
     *
     * @param string|null $id Lender id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lender = $this->Lenders->get($id, [
            'contain' => ['Reservations']
        ]);

        $this->set('lender', $lender);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lender = $this->Lenders->newEntity();
        if ($this->request->is('post')) {
            $lender = $this->Lenders->patchEntity($lender, $this->request->getData());
            if ($this->Lenders->save($lender)) {
                $this->Flash->success(__('The lender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lender could not be saved. Please, try again.'));
        }
        $this->set(compact('lender'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lender id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lender = $this->Lenders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lender = $this->Lenders->patchEntity($lender, $this->request->getData());
            if ($this->Lenders->save($lender)) {
                $this->Flash->success(__('The lender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lender could not be saved. Please, try again.'));
        }
        $this->set(compact('lender'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lender id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lender = $this->Lenders->get($id);
        if ($this->Lenders->delete($lender)) {
            $this->Flash->success(__('The lender has been deleted.'));
        } else {
            $this->Flash->error(__('The lender could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
