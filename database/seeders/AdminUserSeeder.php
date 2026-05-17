<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Crear los roles base del sistema
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Analista']);

        // 2. Crear el usuario administrador principal
        $user = User::firstOrCreate(
            ['email' => 'admin@clemont.com'], // Puedes cambiar este correo luego
            [
                'name' => 'Administrador Clemont',
                'password' => Hash::make('AdminClemont2026*'), // Contraseña segura inicial
            ]
        );

        // 3. Asignarle el rol de Admin
        $user->assignRole($adminRole);
    }
}
