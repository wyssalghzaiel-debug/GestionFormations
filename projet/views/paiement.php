<?php require 'partials/header.php'; ?>

<?php

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $_SESSION['paiement_ok'] = true;

    header('Location:index.php?page=formation&id='.$id);

    exit();
}

?>

<section class="payment-page">

<div class="payment-box">

<h1>
Paiement sécurisé
</h1>

<p class="payment-subtitle">
Finalisez votre achat pour débloquer
la formation premium.
</p>

<form method="POST">

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

</form>

<div class="secure-payment">

🔒 Paiement 100% sécurisé

</div>

</div>

</section>

<?php require 'partials/ffooter.php'; ?>