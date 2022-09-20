<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            // [
            //     'gym_id' => 2,
            //     'machine_id' => 8,
            //     'user_id' => 3,
            //     'is_canceled' => 0,
            //     'start_at' => null,
            //     'end_at' => null,
            //     'created_at' => new DateTime(),
            //     'updated_at' => new DateTime(),
            // ],
            // [
            //     'gym_id' => 2,
            //     'machine_id' => 8,
            //     'user_id' => 2,
            //     'is_canceled' => 0,
            //     'start_at' => null,
            //     'end_at' => null,
            //     'created_at' => new DateTime(),
            //     'updated_at' => new DateTime(),
            // ],
            // [
            //     'gym_id' => 2,
            //     'machine_id' => 8,
            //     'user_id' => 1,
            //     'is_canceled' => 0,
            //     'start_at' => null,
            //     'end_at' => null,
            //     'created_at' => new DateTime(),
            //     'updated_at' => new DateTime(),
            // ],
        ]);
    }
}
