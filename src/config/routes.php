<?php

use App\Controllers\DashboardController;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\VisualizarController;
use App\Core\Router;
use App\Middlewares\AuthMiddleware;

(new Router())
    ->get('/', [IndexController::class, 'index'])
    ->get('/login', [LoginController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])
    ->post('/register', [RegisterController::class, 'register'])
    ->get('/dashboard', [DashboardController::class, 'index'], AuthMiddleware::class)
    ->post('/mostrar', [VisualizarController::class, 'mostrar'], AuthMiddleware::class)
    ->run();