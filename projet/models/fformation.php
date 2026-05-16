<?php

require_once 'Database.php';

class Formation {

    public static function getAll(){

        $pdo = Database::connect();

        $stmt = $pdo->query(
            "SELECT * FROM formations"
        );

        return $stmt->fetchAll();
    }

    public static function getById($id){

        $pdo = Database::connect();

        $stmt = $pdo->prepare(
            "SELECT * FROM formations WHERE id=?"
        );

        $stmt->execute([$id]);

        return $stmt->fetch();
    }
}
?>