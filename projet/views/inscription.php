<?php require 'views/partials/header.php'; ?>

<section class="form-page">

<div class="form-container">

<div class="form-left">






</div>


<div class="form-right">

<form method="POST">

<h2>

Inscription Formation

</h2>

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
placeholder="Adresse Email"
required>

<select name="formation_id" required>

<option value="">

Choisir une formation

</option>

<?php foreach($formations as $f): ?>

<option value="<?= $f['id'] ?>">

<?= $f['titre'] ?>

</option>

<?php endforeach; ?>

</select>

<button type="submit">

Valider Inscription

</button>

</form>

</div>

</div>

</section>

<?php require 'views/partials/ffooter.php'; ?>