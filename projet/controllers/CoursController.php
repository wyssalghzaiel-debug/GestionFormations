<?php

require_once 'models/fformation.php';

$id = isset($_GET['id'])
? (int) $_GET['id']
: 1;

$formation = FormationModel::getById($id);

if(!$formation){

die("Formation introuvable");

}

require 'views/cours.php';

?>