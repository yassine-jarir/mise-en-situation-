<?php 

class Database {
    public function connect() {
        try {
            return new PDO("mysql:host=localhost;dbname=userss", "root", "");
            
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}