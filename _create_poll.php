<?php

use OA\CurlClient;

require __DIR__ . '/OA/CurlClient.php';

$title = $_POST['title'];

if (!empty($title)) {
    $curlClient = new CurlClient();
    $curlClient->createPoll($title);
}

header('Location: poll_index.php');