<?php

require_once 'models/Database.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $formation_id = $_POST['formation_id'];

    $db = Database::connect();

    $sql = "INSERT INTO inscriptions(
                nom,
                prenom,
                email,
                formation_id,
                statut_paiement
            )
            VALUES(?,?,?,?,?)";

    $stmt = $db->prepare($sql);

    $stmt->execute([

        $nom,
        $prenom,
        $email,
        $formation_id,
        'en_attente'

    ]);

    $inscription_id = $db->lastInsertId();

    $_SESSION['inscription_id'] = $inscription_id;

    header(
        'Location:index.php?page=paiement&id='
        .$inscription_id
    );

    exit();
}

require 'views/inscription.php';