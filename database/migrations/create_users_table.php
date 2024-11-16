<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable
{
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->timestamps(); // created_at, updated_at
		});
	}

	public function down()
	{
		Schema::dropIfExists('users');
	}
}
