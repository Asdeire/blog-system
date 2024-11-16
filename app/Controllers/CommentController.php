<?php

namespace App\Controllers;

use App\Models\Comment;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class CommentController extends BaseController
{
	// Create a comment
	public function create(Request $request, Response $response, $args)
	{
		$data = $request->getParsedBody();

		$comment = new Comment();
		$comment->user_id = 1; // Assuming user ID from session or JWT
		$comment->post_id = $data['post_id'];
		$comment->content = $data['content'];
		$comment->created_at = date('Y-m-d H:i:s');
		$comment->save();

		return $response->withRedirect('/posts/' . $data['post_id']);
	}

	// Edit a comment
	public function edit(Request $request, Response $response, $args)
	{
		$comment = Comment::find($args['id']);
		return $this->render($response, 'comments/edit.blade.php', ['comment' => $comment]);
	}

	// Update a comment
	public function update(Request $request, Response $response, $args)
	{
		$data = $request->getParsedBody();
		$comment = Comment::find($args['id']);
		$comment->content = $data['content'];
		$comment->save();

		return $response->withRedirect('/posts/' . $comment->post_id);
	}

	// Delete a comment
	public function delete(Request $request, Response $response, $args)
	{
		$comment = Comment::find($args['id']);
		$comment->delete();

		return $response->withRedirect('/posts/' . $comment->post_id);
	}
}
