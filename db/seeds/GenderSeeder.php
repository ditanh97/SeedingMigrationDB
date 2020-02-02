<?php


use Phinx\Seed\AbstractSeed;

class GenderSeeder extends AbstractSeed
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
                'gender' => 'Male',
            ],
            [
                'gender' => 'Female',
            ],
       ];
        $this->table('genders')->insert($data)->save();
    }
}
