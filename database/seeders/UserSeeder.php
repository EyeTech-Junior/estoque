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
        User::updateOrCreate([
            'email' => 'notwork@notwork.com'
        ], [
            'id'=>9999,
            'first_name' => 'notwork',
            'last_name' => 'notwork',
            'email'=>'notwork@notwork.com',
            'cpf'=>'18646456451',
            'password' => bcrypt('n#ot#w*ork&notw%o4r#k@n9ã8o7a6c5e4s3s2a1r')
        ]);
    }
}
