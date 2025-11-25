<?php

namespace App\Models;

use App\Core\Database;

class User
{
    public $id = null;
    public $name;
    public $email;
    public $password;

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
        $db = new Database();
        return $db->query(
            "SELECT * FROM users WHERE email = :email",
            compact('email'),
            self::class
        )->fetch();
    }
}
