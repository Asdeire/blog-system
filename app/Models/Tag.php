<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	// Define the table name for the model
	protected $table = 'tags';

	// Define the primary key for the table
	protected $primaryKey = 'id';

	// Allow mass assignment for the name field
	protected $fillable = ['name'];

	// Define the relationship with posts (Many to Many)
	public function posts()
	{
		return $this->belongsToMany(Post::class, 'post_tags');
	}
}
