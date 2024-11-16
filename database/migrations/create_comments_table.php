<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable
{
	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->id();
			$table->text('content');
			$table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
			$table->foreignId('post_id')->constrained()->onDelete('cascade'); // Foreign key to posts table
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('comments');
	}
}
