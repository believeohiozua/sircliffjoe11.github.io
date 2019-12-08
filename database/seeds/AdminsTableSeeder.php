<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class)->create();
        // Admin::create([
        //     'name' => 'Clifford Ettah',
        //     'title' => 'Super Admin',
        //     'email' => 'admin@brainstaq.com',
        //     'access' => 1,
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // ]);
    }
}
