<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Denomination;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 100      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 50      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 20      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 10      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 5      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 2      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 1      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 0.5      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 0.25      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 0.10      
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 0.05      
        ]);
    }
}
