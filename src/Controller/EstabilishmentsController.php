<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estabilishments Controller
 *
 * @property \App\Model\Table\EstabilishmentsTable $Estabilishments
 *
 * @method \App\Model\Entity\Estabilishment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstabilishmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $estabilishments = $this->Estabilishments->find('all')->where(['user_id' == $this->Auth->user('id')]);

        $this->set(compact('estabilishments'));
    }

    /**
     * View method
     *
     * @param string|null $id Estabilishment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estabilishment = $this->Estabilishments->get($id, [
            'contain' => ['Users', 'Circuits', 'Equipments', 'Loads', 'Rooms'],
        ]);

        $this->set('estabilishment', $estabilishment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estabilishment = $this->Estabilishments->newEntity();
        if ($this->request->is('post')) {
            $estabilishment = $this->Estabilishments->patchEntity($estabilishment, $this->request->getData());
            $estabilishment['user_id'] = '0';
            if ($this->Estabilishments->save($estabilishment)) {
                $this->Flash->success(__('The estabilishment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estabilishment could not be saved. Please, try again.'));
        }
        $users = $this->Estabilishments->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabilishment', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabilishment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estabilishment = $this->Estabilishments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabilishment = $this->Estabilishments->patchEntity($estabilishment, $this->request->getData());
            if ($this->Estabilishments->save($estabilishment)) {
                $this->Flash->success(__('The estabilishment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estabilishment could not be saved. Please, try again.'));
        }
        $users = $this->Estabilishments->Users->find('list', ['limit' => 200]);
        $this->set(compact('estabilishment', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estabilishment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete', 'put', 'get']);
        $estabilishment = $this->Estabilishments->get($id);
        if ($this->Estabilishments->delete($estabilishment)) {
            $this->Flash->success(__('The estabilishment has been deleted.'));
        } else {
            $this->Flash->error(__('The estabilishment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
