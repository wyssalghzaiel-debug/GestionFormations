<?php

require_once 'models/fformation.php';

$id = $_GET['id'] ?? 1;

$formation = Formation::getById($id);

require 'views/cours.php';

?>