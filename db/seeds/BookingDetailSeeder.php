<?php


use Phinx\Seed\AbstractSeed;

class BookingDetailSeeder extends AbstractSeed
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
            'booking_uid' => 12309326,
            'user_id' => 5,
            'sub_price' => 95000,
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s'),
   ];
    $this->table('booking_detail')->insert($data)->save();
    }
}
