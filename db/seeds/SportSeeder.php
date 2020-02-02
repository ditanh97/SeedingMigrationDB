<?php


use Phinx\Seed\AbstractSeed;

class SportSeeder extends AbstractSeed
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
                'name' => 'Zumba',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRyqbpUn-NkhxbiSVN3tkTHkYWw4qTOwb1WQouXnldmK18OYopJ',
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Yoga',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRyqbpUn-NkhxbiSVN3tkTHkYWw4qTOwb1WQouXnldmK18OYopJ',
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
       ];
        $this->table('sports')->insert($data)->save();
    }
}
