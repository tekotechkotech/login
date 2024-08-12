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
            'web' => 'faiz-ag.com',
            'slogan' => 'websiteku, websitemu, website kita semuas',
            'logo' => 'logof.png',
            'ico' => 'logof.png',
        ]);

        Instansi::create([
            'id_instansi' => Str::uuid()->toString(),
            'nama' => 'Instansi Bukan Utama',
            'alamat' => 'Jl. Bukan Utama No. 1',
            'telepon' => '0211234567112',
            'email' => 'instansi1@utamas.com',
            'web' => '0.0.1',
            'slogan' => 'websiteku, websitemu, website kita semua',
            'logo' => 'dark-logo.svg',
            'ico' => 'favicon.png',
        ]);

        Instansi::create([
            'id_instansi' => Str::uuid()->toString(),
            'nama' => 'Instansi Bukan Utama',
            'alamat' => 'Jl. Bukan Utama No. 1',
            'telepon' => '0211234567113',
            'email' => 'instansi2@utamas.com',
            'slogan' => 'websiteku, websitemu, website kita semua',
            'web' => 'utama.com',
            'logo' => 'logo2.png',
            'ico' => 'logo2.png',
        ]);
    }
}
