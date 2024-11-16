<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentsTableSeeder extends Seeder
{
	public function run()
	{
		$user = User::first();
		$post = Post::first();

		// Creating sample comments
		Comment::create([
			'content' => 'Great post! Very informative.',
			'user_id' => $user->id,
			'post_id' => $post->id
		]);

		Comment::create([
			'content' => 'Thanks for sharing this!',
			'user_id' => $user->id,
			'post_id' => $post->id
		]);
	}
}
