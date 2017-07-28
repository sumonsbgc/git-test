<?php 
namespace App\Database;
use PDO;
use PDOException;

class Database
{
    protected $conn;
    public function __construct()
    {
        if (!isset($conn)){
            try{
                $pdo = new PDO('sqlite:' . __DIR__.  '/db/userinfo.db');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn = $pdo;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        $this->userTableSchema();
    }

    private function userTableSchema()
    {
        $sql = "CREATE TABLE IF NOT EXISTS user(
        		id INTEGER PRIMARY KEY AUTOINCREMENT, 
        		fname TEXT NOT NULL, 
        		lname TEXT NOT NULL, 
        		email TEXT UNIQUE NOT NULL, 
        		bdate NUMERIC,
        		address CHAR(100))";

        $this->conn->exec($sql);
    }

}