<?php


use Phinx\Seed\AbstractSeed;

class MerchantSeeder extends AbstractSeed
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
                'name' => 'Hifit',
                'description' => 'Studio Olahraga Khusus Perempuan',
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sunday',
                'description' => 'A Group od certified instructors of body movement. Help you keep your body as well as your mind strong',
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
       ];
        $this->table('merchants')->insert($data)->save();
    }
}
