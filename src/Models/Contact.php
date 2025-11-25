<?php

namespace App\Models;
use App\Core\Database;

class Contact
{
    public $id;
    public $name;
    public $phone;
    public $type = 'amigo';
    public $img = null;
    public $usuario_id;

    public static function getUserContacts($usuario_id)
    {
        $db = new Database();
        return $db->query(
            "SELECT * FROM contacts WHERE usuario_id = :usuario_id",
            compact('usuario_id'),
            self::class
        )->fetchAll();
    }
}
