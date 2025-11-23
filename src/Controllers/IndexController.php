<?php

namespace App\Controllers;

use App\Core\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->view('index');
    }
}
