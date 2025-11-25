<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\User;

class LoginController extends BaseController
{
    public function index()
    {
        $this->view('auth', [
            'childView' => 'login-form',
            'title' => 'Acessar conta',
            'switchText' => 'Não tem uma conta?',
            'switchLabel' => 'Criar conta.',
            'switchLink' => '/'
        ]);
    }

    public function login()
    {
        $user = User::getByEmail($_POST['email']);
        if (!$user || (!password_verify($_POST['password'], $user->password))) {
            return $this->redirect('/login');
        }
        return $this->redirect('/dashboard');
    }
}
