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
            [
                'name' => 'パワーラック①',
                'image_path' => 'power_rack.jpg'
            ],
            [
                'name' => 'パワーラック②',
                'image_path' => 'power_rack.jpg'
            ],
            [
                'name' => 'パワーラック③',
                'image_path' => 'power_rack.jpg'
            ],
            [
                'name' => 'ハーフラック①',
                'image_path' => 'half_rack.jpg'
            ],
            [
                'name' => 'ハーフラック②',
                'image_path' => 'half_rack.jpg'
            ],
            [
                'name' => 'ハーフラック③',
                'image_path' => 'half_rack.jpg'
            ],
            [
                'name' => 'スミスマシン①',
                'image_path' => 'smith_machine.jpg'
            ],
            [
                'name' => 'スミスマシン②',
                'image_path' => 'smith_machine.jpg'
            ],
            [
                'name' => 'スミスマシン③',
                'image_path' => 'smith_machine.jpg'
            ],
            [
                'name' => 'アジャスタブルベンチ①',
                'image_path' => 'adjustable_bench.jpg'
            ],
            [
                'name' => 'アジャスタブルベンチ②',
                'image_path' => 'adjustable_bench.jpg'
            ],
            [
                'name' => 'アジャスタブルベンチ③',
                'image_path' => 'adjustable_bench.jpg'
            ],
        ]);
    }
}
