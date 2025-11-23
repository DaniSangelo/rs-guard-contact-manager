<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\User;

class LoginController extends BaseController
{
    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        var_dump($_POST);
        $user = User::getByEmail($_POST['email']);
        if (!$user || (!password_verify($_POST['password'], $user['password']))) {
            echo "Credenciais inválidas";
            return;
        }
    }
}