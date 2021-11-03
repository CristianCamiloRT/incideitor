<?php
declare(strict_types=1);

namespace App\Controller;

class TicketsController extends AppController
{   
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];

        $identity = $this->request->getAttribute('authentication')->getIdentity();
        
        if ($identity['role_id'] == 1) {
            $tickets = $this->paginate($this->Tickets);
        } else {
            $tickets = $this->paginate($this->Tickets->find('all')->where(['user_id' => $identity['id']]));
        }
        $this->set(compact('tickets'));
    }

    public function view($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('ticket'));
    }

    public function add()
    {
        $ticket = $this->Tickets->newEmptyEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('El ticket se creo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el ticket, intentelo nuevamente.'));
        }
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'users'));
    }

    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('El ticket se modifico correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el ticket, intentelo nuevamente.'));
        }
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('El ticket se elimino correctamente.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar el ticket, intentelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
