<?php

require_once 'Database.php';

class InscriptionModel
{

public static function ajouter(
$nom,
$prenom,
$email,
$formation_id
){

$db = Database::connect();

$sql = "INSERT INTO inscriptions
(nom,prenom,email,formation_id)

VALUES(?,?,?,?)";

$stmt = $db->prepare($sql);

return $stmt->execute([
$nom,
$prenom,
$email,
$formation_id
]);

}

public static function getById($id)
{

$db = Database::connect();

$sql = "SELECT * FROM inscriptions
WHERE id = ?";

$stmt = $db->prepare($sql);

$stmt->execute([$id]);

return $stmt->fetch(PDO::FETCH_ASSOC);

}

public static function marquerPaye($id)
{

$db = Database::connect();

$sql = "UPDATE inscriptions
SET statut_paiement='paye'
WHERE id=?";

$stmt = $db->prepare($sql);

return $stmt->execute([$id]);

}

}

?>