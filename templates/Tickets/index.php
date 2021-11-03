<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill table-responsive">
            <div class="card-header row w-100 mx-auto d-flex align-items-center">
                <div class="col-6">
                    <h5 class="card-title mb-0">Tickets</h5>
                </div>
                <div class="col-6 text-end">
                    <?php echo $this->Html->link('Crear Ticket', 
                        [
                            'controller' => 'Tickets',
                            'action' => 'add'
                        ],
                        [
                            'escape' => false,
                            'class' => 'btn btn-primary'
                        ]
                    );?>
                </div>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('user_id') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th><?= $this->Paginator->sort('ticket') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tickets as $ticket): ?>
                        <tr>
                            <td><?= $this->Number->format($ticket->id) ?></td>
                            <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
                            <td><?= h($ticket->status) ? '<span class="badge bg-success">Cerrado</span>' : '<span class="badge bg-danger">Abierto</span>' ?></td>
                            <td><?= h($ticket->ticket) ?></td>
                            <td><?= h($ticket->created) ?></td>
                            <td><?= h($ticket->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>