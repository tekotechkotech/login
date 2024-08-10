<?php

// database/seeders/InstansiCabangSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\InstansiCabang;

class InstansiCabangSeeder extends Seeder
{
    public function run()
    {
        $instansi = Instansi::first();

        InstansiCabang::create([
            'id_instansi_cabang' => Str::uuid()->toString(),
            'instansi_id' => $instansi->id_instansi,
            'nama' => 'Cabang Utama',
            'alamat' => 'Jl. Cabang No. 1',
            'telepon' => '0217654321',
            'email' => 'cabang@utama.com',
        ]);
    }
}
