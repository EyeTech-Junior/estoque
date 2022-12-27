<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrador',
            'phone'=>'99999999',
            'email'=>'admin@admin',
            'profile'=>'ADMIN',
            'status'=>'ACTIVE',
            'password'=>bcrypt('123')
        ]);
    }
}
