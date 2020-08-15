<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Faker\Provider\Barcode;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'barcode' => $faker->isbn13,
        'price' => $faker->randomNumber(3),
        'quantity' => $faker->randomNumber(3),
        'product_category_id' => factory(App\ProductCategory::class)->create()
    ];
});
