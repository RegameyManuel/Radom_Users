<?php

function generateAdvertisement() {
    $items = ['porte d\'entrée', 'fenêtre', 'porte de garage'];
    $materials = ['en bois', 'en pvc', 'en alu', 'mixte'];
    $qualities = ['de haute qualité', 'artisanale', 'durable', 'éco-responsable'];
    $benefits = [
        'parfaitement adapté à tous les intérieurs modernes',
        'garantit une durabilité exceptionnelle',
        'offre une finition élégante qui impressionnera vos invités',
        'facile à entretenir et restera beau pendant des années'
    ];
    $callToActions = [
        "N'attendez plus, donnez à votre maison le style qu'elle mérite !",
        "Faites un choix judicieux pour votre maison, choisissez le nôtre.",
        "Soyez parmi les privilégiés qui possèdent cette pièce exquise.",
        "Commandez dès maintenant et transformez votre espace."
    ];

    // Sélection aléatoire
    $item = $items[array_rand($items)];
    $material = $materials[array_rand($materials)];
    $quality = $qualities[array_rand($qualities)];
    $benefit = $benefits[array_rand($benefits)];
    $callToAction = $callToActions[array_rand($callToActions)];

    // Construction des phrases
    $sentence1 = "Découvrez notre {$item} {$material}, une pièce {$quality}.";
    $sentence2 = "Chaque {$item} est {$benefit}.";
    $sentence3 = $callToAction;

    return $sentence1 . ' ' . $sentence2 . ' ' . $sentence3;
}

// Générer le texte de publicité
$output = generateAdvertisement();

// Nom du fichier
$filename = 'menuiserie_desc.txt';

// Ajouter le texte généré à la fin du fichier
file_put_contents($filename, $output . PHP_EOL, FILE_APPEND);
