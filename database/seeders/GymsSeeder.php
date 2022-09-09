<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gyms')->insert([
            [
                'name' => '〇〇ジム　原宿店',
                'post_code' => '1234567',
                'prefecture_id' => 13,
                'city' => '渋谷区',
                'block' => '12-12',
                'building' => '',
                'lat' => 35.66948283792584,
                'long' => 139.7029810171651,
            ],
            [
                'name' => '〇〇ジム　神戸店',
                'post_code' => '1234567',
                'prefecture_id' => 28,
                'city' => '神戸市',
                'block' => '中央区12-12',
                'building' => 'umie 6F',
                'lat' => 34.69855344670156,
                'long' => 135.20447812751107,
            ],
        ]);
    }
}
