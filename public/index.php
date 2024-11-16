<?php

require_once '../vendor/autoload.php';

use App\Controllers\BlogController;
use DI\Container;
use Slim\Factory\AppFactory;
use Illuminate\Database\Capsule\Manager as Capsule;

$container = new Container();
AppFactory::setContainer($container);

$app = AppFactory::create();

$config = require __DIR__ . '/../config/database.php';

$capsule = new Capsule;

$capsule->addConnection($config['database']);

$capsule->setAsGlobal();
$capsule->bootEloquent();

require_once __DIR__ . '/../routes/web.php';

$app->run();
