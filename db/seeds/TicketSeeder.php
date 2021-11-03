<?php


use Phinx\Seed\AbstractSeed;

class TicketSeeder extends AbstractSeed
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
                'ticket'    => 'Se daño un PC',
                'status'    => 1,
                'comment'    => 'Se cambio la RAM',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
                'user_id'    => 2,
            ],[
                'ticket'    => 'Se daño un mmodem',
                'status'    => 0,
                'comment'    => 'Sin solucionar',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
                'user_id'    => 2,
            ]
        ];

        $posts = $this->table('tickets');
        $posts->insert($data)
              ->saveData();
    }
}
