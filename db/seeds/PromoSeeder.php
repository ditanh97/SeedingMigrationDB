<?php


use Phinx\Seed\AbstractSeed;

class PromoSeeder extends AbstractSeed
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
                'name' => "DOOCODE",
                'expired' => date(date_create("2020-02-10 13:40:00"),'Y-m-d H:i:s'),
                'lat' => -6.179027,
                'ltg' => 106.777600,
                'disc' => 0.3,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
       ];
        $this->table('promo')->insert($data)->save();
    }
}
