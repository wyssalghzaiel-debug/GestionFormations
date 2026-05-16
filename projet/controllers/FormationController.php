<?php

require_once 'models/fformation.php';

$formations = Formation::getAll();

require 'views/formations.php';

?>