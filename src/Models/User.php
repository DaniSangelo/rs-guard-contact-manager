<?php

namespace App\Models;

use App\Core\Database;

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
        $db = new Database();
        $db->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)", [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ]);
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
