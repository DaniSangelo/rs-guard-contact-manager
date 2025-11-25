<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public function handle()
    {
        if (!session()->get('auth')) {
            header('Location: /login');
            exit;
        }
    }
}
