<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    static $count = 1;
    static $acc = 1;
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'username' => $faker->userName(),
        'gender' => 'm',
        'mobile' => mt_rand(1111111111, mt_getrandmax()),
        'email'     =>  'user'.$count++.'@user.com',
        'type' => 0,
        'source' => 1,
        'credit_limit' => 40000,
        'credit_score' => 0,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
