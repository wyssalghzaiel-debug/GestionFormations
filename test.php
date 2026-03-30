<?php

$formation = array('developpement web_', 'reseaux_', 'securite_', 'base_');

for($i = 0; $i < count($formation); $i++){
    echo $formation[$i] . "<br>";
}

$user = array(
    'Nom' => 'Amira',
    'Prenom' => 'Ben Ali',
    'Formation' => 'Securite'
);

echo $user['Nom'] . "<br>";
echo $user['Prenom'] . "<br>";
echo $user['Formation'] . "<br>";

$formations = array('Développement Web', 'Réseaux', 'Sécurité', 'Base de données');

foreach ($formations as $f) {
    echo $f . "<br>";
}

$utilisateur = array(
    "nom" => "AYARI",
    "prenom" => "Asma",
    "email" => "asma@email.com",
    "formation" => "Développement Web",
    "Age" => "20"
);

echo "Nom : " . $utilisateur["nom"] . "<br>";
echo "Prénom : " . $utilisateur["prenom"] . "<br>";
echo "Email : " . $utilisateur["email"] . "<br>";
echo "Formation : " . $utilisateur["formation"] . "<br>";
echo "Age : " . $utilisateur["Age"] . "<br>";

$formations_details = array(
    array("nom" => "Développement Web", "duree" => "3 mois"),
    array("nom" => "Réseaux", "duree" => "2 mois"),
    array("nom" => "Sécurité", "duree" => "4 mois")
);

foreach ($formations_details as $formation_item) {
    echo "Formation : " . $formation_item["nom"] . 
         " - Durée : " . $formation_item["duree"] . "<br>";
}

?>