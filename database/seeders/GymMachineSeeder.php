<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymMachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gym_machine')->insert([
            [
                'gym_id' => 1,
                'machine_id' => 1,
            ],
            [
                'gym_id' => 1,
                'machine_id' => 3,
            ],
            [
                'gym_id' => 1,
                'machine_id' => 7,
            ],
            [
                'gym_id' => 2,
                'machine_id' => 1,
            ],
            [
                'gym_id' => 2,
                'machine_id' => 3,
            ],
            [
                'gym_id' => 2,
                'machine_id' => 7,
            ],
        ]);
    }
}
