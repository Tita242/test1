?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <a href="create.php">Ajouter un étudiant</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Filière</th>
            <th>Actions</th>
        </tr>
        <?php
        $etudiants = $etudiantModel->afficher();
        foreach ($etudiants as $etudiant) {
            echo "<tr>
                <td>{$etudiant['id']}</td>
                <td>{$etudiant['nom']}</td>
                <td>{$etudiant['prenom']}</td>
                <td>{$etudiant['email']}</td>
                <td>{$etudiant['filiere']}</td>
                <td><a href='edit.php?id={$etudiant['id']}'>Modifier</a> | <a href='delete.php?id={$etudiant['id']}'>Supprimer</a></td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>