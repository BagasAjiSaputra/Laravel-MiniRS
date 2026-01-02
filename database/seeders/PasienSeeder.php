<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    // public function run()
    // {
    //     $faker = Faker::create('id_ID'); 

    //     $data = [];

    //     $total = 5000; 

    //     for ($i = 0; $i < $total; $i++) {
    //         $data[] = [
    //             'nama' => $faker->name(),
    //             'alamat' => $faker->address(),
    //             'no_hp' => $faker->phoneNumber(),
    //             'tgl_lahir' => $faker->date('Y-m-d', '2005-01-01'), 
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ];
    //     }

    //     DB::table('pasien')->insert($data);
    // }
}
