<?php

namespace Database\Seeders;

use App\Models\{User, Post, Comment};
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        Post::factory()
            ->count(10)
            ->for($user)
            ->has(
                Comment::factory()->for(User::factory())
            )
            ->create();
    }
}
