<?php

namespace Database\Factories;

use App\Models\PostTag;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
	protected $model = PostTag::class;

	public function definition()
	{
		return [
			'post_id' => Post::factory(),
			'tag_id' => Tag::factory(),
		];
	}
}
