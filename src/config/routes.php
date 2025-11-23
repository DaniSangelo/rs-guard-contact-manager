<?php

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Core\Router;

(new Router())
    ->get('/', [IndexController::class, 'index'])
    ->get('/login', [LoginController::class, 'index'])
    ->run();