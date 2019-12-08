<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Slot;
use Faker\Generator as Faker;

$factory->define(Slot::class, function (Faker $faker) {
    static $user = 1;
    static $slot = 1;
    return [
        'user_id' => $user++,
        'package_id' => 1,
        'name' => 'Slot '.$slot++,
        'status' => 1, 
    ];
});
