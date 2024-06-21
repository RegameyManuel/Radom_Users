<?php

include 'data_tables.php';

$hostname = 'localhost';
$dbname = 'gestion_utilisateurs';
$username = 'admin';
$password = 'Afpa1234';
$numero_adherent = 7;
$nombre_clients = 50;

function generateUserData($numero_adherent) {

    //génération du nom
    $nom = $noms[array_rand($noms)];

    //génération du prénom
    $prenom = $prenoms[array_rand($prenoms)];

    //génération de rue1
    $numero = rand(1, 499);

    $extension = (rand(1, 100) <= 25) ? (rand(0, 1) == 0 ? " bis" : " ter") : "";

    $numeroRue1 = $numero . $extension;

    $rue1 = $numeroRue1 ." ". $typeRue1[array_rand($typeRue1)] ." ". $nomRue1[array_rand($nomRue1)];

    //génération de rue2
    $chance = rand(1,5);
    if ($chance <= 1) {
        
        $chance = rand(1, 100);

        if ($chance <= 50) {
            $numeroRue2 = (string) rand(1, 30);
        } elseif ($chance <= 75) {
            $numeroRue2 = $lettres[array_rand($lettres)];
        } else {
            $numeroRue2 = (string) rand(1, 30) . $lettres[array_rand($lettres)]; 
        }
        $rue2 = $typeRue2[array_rand($typeRue2)] ." ". $numeroRue2;
    } else {
        $rue2 = "";  
    }

    //génération de telephone
    $prefix = rand(1, 7);
    $suffix = rand(10000000, 99999999);

    $telephone = sprintf('%02d%08d', $prefix, $suffix);

    //génération de mail
    $suffixeMail = $suffixeMails[array_rand($suffixeMails)];

    $chance = rand(1,2);
    if ($chance === 1) {
        $email = strtolower($nom.".".$prenom.$suffixeMail);
    } else {
        $email = strtolower($prenom.".".$nom.$suffixeMail); 
    }

    $email = htmlentities($email, ENT_NOQUOTES, 'utf-8');
    $email = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $email);
    $email = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $email);
    $email = preg_replace('#&[^;]+;#', '', $email);
    $email = str_replace(" ", "", $email);

    //génération de cp et ville


    $index = array_rand($communes);

    $code_postal = $communes[$index]['cp'];
    $ville = $communes[$index]['ville'];

    $actif = rand(0,1);

    //génération de $date_creation
    $timestamp = time() - rand(0, 60 * 60 * 24 * 365); // Une date aléatoire dans l'année précédente.
    $date_creation = date("Y-m-d H:i:s", $timestamp);

    //génération de $date_modification
    $modificationSeconds = rand(1, 60 * 60 * 24); // Ajout de quelques secondes à quelques jours
    $date_modification = date("Y-m-d H:i:s", $timestamp + $modificationSeconds);

    //génération de $mdp
    $bytes = random_bytes(20); //générer 20 octets aléatoires
    $mdp = bin2hex($bytes); //convertir les octets en une chaîne hexadécimale

    // Renvoyer les données sous forme de tableau associatif
    return [
        'email' => $email,
        'mdp' => $mdp,
        'nom' => $nom,
        'prenom' => $prenom,
        'rue1' => $rue1,
        'rue2' => $rue2,
        'code_postal' => $code_postal,
        'ville' => $ville,
        'telephone' => $telephone,
        'actif' => $actif,
        'date_creation' => $date_creation,
        'date_modification' => $date_modification,
        'numero_adherent' => $numero_adherent
    ];
}

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Début de la transaction
    $dbh->beginTransaction();

    $stmt = $dbh->prepare("INSERT INTO utilisateur 
        (email, mdp, nom, prenom, rue1, rue2, code_postal, ville, telephone, actif, date_creation, date_modification, numero_adherent) 
        VALUES (:email, :mdp, :nom, :prenom, :rue1, :rue2, :code_postal, :ville, :telephone, :actif, :date_creation, :date_modification, :numero_adherent)");

    $emails = [];
    for ($i = 0; $i < $nombre_clients; $i++) {
        $user = generateUserData($numero_adherent);

        if (isset($emails[$user['email']])) {
            continue;
        }
        $emails[$user['email']] = true;

        $stmt->bindValue(':email', $user['email']);
        $stmt->bindValue(':mdp', $user['mdp']);
        $stmt->bindValue(':nom', $user['nom']);
        $stmt->bindValue(':prenom', $user['prenom']);
        $stmt->bindValue(':rue1', $user['rue1']);
        $stmt->bindValue(':rue2', $user['rue2']);
        $stmt->bindValue(':code_postal', $user['code_postal']);
        $stmt->bindValue(':ville', $user['ville']);
        $stmt->bindValue(':telephone', $user['telephone']);
        $stmt->bindValue(':actif', $user['actif'], PDO::PARAM_INT);
        $stmt->bindValue(':date_creation', $user['date_creation']);
        $stmt->bindValue(':date_modification', $user['date_modification']);
        $stmt->bindValue(':numero_adherent', $user['numero_adherent'], PDO::PARAM_INT);

        $stmt->execute();
    }

    $dbh->commit();

    echo "Les données des utilisateurs ont &eacute;t&eacute; insérées avec succès.\n";

} catch (PDOException $e) {
    $dbh->rollBack();
    echo "Erreur : " . $e->getMessage();
}