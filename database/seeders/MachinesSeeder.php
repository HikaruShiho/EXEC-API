<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machines')->insert([
            ['name' => 'パワーラック①'],
            ['name' => 'パワーラック②'],
            ['name' => 'パワーラック③'],
            ['name' => 'ハーフラック①'],
            ['name' => 'ハーフラック②'],
            ['name' => 'ハーフラック③'],
            ['name' => 'スミスマシン①'],
            ['name' => 'スミスマシン②'],
            ['name' => 'スミスマシン③'],
            ['name' => 'アジャスタブルベンチ①'],
            ['name' => 'アジャスタブルベンチ②'],
            ['name' => 'アジャスタブルベンチ③'],
        ]);
    }
}
