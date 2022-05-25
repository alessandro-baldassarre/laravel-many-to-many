<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class,PostSeeder::class,UserInfoSeeder::class,CategorySeeder::class,CategoryPostSeeder::class]);
    }
}
