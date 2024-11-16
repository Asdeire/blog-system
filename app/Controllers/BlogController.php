<?php

namespace App\Controllers;

use App\Models\Post;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class BlogController extends BaseController
{
	// Show list of posts
	public function index(Request $request, Response $response, $args)
	{
		$posts = Post::all();
		return $this->render($response, 'posts/index.blade.php', ['posts' => $posts]);
	}

	// Show create post form
	public function create(Request $request, Response $response, $args)
	{
		return $this->render($response, 'posts/create.blade.php');
	}

	// Store a new post
	public function store(Request $request, Response $response, $args)
	{
		$data = $request->getParsedBody();

		$post = new Post();
		$post->user_id = 1; // Assuming user ID from session or JWT
		$post->title = $data['title'];
		$post->content = $data['content'];
		$post->created_at = date('Y-m-d H:i:s');
		$post->updated_at = date('Y-m-d H:i:s');
		$post->save();

		return $response->withRedirect('/posts');
	}

	// Show single post
	public function show(Request $request, Response $response, $args)
	{
		$post = Post::find($args['id']);
		return $this->render($response, 'posts/show.blade.php', ['post' => $post]);
	}

	// Show edit post form
	public function edit(Request $request, Response $response, $args)
	{
		$post = Post::find($args['id']);
		return $this->render($response, 'posts/edit.blade.php', ['post' => $post]);
	}

	// Update post
	public function update(Request $request, Response $response, $args)
	{
		$data = $request->getParsedBody();
		$post = Post::find($args['id']);
		$post->title = $data['title'];
		$post->content = $data['content'];
		$post->updated_at = date('Y-m-d H:i:s');
		$post->save();

		return $response->withRedirect('/posts');
	}

	// Delete post
	public function destroy(Request $request, Response $response, $args)
	{
		$post = Post::find($args['id']);
		$post->delete();

		return $response->withRedirect('/posts');
	}
}
