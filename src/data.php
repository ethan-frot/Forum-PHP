<?php
    // load data from json
    $path = __DIR__ . '/data.json';
    $postListFile = file_get_contents($path);
    $postList = json_decode($postListFile, true);