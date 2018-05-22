<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'ID_factory'  => $faker->ean8,
        'description' => $faker->name,
        's/n'  		  => $faker->isbn13,
        'uudid'		  => $faker->uuid,
        'FCC_ID'	  => $faker->ean8

    ];
});
