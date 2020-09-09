<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user){
            $user->posts()->saveMany(factory(Post::class, 5)->make());
        });
    }
}
