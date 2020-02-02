<?php


use Phinx\Seed\AbstractSeed;

class ClassSeeder extends AbstractSeed
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
                'name' => 'Air Boxing',
                'sport_id' => 5,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLycYQHyrswwDuZ7qjggSUgJ-vdwcjDXwp3NcfmFCd9v5K_rpK',
                'about' => 'it is an exercise used in the training for combat sports',
                'note' => 'can burn 400 calories per hour',
                'price' => 95000,
                "venue_id" => 1,
                'capacity' => 10,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Barre Intensity',
                'sport_id' => 6,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLycYQHyrswwDuZ7qjggSUgJ-vdwcjDXwp3NcfmFCd9v5K_rpK',
                'about' => 'pilates, dance, and many more',
                'note' => 'combine everything',
                'price' => 95000,
                "venue_id" => 2,
                'capacity' => 15,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
       ];
        $this->table('classes')->insert($data)->save();
    }
}
