<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable
{
	public function up()
	{
		Schema::create('post_tags', function (Blueprint $table) {
			$table->id();
			$table->foreignId('post_id')->constrained()->onDelete('cascade'); // Foreign key to posts table
			$table->foreignId('tag_id')->constrained()->onDelete('cascade'); // Foreign key to tags table
			$table->timestamps();

			// Add a composite unique key to ensure the same tag isn't assigned multiple times to the same post
			$table->unique(['post_id', 'tag_id']);
		});
	}

	public function down()
	{
		Schema::dropIfExists('post_tags');
	}
}
