<?php
require_once 'Database.php';

class Formation {

    public static function getAll() {

        $pdo = Database::connect();

        $stmt = $pdo->query('SELECT * FROM formations');

        return $stmt->fetchAll();
    }
}
?>