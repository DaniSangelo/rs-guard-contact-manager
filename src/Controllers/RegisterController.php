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
        var_dump($_POST);
        $user = User::create($_POST['name'], $_POST['email'], $_POST['password']);
        User::register($user);
        return $this->view('login');
    }
}