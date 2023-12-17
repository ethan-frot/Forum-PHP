<?php

require_once __DIR__ . '/../data.php';

$index = $_GET['index'];

// Define path to file data.json
$path = __DIR__ . '/../data.json';

// Load data from json
$postListFile = file_get_contents($path);

// Vérifiez si le contenu n'est pas vide et peut être décodé en tant que tableau
if (!empty($postListFile)) {
    // Parse json to array
    $postList = json_decode($postListFile, true);

    // Vérifiez si $postList est un tableau avant d'utiliser array_values
    if (is_array($postList)) {
        // Delete one value with index
        unset($postList[$index]);

        // Réindexez le tableau après suppression pour éviter des indices manquants
        $postList = array_values($postList);

        // Convert array to string
        $postListFile = json_encode($postList);

        // Save data to json file
        file_put_contents($path, $postListFile);

        // Redirect to homepage
        header('Location: /');
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        echo "Le fichier data.json ne contient pas un tableau valide.";
    }
} else {
    echo "Le fichier data.json est vide.";
}
