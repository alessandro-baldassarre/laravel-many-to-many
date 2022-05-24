<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['economics','parenting','career','political','finance','pet','gaming','nature','diy','celebrity gossip','wine','medical','social media','cat','sports'];
        factory(Category::class, count($categories))->create();
    }
}
