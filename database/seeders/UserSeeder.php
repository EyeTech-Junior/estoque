<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@admin.com'
        ], [
            'first_name' => 'Admin',
            'last_name' => 'admin',
            'email'=>'admin@admin.com',
            'cpf'=>'123456789',
            'password' => bcrypt('12345678')
        ]);
    }
}
