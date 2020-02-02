<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
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
        $faker = Faker\Factory::create();
        $data = [
                'name' => $faker->name,
                'email' => $faker->email,
                'username' => $faker->userName,
                'password' => sha1($faker->password),
                'gender_id' => 1,
                'dob' => $faker->dayOfMonth, 
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLycYQHyrswwDuZ7qjggSUgJ-vdwcjDXwp3NcfmFCd9v5K_rpK',
                'lat' => -6.179027,
                'ltg' => 106.777600,
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
       ];
        $this->table('users')->insert($data)->save();
    }
}
