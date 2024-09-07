<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
class AppointmentsController extends AppController
{
    public function queues()
{   
    $this->viewBuilder()->setLayout('admin');
    $appointments = $this->Appointments->find('all', [
        'conditions' => ['status IN' => ['waiting', 'in progress']],
        'order' => ['appointment_time' => 'ASC']
    ]);

    $this->set(compact('appointments'));
}

public function index()
{
    $this->viewBuilder()->setLayout('admin');
    $appointments = $this->paginate($this->Appointments);

    $this->set(compact('appointments'));
}

    public function view($id = null)
    {$this->viewBuilder()->setLayout('admin');
        $appointment = $this->Appointments->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('appointment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {$this->viewBuilder()->setLayout('admin');
        $appointment = $this->Appointments->newEmptyEntity();
        if ($this->request->is('post')) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->getData());
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success(__('The appointment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
        }
        $this->set(compact('appointment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {$this->viewBuilder()->setLayout('admin');
        $appointment = $this->Appointments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->getData());
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success(__('The appointment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
        }
        $this->set(compact('appointment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {$this->viewBuilder()->setLayout('admin');
        $this->request->allowMethod(['post', 'delete']);
        $appointment = $this->Appointments->get($id);
        if ($this->Appointments->delete($appointment)) {
            $this->Flash->success(__('The appointment has been deleted.'));
        } else {
            $this->Flash->error(__('The appointment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
