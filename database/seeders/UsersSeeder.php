<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'uid' => 'shiho',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'uid' => 'mike',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'uid' => 'bob',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'uid' => 'john',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'uid' => 'edward',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
