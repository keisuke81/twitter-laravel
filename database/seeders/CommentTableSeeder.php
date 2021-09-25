<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            Comment::create([
                'user_id'    =>1,
                'tweet_id'   =>$i,
                'text'       =>'テストコメント' .$i,
                'created_at' =>now(),
                'updated_at' =>now()
            ]);
        }
    }
}
