<?php

use App\Controllers\IndexController;
use App\Core\Router;

(new Router())
    ->get('/', [IndexController::class, 'index'])
    ->run();