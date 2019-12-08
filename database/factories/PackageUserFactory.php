<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PackageUser;
use Faker\Generator as Faker;

$factory->define(PackageUser::class, function (Faker $faker) {
    static $user = 1;
    return [
        'user_id' => $user++,
        'package_id' => 1,
    ];
});
