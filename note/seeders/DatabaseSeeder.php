<?php

namespace Database\Seeders;

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
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            PaymentTypeTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            BannerSeeder::class,
            BannerTextSeeder::class,
            BannerAdsSeeder::class,
            BankTableSeeder::class,
        ]);
    }
}
