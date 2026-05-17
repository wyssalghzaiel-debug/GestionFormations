<?php

require_once 'Database.php';

class FormationModel
{

public static function getAll()
{

$db = Database::connect();

$sql = "SELECT * FROM formations";

$stmt = $db->query($sql);

return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

public static function getById($id)
{

$db = Database::connect();

$sql = "SELECT * FROM formations WHERE id = ?";

$stmt = $db->prepare($sql);

$stmt->execute([$id]);

return $stmt->fetch(PDO::FETCH_ASSOC);

}

}

?>