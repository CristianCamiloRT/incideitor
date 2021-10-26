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
        $tickets = $this->paginate($this->Tickets);

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
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
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
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $users = $this->Tickets->Users->find('list', ['limit' => 200]);
        $this->set(compact('ticket', 'users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
