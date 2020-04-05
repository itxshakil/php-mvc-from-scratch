<?php

namespace App\Models;

use PDO;
use PDOException;

class Post
{
    /**
     * Get all the post  as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $host = 'localhost';
        $dbname = 'mvc';
        $username = 'root';
        $password = '';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

            $stmt = $db->query('SELECT id, title,content FROM posts ORDER BY created_at');

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $results;
    }
}
