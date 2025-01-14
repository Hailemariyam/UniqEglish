<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Role\SecondaryAdminSeeder;
use Database\Seeders\Role\SystemAdminSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $this->call([
            SystemAdminSeeder::class,
            SecondaryAdminSeeder::class,
        ]);
    }
}
