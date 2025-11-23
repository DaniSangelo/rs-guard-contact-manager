<?php

namespace App\Controllers;

use App\Core\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->view('auth', [
            'childView' => 'register-form',
            'title' => 'Criar conta',
            'switchText' => 'Já tem uma conta?',
            'switchLabel' => 'Acessar conta.',
            'switchLink' => '/login'
        ]);
    }
}
