<?php require 'partials/header.php'; ?>

<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

require_once 'models/iinscriptions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;


/* =========================================
   VERIFICATION ID INSCRIPTION
========================================= */

if($id <= 0){

    header('Location:index.php?page=formations');

    exit();
}


/* =========================================
   TRAITEMENT PAIEMENT
========================================= */

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    /* ===== UPDATE STATUT ===== */

    InscriptionModel::updatePaiement($id);

    $_SESSION['paiement_ok'] = true;


    /* ===== RECUP FORMATION ===== */

    $inscription = InscriptionModel::getById($id);

    $_SESSION['formation_id']
    = $inscription['formation_id'];


    /* ===== REDIRECTION ===== */

    header(
        'Location:index.php?page=formation&id='
        .
        $_SESSION['formation_id']
    );

    exit();
}

?>

<section class="payment-page">

<div class="payment-container">

<div class="payment-left">




<div class="payment-right">

<form method="POST" class="payment-form">

<h2>
Informations bancaires
</h2>

<div class="form-group">

<label>
Nom sur la carte
</label>

<input
type="text"
name="nom_carte"
placeholder="Nom complet"
required>

</div>


<div class="form-group">

<label>
Numéro carte bancaire
</label>

<input
type="text"
name="numero_carte"
placeholder="1234 5678 9012 3456"
maxlength="19"
required>

</div>


<div class="payment-row">

<div class="form-group">

<label>
Date expiration
</label>

<input
type="text"
name="expiration"
placeholder="MM/AA"
maxlength="5"
required>

</div>


<div class="form-group">

<label>
CVV
</label>

<input
type="password"
name="cvv"
placeholder="123"
maxlength="4"
required>

</div>

</div>


<button type="submit" class="pay-btn">

Payer maintenant

</button>

<div class="secure-payment">

🔒 Paiement 100% sécurisé

</div>

</form>

</div>

</div>

</section>

<?php require 'partials/ffooter.php'; ?>