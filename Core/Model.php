<?php

namespace Core;

use App\Config;
use PDO;
use PDOException;

abstract class Model
{
    public static function getDB()
    {
        static $db = null;

        if ($db == null) {
            try {
                $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
                $db = new PDO($dsn, Config::DB_USERNAME, Config::DB_PASSWORD);

                // Throw an Exception when an error occurs
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return $db;
    }
}
