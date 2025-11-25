<?php

namespace App\Controllers;

use App\Core\BaseController;

class VisualizarController extends BaseController
{
    public function mostrar()
    {
        return $this->view('dashboard');
    }
}