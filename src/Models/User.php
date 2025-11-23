<?php

namespace App\Models;

class User
{
    public $id = null;
    public $name;
    public $email;
    public $password;

    private function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function create($name, $email, $password)
    {
        return new User($name, $email, $password);
    }

    public static function register(User $user)
    {
        echo "Registrado com sucesso";
    }

    public static function getByEmail(string $email)
    {
        return [
            'name' => 'Daniel',
            'email' => 'daniel@mail.com',
            'password' => 'daniel'
        ];
    }
}