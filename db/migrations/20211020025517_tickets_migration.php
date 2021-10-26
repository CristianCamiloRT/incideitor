<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TicketsMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('tickets');
        $table->addColumn('ticket', 'text')
              ->addColumn('status', 'boolean')
              ->addColumn('comment', 'text')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
              
        $refTable = $this->table('tickets');
        $refTable->addColumn('user_id', 'integer', [
                     'signed' => 'disable'
                    ])
                 ->addForeignKey('user_id', 'users', 'id', [
                     'delete' => 'NO_ACTION',
                     'update' =>'NO_ACTION'
                     ])
                 ->update();
    }
}
