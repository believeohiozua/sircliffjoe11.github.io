<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'product_id' => 1,
        'name' => 'PKG-N5K-001',
        'status' => 1,
        'start_at' => now(),
        'first_due_at' => now()->addMonth(1),
        'second_due_at' => now()->addMonth(2),
        'third_due_at' => now()->addMonth(3),
        'fourth_due_at' => now()->addMonth(4),
        'fifth_due_at' => now()->addMonth(5),
        'sixth_due_at' => now()->addMonth(6),
        'seventh_due_at' => now()->addMonth(7),
        'eight_due_at' => now()->addMonth(8),
        'ninth_due_at' => now()->addMonth(9),
        'last_due_at' => now()->addMonth(10),
    ];
});
