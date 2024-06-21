<?php

include 'data_tables.php';

$host = 'localhost';
$db = 'gestion_utilisateurs';
$user = 'admin';
$pass = 'Afpa1234';
$numero_adherent = 7;
$nombreProjets = 100; // Nombre de projets que vous souhaitez générer


function generateUniqueId($length = 3) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    
    return $randomString;
}


$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

// Récupération des utilisateurs éligibles
$stmt = $pdo->query("SELECT numero, rue1, rue2, code_postal, ville, nom, date_modification FROM utilisateur WHERE rue1 IS NOT NULL AND rue1 <> '' AND code_postal IS NOT NULL AND code_postal <> '' AND ville IS NOT NULL AND ville <> ''");
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < $nombreProjets; $i++) {
    $utilisateur = $utilisateurs[array_rand($utilisateurs)];

    $dateCreation = new DateTime($utilisateur['date_modification']);
    $dateCreation->add(new DateInterval('P1D')); // ajouter un jour pour s'assurer que date_creation > date_modification
    $formattedDateCreation = $dateCreation->format('Y-m-d');

    $numeroEtat = rand(1, 6);
    $raisonAbandon = ($numeroEtat == 3) ? 'Projet abandonné' : '';

    $archive = null;
    if ($numeroEtat == 2) {
        $archive = (rand(0, 100) < 30) ? 1 : null;
    }

    $avecPose = (rand(0, 100) < 75) ? 1 : 0;
    $avecLivraison = ($avecPose == 1) ? 1 : ((rand(0, 100) < 75) ? 1 : 0);

    $id = generateUniqueId();

    $nomProjet = $utilisateur['nom'] . "-" . $id . "-" . $formattedDateCreation;

    $insertStmt = $pdo->prepare("
        INSERT INTO projet (
            raison_abandon, date_creation, rue1, rue2, code_postal, ville,
            numero_etat, numero_utilisateur, numero_adherent, nom_projet, 
            avec_pose, avec_livraison, archive
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
        )
    ");

    $insertStmt->execute([
        $raisonAbandon,
        $formattedDateCreation,
        $utilisateur['rue1'],
        $utilisateur['rue2'],
        $utilisateur['code_postal'],
        $utilisateur['ville'],
        $numeroEtat,
        $utilisateur['numero'],
        $numero_adherent,
        $nomProjet,
        $avecPose,
        $avecLivraison,
        $archive
    ]);
}



