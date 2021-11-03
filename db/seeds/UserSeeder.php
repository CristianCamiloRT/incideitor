<?php


use Phinx\Seed\AbstractSeed;
use \Cake\Auth\DefaultPasswordHasher;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name'    => 'Administrador Inicial',
                'password'    => (new DefaultPasswordHasher)->hash('admin'),
                'email'    => 'admin@admin.com',
                'active'    => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
                'role_id'    => 1,
            ],[
                'name'    => 'Agente Inicial',
                'password'    => (new DefaultPasswordHasher)->hash('agente'),
                'email'    => 'agente@agente.com',
                'active'    => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
                'role_id'    => 2,
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
              ->saveData();
    }
}
