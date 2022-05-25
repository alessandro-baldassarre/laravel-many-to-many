<?php

use Illuminate\Database\Seeder;
use App\Models\CategoryPost;
use Faker\Generator as Faker;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(CategoryPost::class, 600)->create();

    }
}
