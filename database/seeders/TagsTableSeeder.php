<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
	public function run()
	{
		Tag::create(['name' => 'PHP']);
		Tag::create(['name' => 'Laravel']);
		Tag::create(['name' => 'Web Development']);
	}
}
