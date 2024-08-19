<?php
// database/seeders/PengurusSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\InstansiCabang;
use App\Models\Pengurus;
use App\Models\User;

class PengurusSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $instansiCabang = InstansiCabang::whereNotNull('id_instansi_cabang')
        ->first(); // Ambil cabang pertama yang ada

        foreach ($users as $user) {
            Pengurus::create([
                'id_pengurus' => Str::uuid(),
                'user_id' => $user->id_user,
                'cabang_id' => $instansiCabang->id_instansi_cabang, // Hubungkan dengan cabang yang ada
                'akses' => 'ADC ADK APD AP AT ',
                'keterangan' => 'Pengurus description ' . $user->name,
                'status' => 'aktif',
            ]);
        }
    }
}
