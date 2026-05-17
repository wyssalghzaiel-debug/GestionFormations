<?php

require_once 'models/inscriptions.php';

$id = $_GET['id'] ?? 0;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $_SESSION['paiement_ok'] = true;

    header('Location:index.php?page=succes');

    exit();
}

require 'views/paiement.php';
?>