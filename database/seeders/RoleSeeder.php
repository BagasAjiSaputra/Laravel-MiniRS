<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run()
{
    // roles
    Role::firstOrCreate(['name' => 'dokter']);
    Role::firstOrCreate(['name' => 'perawat']);

    // contoh user
    $dokter = User::create([
        'name' => 'Dokter A',
        'email' => 'dokter@test.com',
        'password' => bcrypt('password'),
    ]);
    $dokter->assignRole('dokter');

    $perawat = User::create([
        'name' => 'Perawat A',
        'email' => 'perawat@test.com',
        'password' => bcrypt('password'),
    ]);
    $perawat->assignRole('perawat');
}
}
