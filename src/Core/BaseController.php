<?php

namespace App\Core;

class BaseController
{
    protected function view(string $view, array $data = [])
    {
        extract($data, EXTR_SKIP);

        require __DIR__ . "/../views/templates/app.php";
    }
}
