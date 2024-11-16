<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
	// Define the table name for the model
	protected $table = 'post_tags';

	// Disable timestamps for this model (since it's a pivot table)
	public $timestamps = false;

	// Define the relationship with the post (Many to One)
	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	// Define the relationship with the tag (Many to One)
	public function tag()
	{
		return $this->belongsTo(Tag::class);
	}
}
