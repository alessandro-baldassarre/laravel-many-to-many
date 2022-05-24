<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;


$factory->define(Category::class, function (Faker $faker) {

$categories = ['economics','parenting','career','political','finance','pet','gaming','nature','diy','celebrity gossip','wine','medical','social media','cat','sports'];

    return [

        'name'=>$faker->unique()->randomElement($categories),
        'color'=>$faker->hexColor(),
    ];
});
