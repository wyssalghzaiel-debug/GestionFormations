<?php

require_once 'models/iinscriptions.php';

$id = (int) ($_GET['id'] ?? 0);

$inscription = InscriptionModel::getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['mode'] === 'ok') {

        InscriptionModel::marquerPaye($id);

        $_SESSION['paiement_ok'] = true;

        $_SESSION['formation_id']
        = $inscription['formation_id'];

        $_SESSION['etudiant_prenom']
        = $inscription['prenom'];

        header('Location:index.php?page=succes');

        exit();
    }
}

require 'views/paiement.php';

?>