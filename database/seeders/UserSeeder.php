<?php
// database/seeders/UserSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'id_user' => Str::uuid(),
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'google_id' => Str::uuid(),
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // or use any default password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
