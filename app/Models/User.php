<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	// Define the table name for the model
	protected $table = 'users';

	// Define the primary key for the table
	protected $primaryKey = 'id';

	// Allow mass assignment for these fields
	protected $fillable = ['username', 'password', 'created_at'];

	// Hide the password field when converting the model to an array or JSON
	protected $hidden = ['password'];

	// Automatically hash the password when saving the user
	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = bcrypt($value);
	}

	// Define the relationship with posts (One to Many)
	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	// Define the relationship with comments (One to Many)
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
