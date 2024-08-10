<?php

// database/seeders/InstansiSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Instansi;

class InstansiSeeder extends Seeder
{
    public function run()
    {
        Instansi::create([
            'id_instansi' => Str::uuid()->toString(),
            'nama' => 'Instansi Utama',
            'alamat' => 'Jl. Utama No. 1',
            'telepon' => '0211234567',
            'email' => 'instansi@utama.com',
            'domain' => 'utama.com',
            'logo' => 'logo.png',
        ]);
    }
}
