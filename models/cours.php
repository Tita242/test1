<?php
class Cours {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function ajouter($nom, $code, $nb_heures) {
        $stmt = $this->conn->prepare("INSERT INTO cours (nom, code, nb_heures) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nom, $code, $nb_heures);
        return $stmt->execute();
    }

    public function afficher() {
        $result = $this->conn->query("SELECT * FROM cours");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function modifier($id, $nom, $code, $nb_heures) {
        $stmt = $this->conn->prepare("UPDATE cours SET nom = ?, code = ?, nb_heures = ? WHERE id = ?");
        $stmt->bind_param("ssii", $nom, $code, $nb_heures, $id);
        return $stmt->execute();
    }

    public function supprimer($id) {
        $stmt = $this->conn->prepare("DELETE FROM cours WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
