<?php

namespace App\Controllers;

use App\Models\User;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class AuthController extends BaseController
{
	// Show login form
	public function showLoginForm(Request $request, Response $response, $args)
	{
		return $this->render($response, 'auth/login.blade.php');
	}

	// Handle login
	public function login(Request $request, Response $response, $args)
	{
		$data = $request->getParsedBody();
		$user = User::where('username', $data['username'])->first();

		if ($user && password_verify($data['password'], $user->password)) {
			// Store user session or JWT here
			return $response->withRedirect('/');
		}

		return $this->render($response, 'auth/login.blade.php', ['error' => 'Invalid credentials']);
	}

	// Show registration form
	public function showRegistrationForm(Request $request, Response $response, $args)
	{
		return $this->render($response, 'auth/register.blade.php');
	}

	// Handle registration
	public function register(Request $request, Response $response, $args)
	{
		$data = $request->getParsedBody();

		// Validate input data (username, password, etc.)
		$user = new User();
		$user->username = $data['username'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		$user->created_at = date('Y-m-d H:i:s');
		$user->save();

		return $response->withRedirect('/login');
	}

	// Handle logout
	public function logout(Request $request, Response $response, $args)
	{
		// Clear session or JWT
		return $response->withRedirect('/');
	}
}
