<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Define the table name for the model
	protected $table = 'posts';

	// Define the primary key for the table
	protected $primaryKey = 'id';

	// Allow mass assignment for these fields
	protected $fillable = ['user_id', 'title', 'content', 'created_at', 'updated_at'];

	// Define the relationship with the user (Many to One)
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	// Define the relationship with comments (One to Many)
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	// Define the relationship with tags (Many to Many)
	public function tags()
	{
		return $this->belongsToMany(Tag::class, 'post_tags');
	}
}
