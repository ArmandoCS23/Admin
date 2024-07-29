<?php

class UserModel {
    private $conn;
    private $table_name = "usuarios";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllUsers() {
        $query = "SELECT id, nombre, apellidos, email, telefono FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>