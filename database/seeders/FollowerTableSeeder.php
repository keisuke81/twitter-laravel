<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Follower;

class FollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 2; $i <= 10; $i++){
            Favorite::create([
                'following_id' =>$i,
                'followed_id'  =>1
            ]);
        }
    }
}
