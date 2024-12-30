<?php
class User {
    private $db;
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }


    public function create($userName, $email,$passwords) {
        $query = "INSERT INTO infos(userName, email ,passwords) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        echo 'insert';
        return $stmt->execute([$userName, $email,$passwords]);
    }


}