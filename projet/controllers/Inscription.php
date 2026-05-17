<?php

require_once 'models/fformation.php';
require_once 'models/iinscriptions.php';

$formations = FormationModel::getAll();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$formation_id = $_POST['formation_id'];

InscriptionModel::ajouter(
$nom,
$prenom,
$email,
$formation_id
);

header(
'Location:index.php?page=paiement&id='
.$formation_id
);

exit();

}

require 'views/inscription.php';

?>