<?php
require_once '../models/Etudiant.php';
$etudiantModel = new Etudiant($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'ajouter') {
        $etudiantModel->ajouter($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['filiere']);
    }
    // Action a Ajouter 
}