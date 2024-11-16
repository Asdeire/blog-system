<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostTagsTableSeeder extends Seeder
{
	public function run()
	{
		$post = Post::first();
		$tags = Tag::all();

		foreach ($tags as $tag) {
			$post->tags()->attach($tag->id); // Assuming a many-to-many relationship
		}
	}
}
