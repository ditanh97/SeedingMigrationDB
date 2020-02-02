<?php


use Phinx\Seed\AbstractSeed;

class ClassScheduleSeeder extends AbstractSeed
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
                'class_id' => 3,
                'user_id' => 1,
                'schedule' => date(date_create("2020-02-10 13:40:00"),'Y-m-d H:i:s'),
                'finished' => date(date_create("2020-02-10 14:40:00"),'Y-m-d H:i:s'), 
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ],
            [
                'class_id' => 4,
                'user_id' => 2,
                'schedule' => date(date_create("2020-02-10 15:40:00"),'Y-m-d H:i:s'),
                'finished' => date(date_create("2020-02-10 16:40:00"),'Y-m-d H:i:s'), 
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            ]
       ];
        $this->table('class_schedule')->insert($data)->save();
    }
}
