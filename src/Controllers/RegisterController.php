<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\User;

class RegisterController extends BaseController
{
    public function index()
    {
        $this->view('register');
    }

    public function register()
    {
        $user = User::create($_POST['name'], $_POST['email'], $_POST['password']);
        User::register($user);
        return $this->view('auth', [
            'childView' => 'login-form',
            'title' => 'Acessar conta',
            'switchText' => 'Não tem uma conta?',
            'switchLabel' => 'Criar conta.',
            'switchLink' => '/'
        ]);
    }
}
