<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	// Define the table name for the model
	protected $table = 'comments';

	// Define the primary key for the table
	protected $primaryKey = 'id';

	// Allow mass assignment for these fields
	protected $fillable = ['user_id', 'post_id', 'content', 'created_at'];

	// Define the relationship with the user (Many to One)
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	// Define the relationship with the post (Many to One)
	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
