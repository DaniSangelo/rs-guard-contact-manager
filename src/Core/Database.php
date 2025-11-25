<?php

namespace App\Core;

class Database
{
    private \PDO $db;

    public function __construct()
    {
        $dbPath = __DIR__ . '/../database/db.sqlite';
        $this->db = new \PDO("sqlite:$dbPath");
    }

    public function query($query, $params = [], $class = null)
    {
        $stmt = $this->db->prepare($query);
        if ($class) {
            $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        }
        $stmt->execute($params);

        return $stmt;
    }
}
