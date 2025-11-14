<?php
require_once 'config/database.php';

class Pet {
    private $conn;
    private $table_name = "pets";

    public $id;
    public $name;
    public $type;
    public $age;
    public $description;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $query = "SELECT id, name, type, age, description FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, type=:type, age=:age, description=:description";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":description", $this->description);
        return $stmt->execute();
    }

    public function readOne() {
        $query = "SELECT id, name, type, age, description FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->name = $row['name'];
        $this->type = $row['type'];
        $this->age = $row['age'];
        $this->description = $row['description'];
    }
}
?>