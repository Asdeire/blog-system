<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		// Creating sample posts
		$user = User::first(); // Assuming there's already at least one user

		Post::create([
			'title' => 'How to Create a Blog in PHP',
			'content' => 'This is the content of the blog post...',
			'user_id' => $user->id
		]);

		Post::create([
			'title' => 'Learning Laravel',
			'content' => 'This is another blog post about Laravel...',
			'user_id' => $user->id
		]);
	}
}
