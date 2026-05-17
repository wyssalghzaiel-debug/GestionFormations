<?php

session_start();

$page = $_GET['page'] ?? 'home';

/* ======================
PROTECTION COURS
====================== */

if($page == 'cours'){

    if(
        !isset($_SESSION['paiement_ok'])
        ||
        $_SESSION['paiement_ok'] != true
    ){

        header('Location:index.php?page=paiement');

        exit();
    }
}

/* ======================
ROUTING
====================== */

switch($page){

    case 'home':
        require 'views/home.php';
    break;

    case 'formations':
        require 'views/formations.php';
    break;

    case 'formation':
        require 'views/cours.php';
    break;

    case 'inscription':
    require 'controllers/InscriptionController.php';
    break;

    case 'paiement':
        require 'views/paiement.php';
    break;

    case 'succes':

        $_SESSION['paiement_ok'] = true;

        header(
            'Location:index.php?page=cours&id=' .
            $_SESSION['formation_id']
        );

    break;

    case 'cours':
        require 'views/cours.php';
    break;

    default:
        require 'views/home.php';
}
?>