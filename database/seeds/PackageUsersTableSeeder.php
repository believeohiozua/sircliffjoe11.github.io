<?php

use App\Models\PackageUser;
use Illuminate\Database\Seeder;

class PackageUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PackageUser::class, 10)->create();
    }
}
