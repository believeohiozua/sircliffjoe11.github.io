<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        // $this->call(ApplicationsTableSeeder::class);
        // $this->call(OrdersTableSeeder::class);
        // $this->call(PackagesTableSeeder::class);
        // $this->call(SlotsTableSeeder::class);
        // $this->call(PackageUsersTableSeeder::class);
        // $this->call(PaymentsTableSeeder::class);
    }
}
