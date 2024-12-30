<?
require_once '../models/Cours.php';
$coursModel = new Cours($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'ajouter') {
        $coursModel->ajouter($_POST['nom'], $_POST['code'], $_POST['nb_heures']);
    }
    //  actions a ajouter 
}
