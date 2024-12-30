<?php
class Etudiant {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function ajouter($nom, $prenom, $email, $filiere) {
        $stmt = $this->conn->prepare("INSERT INTO etudiants (nom, prenom, email, filiere) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nom, $prenom, $email, $filiere);
        return $stmt->execute();
    }

    public function afficher() {
        $result = $this->conn->query("SELECT * FROM etudiants");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function modifier($id, $nom, $prenom, $email, $filiere) {
        $stmt = $this->conn->prepare("UPDATE etudiants SET nom = ?, prenom = ?, email = ?, filiere = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $nom, $prenom, $email, $filiere, $id);
        return $stmt->execute();
    }

    public function supprimer($id) {
        $stmt = $this->conn->prepare("DELETE FROM etudiants WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}