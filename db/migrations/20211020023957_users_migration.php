<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['limit' => 200])
              ->addColumn('password', 'string', ['limit' => 100])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
              
        $refTable = $this->table('users');
        $refTable->addColumn('role_id', 'integer', [
                     'signed' => 'disable'
                    ])
                 ->addForeignKey('role_id', 'roles', 'id', [
                     'delete' => 'NO_ACTION',
                     'update' =>'NO_ACTION'
                     ])
                 ->update();
    }
}
