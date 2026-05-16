<?php

require_once 'Database.php';

class InscriptionModel {

    public static function ajouter(

        $nom,
        $prenom,
        $email,
        $formation_id

    ){

        $pdo = Database::connect();

        $stmt = $pdo->prepare(

            "INSERT INTO inscriptions

            (nom,prenom,email,
            formation_id,
            statut_paiement,
            date_inscription)

            VALUES

            (?,?,?,?, 'paye', NOW())"

        );

        $stmt->execute([

            $nom,
            $prenom,
            $email,
            $formation_id

        ]);

        return $pdo->lastInsertId();
    }
}
?>