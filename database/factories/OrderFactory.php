<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    static $order = 1;
    static $user = 1;
    return [
        'order_id' => 'OR'.$order++,
        'user_id' => $user++,
        'product_id' => 1,
        'status' => 1,
        'quantity' => 1,
    ];
});
