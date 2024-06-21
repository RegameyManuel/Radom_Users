<?php
// Exemple d'un script permettant d'alimenter une table de BDD à partir d'un JSON
$hostname = 'localhost';
$dbname = 'gestion_utilisateurs';
$username = 'admin';
$password = 'Afpa1234';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Charger les données du fichier JSON
    $jsonData = file_get_contents('utilisateurs.json');
    $users = json_decode($jsonData, true);

    foreach ($users as $user) {
        $stmt = $dbh->prepare("INSERT INTO utilisateur 
            (email, mdp, nom, prenom, rue1, rue2, code_postal, ville, telephone, actif, date_creation, date_modification, numero_adherent) 
            VALUES (:email, :mdp, :nom, :prenom, :rue1, :rue2, :code_postal, :ville, :telephone, :actif, :date_creation, :date_modification, :numero_adherent)");

        $stmt->bindParam(':email', $user['email']);
        $stmt->bindParam(':mdp', $user['mdp']);
        $stmt->bindParam(':nom', $user['nom']);
        $stmt->bindParam(':prenom', $user['prenom']);
        $stmt->bindParam(':rue1', $user['rue1']);
        $stmt->bindParam(':rue2', $user['rue2']);
        $stmt->bindParam(':code_postal', $user['code_postal']);
        $stmt->bindParam(':ville', $user['ville']);
        $stmt->bindParam(':telephone', $user['telephone']);
        $stmt->bindParam(':actif', $user['actif'], PDO::PARAM_INT);
        $stmt->bindParam(':date_creation', $user['date_creation']);
        $stmt->bindParam(':date_modification', $user['date_modification']);
        $stmt->bindParam(':numero_adherent', $user['numero_adherent'], PDO::PARAM_INT);

        $stmt->execute();
    }

    echo "Les données des utilisateurs ont &eacute;t&eacute; insérées avec succès.\n";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
