<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RolesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('roles');
        $table->addColumn('role', 'string', ['limit' => 100])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
    }
}
