
<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill table-responsive">
            <div class="card-header row w-100 mx-auto d-flex align-items-center">
                <div class="col-6">
                    <h5 class="card-title mb-0">Roles</h5>
                </div>
                <div class="col-6 text-end">
                    <?php echo $this->Html->link('Crear Rol', 
                        [
                            'controller' => 'Roles',
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
                        <th><?= $this->Paginator->sort('role') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($roles as $role): ?>
                    <tr>
                        <td><?= $this->Number->format($role->id) ?></td>
                        <td><?= h($role->role) ?></td>
                        <td><?= h($role->created) ?></td>
                        <td><?= h($role->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $role->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
