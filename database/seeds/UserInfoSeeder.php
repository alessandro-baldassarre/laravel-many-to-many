<?php

use Illuminate\Database\Seeder;
use App\Models\UserInfo;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserInfo::class, 50)->create();
    }
}
