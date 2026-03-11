<?php
$formation = array('developement web_', 'reseaux_', 'securite_', 'base_');

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
?>