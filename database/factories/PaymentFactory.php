<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Carbon\Carbon;
use App\Models\Package;
use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    static $user = 1;
    $first_due_at = Package::first()->first_due_at;

    return [  
        'name' => 1,
        'status' => 0,
        'slots' => 1,
        'package_id' => 1,
        'user_id' => $user++,
        'due_at' => $first_due_at,
    ];
});
