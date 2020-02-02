<?php


use Phinx\Seed\AbstractSeed;

class VenueSeeder extends AbstractSeed
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
                'name' => 'Hifit Studio 1',
                'address' => 'Jl. Bulak Tengah',
                'lat' => -6.179027,
                'ltg' => 106.777600,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLycYQHyrswwDuZ7qjggSUgJ-vdwcjDXwp3NcfmFCd9v5K_rpK',
                "merchant_id" => 1,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sunday Studio 1',
                'address' => 'Jl. Cilandak Tengah',
                'lat' => -6.176307,
                'ltg' => 106.775744,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLycYQHyrswwDuZ7qjggSUgJ-vdwcjDXwp3NcfmFCd9v5K_rpK',
                "merchant_id" => 2,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
       ];
        $this->table('venues')->insert($data)->save();
    }
}
