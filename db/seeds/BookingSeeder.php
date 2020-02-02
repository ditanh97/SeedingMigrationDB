<?php


use Phinx\Seed\AbstractSeed;

class BookingSeeder extends AbstractSeed
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
            'booking_uuid' => 12309326,
            'total_price' => 95000,
            'promo_id' => 1,
            'paymethod_id' => 2,
            'status_id' => 2,
            'class_id' =>3,
            'pay_user_id' => 5,
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s'),
   ];
    $this->table('bookings')->insert($data)->save();
    }
}
