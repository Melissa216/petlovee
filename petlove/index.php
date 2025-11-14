<?php
require_once 'controllers/PetController.php';

$controller = new PetController();
$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'list':
        $controller->listPets();
        break;
    case 'add':
        $controller->addPet();
        break;
    case 'view':
        $controller->viewPet($_GET['id']);
        break;
    default:
        $controller->listPets();
}
?>