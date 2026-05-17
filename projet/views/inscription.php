<?php require 'partials/header.php'; ?>

<?php

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

?>

<section class="form-container">

<form 
method="POST"
action="index.php?page=inscription&id=<?= $id; ?>"
class="premium-form">

<h1>
Inscription Formation
</h1>

<p class="form-subtitle">
Complétez vos informations pour accéder à la formation.
</p>

<input 
type="hidden"
name="formation_id"
value="<?= $id; ?>">

<div class="form-group">

<label>Nom</label>

<input
type="text"
name="nom"
placeholder="Votre nom"
required>

</div>

<div class="form-group">

<label>Prénom</label>

<input
type="text"
name="prenom"
placeholder="Votre prénom"
required>

</div>

<div class="form-group">

<label>Email</label>

<input
type="email"
name="email"
placeholder="exemple@gmail.com"
required>

</div>

<button type="submit">

Continuer vers paiement

</button>

</form>

</section>

<?php require 'partials/ffooter.php'; ?>