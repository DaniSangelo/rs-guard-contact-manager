<?php

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Core\Router;

(new Router())
    ->get('/', [IndexController::class, 'index'])
    ->get('/login', [LoginController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])
    ->post('/register', [RegisterController::class, 'register'])
    ->run();