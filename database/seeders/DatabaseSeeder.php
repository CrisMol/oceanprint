<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin User',
            'email' => 'molinacuario_97@hotmail.com',
            'mobile' => '0963639728',
            'password' => bcrypt('admin12345'), // Asegúrate de cifrar la contraseña
            'utype' => 'ADM', // Columna utype con valor 'ADM'
        ]);
    }
}
