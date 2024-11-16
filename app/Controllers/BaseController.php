<?php

namespace App\Controllers;

use Slim\Psr7\Response;
use Slim\Views\Blade;

class BaseController
{
protected $view;

public function __construct()
{
$this->view = new Blade(__DIR__ . '/../views', __DIR__ . '/../cache');
}

protected function render(Response $response, $template, array $data = []): Response
{
$html = $this->view->render($template, $data);
$response->getBody()->write($html);
return $response;
}
}
