<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentence;
    $slug = Str::slug($title, '-');
    $user_ids = User::pluck('id')->toArray();

    return [
        'user_id'=> $faker->randomElement($user_ids),
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->paragraph,
        'photo' => $faker->imageUrl(640, 480, 'post', true),
    ];
});
