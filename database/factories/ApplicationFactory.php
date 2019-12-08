<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    static $user = 1;
    static $count = 1;
    return [
        'user_id' => $user++,
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'gender' => 'm',
        'mobile' => mt_rand(1111111111, mt_getrandmax()),
        'email'     =>  'user'.$count++.'@user.com',
        'source' => 'Google',
        'about' => 'Some important information why you want to join.',
        'city' => $faker->city,
        'state' => 'Delta State',
        'package' => 40000,
        'status' => 1,
    ];
});
