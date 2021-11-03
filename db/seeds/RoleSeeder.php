<?php


use Phinx\Seed\AbstractSeed;

class RoleSeeder extends AbstractSeed
{

    public function run()
    {
        $data = [
            [
                'role'    => 'Administrador',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
            ],[
                'role'    => 'Agente',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
            ]
        ];

        $posts = $this->table('roles');
        $posts->insert($data)
              ->saveData();
    }
}
