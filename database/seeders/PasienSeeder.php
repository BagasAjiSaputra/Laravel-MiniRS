<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID'); // Locale Indonesia biar realistis

        $data = [];

        // jumlah data yang mau dibuat
        $total = 5000; // bebas ubah jadi 1000 / 10000 / 50000

        for ($i = 0; $i < $total; $i++) {
            $data[] = [
                'nama' => $faker->name(),
                'alamat' => $faker->address(),
                'no_hp' => $faker->phoneNumber(),
                'tgl_lahir' => $faker->date('Y-m-d', '2005-01-01'), 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('pasien')->insert($data);
    }
}
