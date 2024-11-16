<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable
{
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->text('content');
			$table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to the users table
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('posts');
	}
}
