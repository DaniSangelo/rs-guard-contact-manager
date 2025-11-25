<?php

namespace App\Controllers;

use App\Core\BaseController;

class LogoutController extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return $this->redirect('/login');
    }
}