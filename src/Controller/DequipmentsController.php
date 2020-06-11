<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dequipments Controller
 *
 * @property \App\Model\Table\DequipmentsTable $Dequipments
 *
 * @method \App\Model\Entity\Dequipment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DequipmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function index()
    {
        $dequipments = $this->paginate($this->Dequipments);
        $this->set(compact('dequipments'));
    }

    public function consultar($id = null){
        $id = $_GET['id'];
        $Dequipments = $this->Dequipments->find('all')->where(['id' => $id]);
        echo json_encode($Dequipments, JSON_UNESCAPED_UNICODE);
        $this->viewBuilder()->setLayout('json');
        $this->set(compact('Dequipments'));
    }

    /**
     * View method
     *
     * @param string|null $id Dequipment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dequipment = $this->Dequipments->get($id, [
            'contain' => [],
        ]);

        $this->set('dequipment', $dequipment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dequipment = $this->Dequipments->newEntity();
        if ($this->request->is('post')) {
            $dequipment = $this->Dequipments->patchEntity($dequipment, $this->request->getData());
            if ($this->Dequipments->save($dequipment)) {
                $this->Flash->success(__('The dequipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dequipment could not be saved. Please, try again.'));
        }
        $this->set(compact('dequipment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dequipment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dequipment = $this->Dequipments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dequipment = $this->Dequipments->patchEntity($dequipment, $this->request->getData());
            if ($this->Dequipments->save($dequipment)) {
                $this->Flash->success(__('The dequipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dequipment could not be saved. Please, try again.'));
        }
        $this->set(compact('dequipment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dequipment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dequipment = $this->Dequipments->get($id);
        if ($this->Dequipments->delete($dequipment)) {
            $this->Flash->success(__('The dequipment has been deleted.'));
        } else {
            $this->Flash->error(__('The dequipment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
