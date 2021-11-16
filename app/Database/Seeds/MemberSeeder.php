<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MemberSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('us_US');
        for($a = 0; $a < 100; $a++){
            $data = [
                'nama'          => $faker->name,
                'alamat'        => $faker->address,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now()
            ];
            $this->db->table('member')->insert($data);
        }
    }
}