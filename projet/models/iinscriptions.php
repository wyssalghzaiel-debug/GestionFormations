<?php

require_once 'Database.php';

class InscriptionModel{

    /* ===== AJOUT INSCRIPTION ===== */

    public static function ajouter(
        $nom,
        $prenom,
        $email,
        $formation_id
    ){

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

        return $stmt->execute([
            $nom,
            $prenom,
            $email,
            $formation_id,
            'en_attente'
        ]);
    }



    /* ===== RECUP INSCRIPTION ===== */

    public static function getById($id){

        $db = Database::connect();

        $sql = "SELECT * FROM inscriptions
                WHERE id=?";

        $stmt = $db->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    /* ===== UPDATE PAIEMENT ===== */

    public static function updatePaiement($id){

        $db = Database::connect();

        $sql = "UPDATE inscriptions
                SET statut_paiement='paye'
                WHERE id=?";

        $stmt = $db->prepare($sql);

        return $stmt->execute([$id]);
    }

}
?>