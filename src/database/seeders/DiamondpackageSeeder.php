<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiamondpackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diamondpackages')->insert([
    ['name' => '86 Diamond', 'amount' => 86, 'price' => 20000],
    ['name' => '172 Diamond', 'amount' => 172, 'price' => 39000],
    ['name' => '257 Diamond', 'amount' => 257, 'price' => 57000],
]);

    }
}
