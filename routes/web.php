<?php

use App\Controllers\BlogController;
use App\Controllers\AuthController;
use App\Controllers\CommentController;

$app->get('/', function ($request, $response, $args) {
	$response->getBody()->write("Welcome to the Blog Application"); // Correct usage in Slim 4
	return $response;
});

// Blog routes
$app->get('/posts', [BlogController::class, 'index']);
$app->get('/posts/create', [BlogController::class, 'create']);
$app->post('/posts', [BlogController::class, 'store']);
$app->get('/posts/{id}', [BlogController::class, 'show']);
$app->get('/posts/{id}/edit', [BlogController::class, 'edit']);
$app->put('/posts/{id}', [BlogController::class, 'update']);
$app->delete('/posts/{id}', [BlogController::class, 'destroy']);

// Authentication routes
$app->get('/login', [AuthController::class, 'showLoginForm']);
$app->post('/login', [AuthController::class, 'login']);
$app->get('/register', [AuthController::class, 'showRegistrationForm']);
$app->post('/register', [AuthController::class, 'register']);
$app->get('/logout', [AuthController::class, 'logout']);

// Comment routes
$app->post('/comments', [CommentController::class, 'create']);
$app->put('/comments/{id}', [CommentController::class, 'update']);
$app->delete('/comments/{id}', [CommentController::class, 'delete']);
