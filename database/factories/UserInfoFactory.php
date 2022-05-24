<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserInfo;
use App\User;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {

    $user_ids = User::pluck('id')->toArray();

    return [
        'user_id'=> $faker->unique()->randomElement($user_ids),
        'date_of_birth' => $faker->date(),
        'address' => $faker->address(),
    ];
});
