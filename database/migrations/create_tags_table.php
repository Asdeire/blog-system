<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable
{
	public function up()
	{
		Schema::create('tags', function (Blueprint $table) {
			$table->id();
			$table->string('name')->unique(); // Unique name for the tag
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('tags');
	}
}
