<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="tickets view content">
            <h3><?= h($ticket->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ticket->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ticket->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ticket->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $ticket->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Ticket') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ticket->ticket)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ticket->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
