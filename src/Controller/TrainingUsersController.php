<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrainingUsers Controller
 *
 * @property \App\Model\Table\TrainingUsersTable $TrainingUsers
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Prices', 'Users'],
        ];
        $trainingUsers = $this->paginate($this->TrainingUsers);

        $this->set(compact('trainingUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Training User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trainingUser = $this->TrainingUsers->get($id, [
            'contain' => ['Prices', 'Users'],
        ]);

        $this->set(compact('trainingUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trainingUser = $this->TrainingUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainingUser = $this->TrainingUsers->patchEntity($trainingUser, $this->request->getData());
            if ($this->TrainingUsers->save($trainingUser)) {
                $this->Flash->success(__('The training user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training user could not be saved. Please, try again.'));
        }
        $prices = $this->TrainingUsers->Prices->find('list', ['limit' => 200]);
        $users = $this->TrainingUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('trainingUser', 'prices', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Training User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trainingUser = $this->TrainingUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingUser = $this->TrainingUsers->patchEntity($trainingUser, $this->request->getData());
            if ($this->TrainingUsers->save($trainingUser)) {
                $this->Flash->success(__('The training user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training user could not be saved. Please, try again.'));
        }
        $prices = $this->TrainingUsers->Prices->find('list', ['limit' => 200]);
        $users = $this->TrainingUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('trainingUser', 'prices', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Training User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainingUser = $this->TrainingUsers->get($id);
        if ($this->TrainingUsers->delete($trainingUser)) {
            $this->Flash->success(__('The training user has been deleted.'));
        } else {
            $this->Flash->error(__('The training user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
