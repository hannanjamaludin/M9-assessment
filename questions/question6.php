<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

function getClientDetails() {
    $clientId = $_ENV['CLIENT_ID'];
    $clientSecret = $_ENV['CLIENT_SECRET'];

    return [
        'clientId' => $clientId,
        'clientSecret' => $clientSecret
    ];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $clientDetails = getClientDetails();
    echo json_encode($clientDetails);
}

?>