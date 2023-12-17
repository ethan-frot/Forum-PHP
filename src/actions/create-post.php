<?php

require_once __DIR__ . '/../data.php';

// Get data from form
$title = $_GET['title'];
$content = $_GET['content'];

// Create new post
$post = [
    'title' => $title,
    'content' => $content,
    'rating' => 0,
];

// Define path to file data.json
$path = __DIR__ . '/../data.json';

// Load data from json
$postListFile = file_get_contents($path);

// Parse json to array
$postList = json_decode($postListFile, true);

// If $postList is null, initialize it as an empty array
if ($postList === null) {
    $postList = [];
};

// Add new post to array
array_push($postList, $post);

// Convert array to string
$postListFile = json_encode($postList);

// Save data to json file
file_put_contents($path, $postListFile);

// Redirect to homepage
header('Location: /');

?>