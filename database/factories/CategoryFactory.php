<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => title_case($faker->words(3, true)),
        'description' => $faker->paragraph,
        'visible' => true,
        'sort_order' => 0
    ];
});
