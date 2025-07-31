<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DiamondpackageSeeder::class,
            FriendshipSeeder::class,
            TopuppackageSeeder::class,
            TopuppackageSeeder::class,
            TransactionSeeder::class,
]);
    }
}
