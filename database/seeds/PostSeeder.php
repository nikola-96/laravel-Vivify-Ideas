<?php

use Illuminate\Database\Seeder;
use App\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (App\User $user){
            $user->posts()->saveMany(factory(Post::class, 5)->make());
        });
    }
}
