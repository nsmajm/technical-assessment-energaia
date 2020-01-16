<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
         'product_name' => $faker->name, /* well, let's assume */
         'quantity' => rand(1, 1000),
         'sku' => rand(100000,1000000),
         'supplier_user_id' => 2 /* as creating for only one supplier */
    ];
});
