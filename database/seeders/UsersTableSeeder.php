<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		// Creating sample users
		User::create([
			'username' => 'john_doe',
			'email' => 'john@example.com',
			'password' => password_hash('password123', PASSWORD_BCRYPT)
		]);

		User::create([
			'username' => 'jane_smith',
			'email' => 'jane@example.com',
			'password' => password_hash('password123', PASSWORD_BCRYPT)
		]);
	}
}
