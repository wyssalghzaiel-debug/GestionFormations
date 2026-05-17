<?php require 'partials/header.php'; ?>

<?php

$id = $_GET['id'] ?? 1;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$_SESSION['inscription_ok'] = true;

header('Location:index.php?page=paiement&id='.$id);

exit();

}

?>

<section class="form-container">

<form method="POST" class="premium-form">

<h1>Inscription Formation</h1>

<input
type="text"
name="nom"
placeholder="Nom"
required>

<input
type="text"
name="prenom"
placeholder="Prénom"
required>

<input
type="email"
name="email"
placeholder="Email"
required>

<button type="submit">

Continuer vers paiement

</button>

</form>

</section>

<?php require 'partials/ffooter.php'; ?>