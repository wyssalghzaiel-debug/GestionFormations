<?php

require_once 'models/iinscriptions.php';
require_once 'models/fformation.php';

$formations = Formation::getAll();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = InscriptionModel::ajouter(

        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['formation_id']

    );

    $_SESSION['paiement_ok'] = true;

    $_SESSION['formation_id']
    = $_POST['formation_id'];

    header(
        'Location:index.php?page=succes'
    );
}

require 'views/inscription.php';

?>