<?php

require_once __DIR__ . '/../data.php';

$index = $_GET['index'];

// Définir le chemin vers le fichier data.json
$path = __DIR__ . '/../data.json';

// Charger les données depuis le fichier JSON
$postListFile = file_get_contents($path);

// Vérifier si le contenu n'est pas vide et peut être décodé en tant que tableau
if (!empty($postListFile)) {
    // Parse json to array
    $postList = json_decode($postListFile, true);

    // Vérifier si $postList est un tableau avant d'utiliser array_values
    if (is_array($postList)) {
        // Vérifier d'abord si la clé 'rating' existe dans l'élément du tableau
        if (!isset($postList[$index]['rating'])) {
            // Si la clé 'rating' n'existe pas, définir une valeur par défaut à 0
            $postList[$index]['rating'] = 0;
        }

        // Décrémenter la valeur de la variable de notation (vote)
        $postList[$index]['rating']--;

        // Trier le tableau en fonction de la clé 'rating' (ordre décroissant)
        usort($postList, function ($a, $b) {
            return $b['rating'] - $a['rating'];
        });

        // Convert array to string
        $postListFile = json_encode($postList);

        // Sauvegarder les données mises à jour dans le fichier JSON
        file_put_contents($path, $postListFile);

        // Rediriger vers la page d'origine
        header('Location: /');
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        echo "Le fichier data.json ne contient pas un tableau valide.";
    }
} else {
    echo "Le fichier data.json est vide.";
}
?>
