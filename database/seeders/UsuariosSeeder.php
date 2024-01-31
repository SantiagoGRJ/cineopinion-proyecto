<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    User::create([
        'name' => 'Usuario de Administrador',
        'email' => 'santi@admin.com',
        'rol' => 'admin',
        'password' => Hash::make('password'),
    ]);

    User::create([
        'name' => 'Usuario de Usuario',
        'email' => 'santi@user.com',
        'rol' => 'user',
        'password' => Hash::make('password'),
    ]);
}

}
