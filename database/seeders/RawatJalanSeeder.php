<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RawatJalanSeeder extends Seeder
{
    
    // public function run()
    // {
    //     $faker = Faker::create();

    //     $data = [];

    //     for ($i = 0; $i < 10000; $i++) {
    //         $data[] = [
    //             'id_pasien' => rand(1, 100),
    //             'id_dokter' => rand(1, 20),
    //             'keluhan' => $faker->sentence(),
    //             'waktu_kunjungan' => $faker->dateTime(),
    //             'status_pemeriksaan' => 'Belum',
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ];
    //     }

    //     DB::table('rawat_jalan')->insert($data);
    // }
}
