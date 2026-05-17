<?php

require_once 'models/fformation.php';

$formations = FormationModel::getAll();

require 'views/formations.php';

?>