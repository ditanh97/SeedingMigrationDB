<?php


use Phinx\Seed\AbstractSeed;

class PayMethodSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => "Bank Transfer",
                'description' => "Lorem Ipsum",
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => "Credit Card",
                'description' => "Lorem Ipsum",
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => "Go Pay",
                'description' => "Lorem Ipsum",
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ]
   ];
    $this->table('paymethod')->insert($data)->save();
    }
}
