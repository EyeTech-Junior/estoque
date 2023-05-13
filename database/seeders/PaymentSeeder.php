<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-01-01 00:00:00',
            'updated_at'=>'2023-01-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-02-01 00:00:00',
            'updated_at'=>'2023-02-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-03-01 00:00:00',
            'updated_at'=>'2023-03-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-04-01 00:00:00',
            'updated_at'=>'2023-04-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-05-01 00:00:00',
            'updated_at'=>'2023-05-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-06-01 00:00:00',
            'updated_at'=>'2023-06-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-07-01 00:00:00',
            'updated_at'=>'2023-07-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-08-01 00:00:00',
            'updated_at'=>'2023-08-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-09-01 00:00:00',
            'updated_at'=>'2023-09-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-10-01 00:00:00',
            'updated_at'=>'2023-10-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-11-01 00:00:00',
            'updated_at'=>'2023-11-01 00:00:00',
        ]);
        Payment::updateOrCreate( [
            'amount' => 0,
            'order_id' => 9999,
            'user_id'=>9999,
            'created_at'=>'2023-12-01 00:00:00',
            'updated_at'=>'2023-12-01 00:00:00',
        ]);
    }
}
