<?php

namespace App;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Connection
{
    public static function make($dataBase) {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        try {
            return new PDO("mysql:host=".$_ENV['DB_HOST'].";port=3306;dbname=".$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}