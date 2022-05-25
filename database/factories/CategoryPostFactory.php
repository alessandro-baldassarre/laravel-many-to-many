<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategoryPost;
use App\Models\Category;
use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(CategoryPost::class, function (Faker $faker) {

    $category_ids = Category::pluck('id')->toArray();
    $post_ids = Post::pluck('id')->toArray();

    return [
        'category_id'=>$faker->randomElement($category_ids),
        'post_id'=> $faker->randomElement($post_ids),
    ];
});
