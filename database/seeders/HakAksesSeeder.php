<?php

namespace Database\Seeders;

use App\Models\HakAkses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class HakAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aksesList = [
            'Akses Data Cabang' => 'ADC',
            'Mengelola Data Cabang' => 'MDC',

            'Akses Data Kelas' => 'ADK',
            'Mengelola Data Kelas' => 'MDK',

            'Mengelola Data Pengguna' => 'MDPG',

            'Akses Data Pengurus' => 'ADP',
            'Mengelola Data Pengurus' => 'MDP',
            
            'Akses Peserta Didik' => 'APD',
            'Mengelola Peserta Didik' => 'MPD',
            
            'Akses Pembayaran' => 'AP',
            'Input Pembayaran' => 'IP',

            'Akses Test' => 'AT',
            'Mengelola Test' => 'MT',
        ];

        foreach ($aksesList as $akses => $kode_akses) {
            HakAkses::create([
                'kode_akses' => $kode_akses,
                'akses' => $akses,
                'hex' => sprintf('%06X', mt_rand(0, 0xFFFFFF)), // generate valid hex color
            ]);
        }
    }
}
