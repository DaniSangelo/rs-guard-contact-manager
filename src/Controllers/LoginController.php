<?php

namespace App\Controllers;

use App\Core\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        $this->view('login');
    }
}