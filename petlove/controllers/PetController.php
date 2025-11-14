<?php
require_once 'models/Pet.php';

class PetController {
    private $db;
    private $pet;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->pet = new Pet($this->db);
    }

    public function listPets() {
        $stmt = $this->pet->readAll();
        $pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/list_pets.php';
    }

    public function addPet() {
        if ($_POST) {
            $this->pet->name = $_POST['name'];
            $this->pet->type = $_POST['type'];
            $this->pet->age = $_POST['age'];
            $this->pet->description = $_POST['description'];
            if ($this->pet->create()) {
                header("Location: index.php?action=list");
            }
        }
        include 'views/add_pet.php';
    }

    public function viewPet($id) {
        $this->pet->id = $id;
        $this->pet->readOne();
        include 'views/view_pet.php';
    }
}
?>