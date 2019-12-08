<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        // factory(User::class, 9)->create();
        User::create([
            'first_name' => 'Chinyere',
            'last_name' => 'Osuoha',
            'username' => 'chimony',
            'gender' => 'f',
            'mobile' => '08063931998',
            'email'     =>  'chiosuoha2000@yahoo.com',
            'type' => 1,
            'source' => 0,
            'credit_limit' => 200000,
            'credit_score' => 10,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        
        User::create([
            'first_name' => 'Darling',
            'last_name' => 'Andafa',
            'username' => 'darling',
            'gender' => 'm',
            'mobile' => '08103018618',
            'email'     =>  'andafadarling@gmail.com',
            'type' => 0,
            'source' => 0,
            'credit_limit' => 5000,
            'credit_score' => 0,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}
